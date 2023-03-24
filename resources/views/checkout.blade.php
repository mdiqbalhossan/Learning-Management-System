@extends('layouts.master')
@section('title','Checkout')

@section('content')
<section class="page-header">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-xl-8">
                <div class="title-block">
                    <h1>Checkout</h1>
                    <ul class="header-bradcrumb justify-content-center">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li class="active" aria-current="page">Checkout</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- checkout start -->
<main class="site-main woocommerce single single-product page-wrapper">
    <!--shop category start-->
    <section class="space-3">
        <div class="container">
            <div class="row">
                <section id="primary" class="content-area col-lg-12">
                    <article id="post-8" class="post-8 page type-page status-publish hentry">
                        <div class="entry-content">
                            <div class="woocommerce">
                                <div class="woocommerce-notices-wrapper"></div>
                                <div class="woocommerce-form-coupon-toggle">
                                    <div class="woocommerce-info">
                                        Have a coupon? <a href="#" class="showcoupon">Click here to enter your code</a>
                                    </div>
                                </div>

                                <div id="coupon_form">
                                    <form class="checkout_coupon woocommerce-form-coupon" method="post">

                                        <p>If you have a coupon code, please apply it below.</p>

                                        <p class="form-row form-row-first">
                                            <input type="text" name="coupon_code" class="input-text"
                                                placeholder="Coupon code" id="coupon_code" value="">
                                        </p>

                                        <p class="form-row form-row-last">
                                            <button type="submit" class="button" name="apply_coupon"
                                                value="Apply coupon">Apply coupon</button>
                                        </p>

                                        <div class="clear"></div>
                                    </form>
                                </div>
                                <div class="woocommerce-notices-wrapper"></div>
                                <form name="checkout" method="POST" action="{{ route('cart.payment') }}"
                                    class="checkout woocommerce-checkout row" action="#" enctype="multipart/form-data"
                                    novalidate="novalidate">
                                    @csrf
                                    <div class="col-lg-7 col-xl-7">
                                        <div class="col2-set" id="customer_details">
                                            <div class="col-12">
                                                <div class="woocommerce-billing-fields">
                                                    <h3>Billing details</h3>
                                                    @if (Auth::guard('web')->check())
                                                    <div class="woocommerce-form-coupon-toggle">
                                                        <div class="woocommerce-info">
                                                            You are logged in, your name, email and phone number will be
                                                            automatically filled.
                                                        </div>
                                                    </div>
                                                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                                    @else
                                                    <div class="woocommerce-billing-fields__field-wrapper">
                                                        <p class="form-row form-row-first form-group validate-required"
                                                            id="billing_first_name_field" data-priority="10">
                                                            <label for="billing_first_name" class="control-label">
                                                                Name&nbsp;<abbr class="required"
                                                                    title="required">*</abbr></label>
                                                            <span class="woocommerce-input-wrapper">
                                                                <input type="text"
                                                                    class="input-text form-control input-lg" name="name"
                                                                    id="billing_first_name" placeholder="" value="John"
                                                                    autocomplete="given-name">
                                                            </span>
                                                        </p>
                                                        <p class="form-row form-row-wide form-group validate-required validate-phone"
                                                            id="billing_phone_field" data-priority="100">
                                                            <label for="billing_phone"
                                                                class="control-label">Phone&nbsp;<abbr class="required"
                                                                    title="required">*</abbr></label>
                                                            <span class="woocommerce-input-wrapper"><input type="tel"
                                                                    class="input-text form-control input-lg"
                                                                    name="phone" id="billing_phone" placeholder=""
                                                                    value="99182" autocomplete="tel"></span>
                                                        </p>
                                                        <p class="form-row form-row-wide form-group validate-required validate-email"
                                                            id="billing_email_field" data-priority="110">
                                                            <label for="billing_email" class="control-label">Email
                                                                address&nbsp;<abbr class="required"
                                                                    title="required">*</abbr></label>
                                                            <span class="woocommerce-input-wrapper"><input type="email"
                                                                    class="input-text form-control input-lg"
                                                                    name="email" id="billing_email" placeholder=""
                                                                    value="me@mail.com"
                                                                    autocomplete="email username"></span>
                                                        </p>
                                                        <p class="form-row form-row-wide form-group validate-required validate-email"
                                                            id="billing_email_field" data-priority="110">
                                                            <label for="billing_email"
                                                                class="control-label">Password&nbsp;<abbr
                                                                    class="required" title="required">*</abbr></label>
                                                            <span class="woocommerce-input-wrapper"><input
                                                                    type="password"
                                                                    class="input-text form-control input-lg"
                                                                    name="password" id="billing_email"></span>
                                                        </p>
                                                        <p class="form-row form-row-wide form-group validate-required validate-email"
                                                            id="billing_email_field" data-priority="110">
                                                            <label for="billing_email" class="control-label">Re-enter
                                                                Password&nbsp;<abbr class="required"
                                                                    title="required">*</abbr></label>
                                                            <span class="woocommerce-input-wrapper"><input
                                                                    type="password"
                                                                    class="input-text form-control input-lg"
                                                                    name="password_confirmation"
                                                                    id="billing_email"></span>
                                                        </p>
                                                    </div>
                                                    @endif


                                                </div>

                                            </div>

                                            <div class="col-12">
                                                <div class="woocommerce-shipping-fields">
                                                </div>
                                                <div class="woocommerce-additional-fields">
                                                    <h3>Additional information</h3>
                                                    <div class="woocommerce-additional-fields__field-wrapper">
                                                        <p class="form-row notes" id="order_comments_field"
                                                            data-priority=""><label for="order_comments"
                                                                class="control-label">Order notes&nbsp;<span
                                                                    class="optional">(optional)</span></label><span
                                                                class="woocommerce-input-wrapper"><textarea
                                                                    name="order_comments"
                                                                    class="input-text form-control input-lg"
                                                                    id="order_comments"
                                                                    placeholder="Notes about your order, e.g. special notes for delivery."
                                                                    rows="4" cols="5"></textarea></span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-5 col-xl-5">
                                        <div id="order_review" class="woocommerce-checkout-review-order">
                                            <h3 id="order_review_heading">Your order</h3>
                                            <table class="shop_table woocommerce-checkout-review-order-table">
                                                <thead>
                                                    <tr>
                                                        <th class="product-name">Course</th>
                                                        <th class="product-total">Total</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($cartItems as $item)
                                                    <tr class="cart_item">
                                                        <td class="product-name">
                                                            {{ $item->name }}&nbsp;
                                                        </td>
                                                        <td class="product-total">
                                                            <span class="woocommerce-Price-amount amount"><span
                                                                    class="woocommerce-Price-currencySymbol">{{
                                                                    setting('currency_symbol') }}&nbsp;</span>{{
                                                                $item->price }}</span>
                                                        </td>
                                                    </tr>
                                                    @endforeach

                                                </tbody>
                                                <tfoot>

                                                    <tr class="cart-subtotal">
                                                        <th>Subtotal</th>
                                                        <td><span class="woocommerce-Price-amount amount"><span
                                                                    class="woocommerce-Price-currencySymbol">{{
                                                                    setting('currency_symbol')
                                                                    }}&nbsp;</span>{{ Cart::getTotal() }}</span>
                                                        </td>
                                                    </tr>

                                                    <tr class="order-total">
                                                        <th>Total</th>
                                                        <td><strong><span class="woocommerce-Price-amount amount"><span
                                                                        class="woocommerce-Price-currencySymbol">{{
                                                                        setting('currency_symbol')
                                                                        }}&nbsp;</span>{{ Cart::getTotal()
                                                                    }}</span></strong>
                                                        </td>
                                                    </tr>
                                                </tfoot>
                                            </table>

                                            <div id="payment" class="woocommerce-checkout-payment">
                                                <ul class="wc_payment_methods payment_methods methods">
                                                    <li class="wc_payment_method payment_method_cod">
                                                        <input id="payment_method_cod" type="radio" class="input-radio"
                                                            name="payment_method" value="cod" checked="checked"
                                                            data-order_button_text="" style="display: none;">

                                                        <label for="payment_method_cod">
                                                            Bkash/Nagad </label>
                                                        <div class="payment_box payment_method_cod">
                                                            <p>Pay with Bkash/Nagad</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <div class="form-row place-order">
                                                    <noscript>
                                                        Since your browser does not support JavaScript, or it is
                                                        disabled, please ensure you click the <em>Update Totals</em>
                                                        button before placing your order. You may be charged more than
                                                        the amount stated above if you fail to do so. <br />
                                                        <button type="submit" class="button alt"
                                                            name="woocommerce_checkout_update_totals"
                                                            value="Update totals">Update totals</button>
                                                    </noscript>

                                                    <div class="woocommerce-terms-and-conditions-wrapper">
                                                        <div class="woocommerce-privacy-policy-text">
                                                            <p>Your personal data will be used to process your order,
                                                                support your experience throughout this website, and for
                                                                other purposes described in our <a href="#"
                                                                    class="woocommerce-privacy-policy-link"
                                                                    target="_blank">privacy policy</a>.</p>
                                                        </div>
                                                    </div>

                                                    <button type="submit" class="button alt"
                                                        name="woocommerce_checkout_place_order" id="place_order"
                                                        value="Place order" data-value="Place order">Place
                                                        order</button>
                                                    <input type="hidden" id="woocommerce-process-checkout-nonce"
                                                        name="woocommerce-process-checkout-nonce"
                                                        value="c75f934b1d"><input type="hidden" name="_wp_http_referer"
                                                        value="/?wc-ajax=update_order_review">
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </form>

                            </div>
                        </div><!-- .entry-content -->

                    </article><!-- #post-## -->

                </section>
            </div>
        </div>
    </section>
</main>
@endsection

@push('js')
<script>
    $(document).ready(function () {
        $('#coupon_form').hide();
        $('.showcoupon').on('click', function () {
            $('#coupon_form').slideToggle();
        });
    });
</script>
@endpush