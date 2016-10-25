<?php namespace App\Ecommerce;

use App\Models\Cart;
use Sentinel;
use Session;
use \Illuminate\Database\Eloquent\Collection;

class helperFunctions
{
    public static function getCartInfo(&$cart, &$total)
    {
        if (Sentinel::check()) {
            $cart = Sentinel::getUser()->cart;
        } else {
            $cart = new Collection;
            if (Session::has('cart')) {
                foreach (Session::get('cart') as $item) {
                    $elem = new Cart;
                    $elem->product_id = $item['product_id'];
                    $elem->amount = $item['quantity'];
                    if (isset($item['options'])) {
                        $elem->options = $item['options'];
                    }
                    $cart->add($elem);
                }
            }
        }
        $total = 0;
        foreach ($cart as $item) {
            $total += $item->product->price * $item->amount;
        }
    }
}
