<!-- Top Cart ============================================= -->

<div id="top-cart">
    <a href="#" id="top-cart-trigger"><i class="icon-shopping-cart"></i><span>{!! $cart->count() !!} </span></a>
    <div class="top-cart-content">
        <div class="top-cart-title">
            <h4>Shopping Cart</h4>
        </div>
        <div class="top-cart-items">
         @foreach($cart as $item)
            <div class="top-cart-item clearfix">
    {{--             <div class="top-cart-item-image">
                    <a href="#"><img src="{!! $item->product->thumbnail !!}" alt="Blue Round-Neck Tshirt" /></a>
                </div> --}}
                <div class="top-cart-item-desc">
                    <a href="#">  {!! $item->product->name !!}  </a>
                    <span class="top-cart-item-price">  {!! $item->product->price*$item->amount !!}  </span>
                    <span class="top-cart-item-quantity">x   {!! $item->amount  !!} </span>
                </div>
            </div>
            @endforeach

        </div>
        <div class="top-cart-action clearfix">
            <span class="fleft top-checkout-price">$ {!! $total !!} </span>
            <button class="button button-3d button-small nomargin fright" data-href="{!! url(getLang().'/cart') !!}">View Cart</button>
        </div>
    </div>
</div><!-- #top-cart end -->


{{-- @endif --}}
{{--
            <li class="dropdown cart">
                    <a href="#" class="dropdown-toggle fa fa-shopping-cart " data-toggle="dropdown"><span id="cart-items">{{ $cart->count() }}</span></b></a>
                    <ul class="dropdown-menu">
                       @foreach($cart as $item)
                        <li>
                            <div class="item">{{ $item->product->name }} <span class="price">${{ $item->product->price*$item->amount }}<i class="fa fa-times-circle clickable" id="remove-item" data-href="{{ url('/cart/remove/'.$item->product->id) }}"></i></span> </div>
                        </li>
                        @endforeach
                        <li class="total">
                            TOTAL <span class="price">${{ $total }}</span>
                            <div id="chekout-btn" class="clickable" data-href="{{ url('/cart') }}">proceed to checkout</div>
                        </li>
                    </ul>
                </li> --}}
