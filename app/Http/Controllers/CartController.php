<?php

namespace App\Http\Controllers;

use App;
use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\OptionValue;
use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\Payment;
use App\Models\Product;
use App\Models\User;
use App\Models\UserInfo;
use Illuminate\Http\Request;
use Sentinel;
use Session;
use \Ecommerce\helperFunctions;
use \Illuminate\Database\Eloquent\Collection;

class CartController extends Controller
{

    public function __construct()
    {

        $this->middleware('sentinel.auth', ['except' => [
                'index',
                'add',
                'remove',
                'clear',
        ]]);
    }

    public function getUserId()
    {
        return Sentinel::getUser()->getUserId();
    }

    public function index()
    {

        if (Sentinel::check())
        {
            // $user = Sentinel::getUser();
            // $userid = Sentinel::getUser()->getUserId();
            // $cart = Cart::where('user_id', $userid)->first();
            $cart = Cart::where('user_id', Sentinel::getUser()->id)->first();
            // $cart = $user->cart;
        }
        else
        {
            $cart = new Collection;
            if (Session::has('cart'))
            {
                foreach (Session::get('cart') as $item)
                {
                    $elem = new Cart;
                    $elem->product_id = $item['product_id'];
                    $elem->amount = $item['quantity'];
                    if (isset($item['options']))
                    {
                        $elem->options = $item['options'];
                    }
                    $cart->add($elem);
                }
            }
        }
        $total = 0;
        $options = new Collection;
        foreach ($cart as $item)
        {
            $total += $item->product->price * $item->amount;
            if ($item->options)
            {
                $values = explode(',', $item->options);
                foreach ($values as $value)
                {
                    $options->add(OptionValue::find($value));
                }
            }
        }
        return view('frontend.shop.cart', compact('total', 'cart', 'options'));
    }

    public function add($product_id, Request $request)
    {
//         dd(Session::all());
        dd($product_id, $request->all());
        $pid = Product::findOrFail($product_id)->id;
        // dd($pid);
        if ((Product::find($pid)->quantity - $request->quantity) < 0)
        {

            FlashAlert()->error('Yikes!', 'The Product Was NOT Successfully Added');
            return Redirect()->back();
        }
        /**
         * Check If the user is a guest , if so store the cart in a session
         */
        if (Sentinel::check())
        {
            $exists = 0;
            /**
             * Check if the product already exists in the cart, if so increment the quantity
             */
            if (Session::has('cart'))
            {
//                 dd(Session::all());

                foreach (Session::get('cart') as $key => $cart)
                {
                    if ($cart['product_id'] == $product_id)
                    {
                        $cart['quantity'] += $request->quantity;
                        if ($cart['quantity'] <= 0)
                        {
                            $cart['quantity'] = 1;
                        }
                        Session::forget('cart.' . $key);
                        if ($request->options)
                        {
                            Session::push('cart', [
                                'product_id' => $product_id,
                                'quantity' => $cart['quantity'],
                                'options' => implode(',', $request->options),
                            ]);
                        }
                        else
                        {
                            Session::push('cart', [
                                'product_id' => $product_id,
                                'quantity' => $cart['quantity'],
                            ]);
                        }
                        $exists = 1;
                        break;
                    }
                }
            }
 
            /**
             * If the product is not in the cart , add a new one
             */
            if (!$exists)
            {
                if ($request->options)
                {
                    Session::push('cart', [
                        'product_id' => $product_id,
                        'quantity' => $request->quantity,
                        'options' => implode(',', $request->options),
                    ]);
                }
                else
                {
                    Session::push('cart', [
                        'product_id' => $product_id,
                        'quantity' => $request->quantity,
                    ]);
                }
            }
        }

        /**
         * If the user is logged in , store the cart in the database
         */
        else
        {
           if (count( $cart = Cart::whereProduct_idAndUser_id($product_id, Sentinel::findById(1) ) ))
                  //  $cart = Cart::where('user_id', Sentinel::getUser()->id)->first();
            {
                $request->quantity ? $cart->amount += $request->quantity : $cart->amount += 1;
                if ($cart->amount <= 0)
                {
                    $cart->amount = 1;
                }
                $cart->save();
            }
            else
            {
                $cart = new Cart;
                $cart->user_id = Sentinel::findById(1);
                $cart->product_id = $pid;
                if ($request->options)
                {
                    $cart->options = implode(',', $request->options);
                }
                $request->quantity ? $cart->amount = $request->quantity : $cart->amount = 1;
                if ($cart->amount <= 0)
                {
                    $cart->amount = 1;
                }
                $cart->save();
            }
        }
        return \Redirect()->back()->with([
                    'flash_message' => 'Added to Cart !',
        ]);
    }

