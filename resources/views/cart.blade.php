@extends('layouts.master')

@section('content')
<section class="grey section">
    <div class="container">
        <div class="row">
            <div id="content" class="col-md-12 col-sm-12 col-xs-12">
                <div class="blog-wrapper">
                    <div class="row second-bread">
                        <div class="col-md-6 text-left">
                            <h1>Cart & Checkout</h1>
                        </div>
                        <div class="col-md-6 text-right">
                            <div class="bread">
                                <ol class="breadcrumb">
                                    <li><a href="#">Home</a></li>
                                    <li class="active">Checkout</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="blog-wrapper">
                    <div class="blog-desc">
                        @if ($message = Session::get('success'))
                        <div class="p-4 mb-3 bg-success rounded">
                            <p class="text-danger">{{ $message }}</p>
                        </div>
                        @endif
                        <div class="shop-cart">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>
                                            Item Name
                                        </th>
                                        <th>
                                            Item Price
                                        </th>
                                        <th>
                                            Actions
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cartItems as $item)
                                    <tr>
                                        <td>
                                            <a href="#"><img
                                                    src="{{ asset('uploads/course') }}/{{ $item->attributes->image }}"
                                                    alt="" class="alignleft img-thumbnail"> {{ $item->name }}</a>
                                        </td>
                                        <td>
                                            ${{ $item->price }}
                                        </td>
                                        <td class="remove">
                                            <form action="{{ route('cart.remove') }}" method="POST">
                                                @csrf
                                                <input type="hidden" value="{{ $item->id }}" name="id">
                                                <button class="btn btn-primary btn-sm"
                                                    class="px-4 py-2 text-white bg-red-600">Remove</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th colspan="5" class="text-right">
                                            Total: ${{ Cart::getTotal() }}
                                        </th>
                                    </tr>
                                </tfoot>
                            </table>
                            <div class="coupon-code-wrapper">
                                <p>
                                    <a class="btn btn-default btn-block" role="button" data-toggle="collapse"
                                        href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                        Have a coupon code? Click to enter here
                                    </a>
                                </p>
                                <div class="collapse" id="collapseExample">
                                    <div class="well">
                                        <div class="media">
                                            <p>Enter a coupon code if you have one.</p>
                                            <div class="couponform">
                                                <form>
                                                    <input type="text" class="form-control"
                                                        placeholder="Enter coupon code here.">
                                                    <button class="btn btn-primary">Apply Code</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr class="invis">
                            <div class="payment-methods">
                                <img src="images/xcredit.jpg.pagespeed.ic.lGluDMrwzI.jpg" alt="">
                            </div>
                            <hr class="invis">
                            <hr class="invis">

                            <div class="edit-profile">
                                <form role="form">
                                    @if (!Auth::guard('web')->check())
                                    <div class="form-group">
                                        <label>First / Last Name</label>
                                        <input type="text" class="form-control" placeholder="Amanda FOX">
                                    </div>
                                    <div class="form-group">
                                        <label>Email Address</label>
                                        <input type="email" class="form-control" placeholder="name@learnplus.com">
                                    </div>
                                    <div class="form-group">
                                        <label>Username</label>
                                        <input type="text" class="form-control" placeholder="Username">
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" class="form-control" placeholder="************">
                                    </div>
                                    <div class="form-group">
                                        <label>Re-Enter Password</label>
                                        <input type="password" class="form-control" placeholder="************">
                                    </div>
                                    @else
                                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                    <div class="well total-price">
                                        <p>You Logged in as a {{ Auth::user()->name }}. If you cannot purchases this
                                            account please logout first. </p>
                                    </div>
                                    @endif
                                    <div class="well total-price">
                                        <p><strong> Purchase Total:</strong> ${{ Cart::getTotal() }} </p>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Pay Now</button>
                                </form>
                            </div>


                            <hr class="invis">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection