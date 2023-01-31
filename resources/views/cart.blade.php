@extends('layouts.master')
@section('title','Cart')
@section('content')
<section class="page-header">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-xl-8">
                <div class="title-block">
                    <h1>Cart</h1>
                    <ul class="header-bradcrumb justify-content-center">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li class="active" aria-current="page">Cart</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--shop category start-->
<section class="woocommerce single page-wrapper">
    <div class="container">
        <div class="row">
            @if ($message = Session::get('success'))
            <div class="p-4 mb-3 bg-success rounded">
                <p class="text-success">{{ $message }}</p>
            </div>
            @endif
            <div class="col-lg-12 col-xl-12">
                <div class="woocommerce-cart">
                    <div class="woocommerce-notices-wrapper"></div>
                    <form class="woocommerce-cart-form" action="" method="">
                        <table class="shop_table shop_table_responsive cart woocommerce-cart-form__contents"
                            cellspacing="0">
                            <thead>
                                <tr>
                                    <th class="product-remove">&nbsp;</th>
                                    <th class="product-thumbnail">thumbnail</th>
                                    <th class="product-name">Course</th>
                                    <th class="product-price">Price</th>
                                    <th class="product-subtotal">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($cartItems as $item)
                                <tr class="woocommerce-cart-form__cart-item cart_item">
                                    <td class="product-remove">
                                        <form action="{{ route('cart.remove') }}" method="POST">
                                            @csrf
                                            <input type="hidden" value="{{ $item->id }}" name="id">
                                            <button class="remove btn btn-danger btn-sm">X</button>
                                        </form>
                                        {{-- <a href="#" class="remove" aria-label="Remove this item"
                                            data-product_id="30" data-product_sku="">×</a> --}}
                                    </td>
                                    <td class="product-thumbnail">
                                        <a href="#"><img width="324" height="324"
                                                src="{{ asset('uploads/course') }}/{{ $item->attributes->image }}"
                                                class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                alt=""></a>
                                    </td>

                                    <td class="product-name" data-title="Product">
                                        <a href="#">{{ $item->name }}</a>
                                    </td>

                                    <td class="product-price" data-title="Price">
                                        <span class="woocommerce-Price-amount amount"><span
                                                class="woocommerce-Price-currencySymbol">{{ setting('currency_symbol')
                                                }}</span>{{ $item->price }}</span>
                                    </td>
                                    <td class="product-subtotal" data-title="Total">
                                        <span class="woocommerce-Price-amount amount"><span
                                                class="woocommerce-Price-currencySymbol">{{ setting('currency_symbol')
                                                }}</span>{{ $item->price }}</span>
                                    </td>
                                </tr>
                                @endforeach
                                <tr>
                                    <td colspan="6" class="actions">
                                        <div class="coupon">
                                            <label for="coupon_code">Coupon:</label> <input type="text"
                                                name="coupon_code" class="input-text" id="coupon_code" value=""
                                                placeholder="Coupon code"> <button type="submit" class="button"
                                                name="apply_coupon" value="Apply coupon">Apply coupon</button>
                                        </div>
                                        <button type="submit" class="button" name="update_cart" value="Update cart"
                                            disabled="">Update cart</button>
                                        <input type="hidden" id="woocommerce-cart-nonce" name="woocommerce-cart-nonce"
                                            value="27da9ce3e8"><input type="hidden" name="_wp_http_referer"
                                            value="/cart/">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </form>
                </div>
            </div>
        </div>

        <div class="row justify-content-end">
            <div class="col-lg-4">
                <div class="cart-collaterals mt-5">
                    <div class="cart_totals ">
                        <h2>Cart totals</h2>
                        <table cellspacing="0" class="shop_table shop_table_responsive">
                            <tbody>
                                <tr class="cart-subtotal">
                                    <th>Subtotal</th>
                                    <td data-title="Subtotal"><span class="woocommerce-Price-amount amount"><span
                                                class="woocommerce-Price-currencySymbol">{{ setting('currency_symbol')
                                                }}</span>{{ Cart::getTotal()
                                            }}</span></td>
                                </tr>
                                <tr class="order-total">
                                    <th>Total</th>
                                    <td data-title="Total"><strong><span class="woocommerce-Price-amount amount"><span
                                                    class="woocommerce-Price-currencySymbol">{{
                                                    setting('currency_symbol') }}</span>{{ Cart::getTotal()
                                                }}</span></strong>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="wc-proceed-to-checkout">
                            <a href="{{ route('cart.checkout') }}" class="checkout-button button alt wc-forward">
                                Proceed to checkout
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--shop category end-->
@endsection