    public function remove($product_id)
    {
        if (Sentinel::check())
        {
//            Cart::whereProduct_idAndUser_id($product_id,  $user_id = Sentinel::getUser()->getUserId()->delete());
            Cart::whereProduct_idAndUser_id($product_id, $user_id = getUserId()->delete());
        }
        else
        {
            foreach (Session::get('cart') as $key => $item)
            {
                if ($item['product_id'] == $product_id)
                {
                    Session::forget('cart.' . $key);
                    break;
                }
            }
        }
        return \Redirect()->back()->with([
                    'flash_message' => 'Product Removed From Cart !',
                    'flash-warning' => true,
        ]);
    }

    public function clear()
    {
        if (Sentinel::check())
        {
            Sentinel::getUser()->cart()->delete();
        }
        else
        {
            Session::flush('cart');
        }
        return \Redirect()->back();
    }

    public function payment(Request $request)
    {

        $userCart = Sentinel::getUser()->getUserId()->cart;
        $total = 0;
        foreach ($userCart as $item)
        {
            $total += ($item->product->price) * ($item->amount);
        }
        if (Session::has('coupon'))
        {
            $total = $total - (($total * Session::get('coupon.discount')) / 100);
        }
        $billing = App::make('App\Ecommerce\Billing\BillingInterface');
        $billing->charge([
            'email' => Sentinel::getUser()->email,
            'token' => $request->stripeToken,
            'amount' => $total,
        ]);
        $order = Order::create([
                    'user_id' => getUserId(),
                    'amount' => $total,
                    'status' => 'Processing',
                    'firstname' => Session::get('shipping.firstname'),
                    'lastname' => Session::get('shipping.lastname'),
                    'shipping_address' => Session::get('shipping.address'),
                    'shipping_city' => Session::get('shipping.city'),
                    'shipping_zipcode' => Session::get('shipping.zipcode'),
                    'shipping_country' => Session::get('shipping.country'),
                    'payment_method' => 'Credit Card',
                    'phone' => Session::get('shipping.phone'),
                    'coupon_id' => Session::get('coupon.id'),
        ]);
        Session::forget('coupon');
        foreach ($userCart as $item)
        {
            OrderProduct::create([
                'order_id' => $order->id,
                'product_id' => $item->product_id,
                'amount' => $item->amount,
                'options' => $item->options,
            ]);
            $item->product->quantity -= $item->amount;
            $item->product->save();
        }
        $this->clear();
        return \Redirect('/dashboard')->with([
                    'alert-success' => 'Payment success',
        ]);
    }

    public function shipping()
    {
        if (!Sentinel::getUser()->cart->count())
        {
            return \Redirect()->back()->with([
                        'flash_message' => 'Your Cart is empty !',
                        'flash-warning' => true,
            ]);
        }
        else
        {
            $user = Sentinel::getUser();
            helperFunctions::getCartInfo($cart, $total);
            return view('frontend.account.shipping', compact('total', 'cart', 'user'));
        }
    }

    public function storeShippingInformation(Request $request)
    {
        $this->validate($request, [
            'firstname' => 'required',
            'lastname' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'city' => 'required',
            'country' => 'required',
        ]);
        $user = Sentinel::findUserById();
        Session::put('shipping', $request->except('_token'));
        $userInfo = userInfo::where('user_id', $user()->id);
        $userInfo->update([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'address' => $request->address,
            'city' => $request->city,
            'country' => $request->country,
            'zipcode' => $request->zipcode,
        ]);
        helperFunctions::getCartInfo($cart, $total);
        $publishable_key = Payment::first()->stripe_publishable_key;
        return view('frontend.ecom.payment', compact('total', 'cart', 'publishable_key'));
    }
}