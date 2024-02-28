@extends('layouts.app')

@section('content')

<section class="page-header page-header--bg-two" data-jarallax data-speed="0.3" data-imgPosition="50% -100%">
    <div class="page-header__bg jarallax-img"></div><!-- /.page-header-bg -->
    <div class="page-header__overlay"></div><!-- /.page-header-overlay -->
    <div class="container text-center">
        <h2 class="page-header__title">Checkout</h2><!-- /.page-title -->
        <ul class="page-header__breadcrumb list-unstyled">
            <li><a href="index.html">Home</a></li>
            <li><span>Shop</span></li>
        </ul><!-- /.page-breadcrumb list-unstyled -->
    </div><!-- /.container -->
</section><!-- /.page-header -->
<!-- Checkout Start -->
<section class="checkout-page">
    <div class="container">
        <div class="checkout-page__notice">Have a coupon? <a href="login.html">Click here to enter your code</a></div>
        <div class="row">
            <div class="col-xl-6 col-lg-6">
                <div class="checkout-page__billing-address">
                    <h2 class="checkout-page__billing-address__title">Billing Details</h2>
                    <form class="checkout-page__form">
                        <div class="row bs-gutter-x-20">
                            <div class="col-xl-6">
                                <div class="checkout-page__input-box">
                                    <input type="text" name="first_name" value="" placeholder="Frist Name" required="">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="checkout-page__input-box">
                                    <input type="text" name="last_name" value="" placeholder="Last Name" required="">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="checkout-page__input-box">
                                    <input type="email" name="email" value="" placeholder="Email Address" required="">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="checkout-page__input-box">
                                    <input type="text" name="phone" value="" placeholder="Phone Number" required="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="checkout-page__input-box">
                                    <input type="text" name="company_name" value="" placeholder="Company">
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="checkout-page__input-box">
                                    <input type="text" name="Address" value="" placeholder="Address">
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="checkout-page__input-box">
                                    <input type="text" name="company_name" value="" placeholder="Apartment, Unit, etc(optional)">
                                </div>
                            </div>
                        </div>
                        <div class="row bs-gutter-x-20">
                            <div class="col-xl-6">
                                <div class="checkout-page__input-box">
                                    <input type="text" name="Town/City" value="" placeholder="Town/City" required="">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="checkout-page__input-box">
                                    <input type="text" name="State" value="" placeholder="State" required="">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="checkout-page__input-box">
                                    <input name="form_zip" type="text" pattern="[0-9]*" placeholder="Zip code">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="checkout-page__input-box">
                                    <select class="selectpicker" aria-label="Default select example">
                                        <option selected="">Country</option>
                                        <option value="1">Canada</option>
                                        <option value="2">England</option>
                                        <option value="3">Australia</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </form>
                    <h2 class="checkout-page__billing-address__title">Shipping Details</h2>
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="checkout-page__check-box">
                                <input type="checkbox" name="skipper4" id="skipper4" checked="">
                                <label for="skipper4">Same as Billing Details<span></span></label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="checkout-page__shipping-address">
                    <h2 class="checkout-page__shipping-address__title">Additional Information</h2>
                    <form class="checkout-page__form">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="checkout-page__input-box">
                                    <textarea placeholder="Write a Message" name="form_order_notes"></textarea>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="checkout-page__your-order">
            <h2 class="checkout-page__your-order__title">Your Order</h2>
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <table class="checkout-page__order-table">
                        <thead class="order_table_head">
                            <tr>
                                <th>Product</th>
                                <th class="right">Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="pro__title">Product Name</td>
                                <td class="pro__price">$10.99</td>
                            </tr>
                            <tr>
                                <td class="pro__title">Subtotal</td>
                                <td class="pro__price">$10.99</td>
                            </tr>
                            <tr>
                                <td class="pro__title">Shipping</td>
                                <td class="pro__price">$0.00</td>
                            </tr>
                            <tr>
                                <td class="pro__title">Total</td>
                                <td class="pro__price">$20.98</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-lg-6">
                    <div class="checkout-page__payment">
                        <div class="checkout-page__payment__item checkout-page__payment__item--active">
                            <h3 class="checkout-page__payment__title">Direct bank transfer</h3>
                            <div class="checkout-page__payment__content" style="display: none;">
                                Make your payment directly into our bank account. Please use your Order ID as the payment reference.
                                Your order will not be shipped until the funds have cleared in our account.
                            </div><!-- /.checkout__payment__content -->
                        </div><!-- /.checkout__payment__item -->
                        <div class="checkout-page__payment__item">
                            <h3 class="checkout-page__payment__title">Cash on delivery</h3>
                            <div class="checkout-page__payment__content" style="display: none;">
                                Make your payment directly into our bank account. Please use your Order ID as the payment reference.
                                Your order will not be shipped until the funds have cleared in our account.
                            </div><!-- /.checkout__payment__content -->
                        </div><!-- /.checkout__payment__item -->
                    </div><!-- /.checkout__payment -->
                    <div class="d-flex">
                        <a href="checkout.html" class="eduact-btn eduact-btn-second"><span class="eduact-btn__curve"></span>Plance your Order<i class="icon-arrow"></i></a>
                    </div><!-- /.text-right -->

                </div><!-- /.col-lg-6 -->
            </div>
        </div>
    </div>
</section>
<!-- Checkout End -->



@endsection
