@extends('layouts.app')

@section('content')

<section class="page-header page-header--bg-two" data-jarallax data-speed="0.3" data-imgPosition="50% -100%">
    <div class="page-header__bg jarallax-img"></div><!-- /.page-header-bg -->
    <div class="page-header__overlay"></div><!-- /.page-header-overlay -->
    <div class="container text-center">
        <h2 class="page-header__title">Cart</h2><!-- /.page-title -->
        <ul class="page-header__breadcrumb list-unstyled">
            <li><a href="index.html">Home</a></li>
            <li><span>Shop</span></li>
        </ul><!-- /.page-breadcrumb list-unstyled -->
    </div><!-- /.container -->
</section><!-- /.page-header -->
<!-- Cart Start -->
<section class="cart-page">
    <div class="container">
        <div class="table-responsive">
            <table class="table cart-page__table">
                <thead>
                    <tr>
                        <th>Item</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                        <th>Remove</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div class="cart-page__table__meta">
                                <div class="cart-page__table__meta-img">
                                    <img src="{{ asset('frontend/assets/images/product/cart-page-img-1.jpg') }}" alt="eduact">
                                </div>
                                <h3 class="cart-page__table__meta-title"><a href="product-details.html">Office Chair</a>
                                </h3>
                            </div>
                        </td>
                        <td>$10.99</td>
                        <td>
                            <div class="product-details__quantity">
                                <div class="quantity-box">
                                    <button type="button" class="sub"><i class="fa fa-minus"></i></button>
                                    <input type="number" value="1">
                                    <button type="button" class="add"><i class="fa fa-plus"></i></button>
                                </div>
                            </div>
                        </td>
                        <td>$10.99</td>
                        <td>
                            <a href="cart.html" class="table cart-page__table__remove"><span class="icon-close"></span></a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="cart-page__table__meta">
                                <div class="cart-page__table__meta-img">
                                    <img src="{{ asset('frontend/assets/images/product/cart-page-img-2.jpg') }}" alt="eduact">
                                </div>
                                <h3 class="cart-page__table__meta-title"><a href="product-details.html">Round Chair</a>
                                </h3>
                            </div>
                        </td>
                        <td>$10.99</td>
                        <td>
                            <div class="product-details__quantity">
                                <div class="quantity-box">
                                    <button type="button" class="sub"><i class="fa fa-minus"></i></button>
                                    <input type="number" value="1">
                                    <button type="button" class="add"><i class="fa fa-plus"></i></button>
                                </div>
                            </div>
                        </td>
                        <td>$10.99</td>
                        <td><a href="cart.html" class="table cart-page__table__remove"><span class="icon-close"></span></a></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="row">
            <div class="col-xl-8 col-lg-7">
                <form action="#" class="cart-page__coupone-form">
                    <input type="text" placeholder="Enter coupon code" class="cart-cupon__input">
                    <button type="submit" class="eduact-btn eduact-btn-second"><span class="eduact-btn__curve"></span>Apply Coupon<i class="icon-arrow"></i></button>
                </form>
            </div>
            <div class="col-xl-4 col-lg-5">
                <ul class="cart-page__cart-total list-unstyled">
                    <li><span>Subtotal</span><span class="cart-page__cart-total-amount">$20.33</span></li>
                    <li><span>Shipping</span><span class="cart-page__cart-total-amount">$0.00</span></li>
                    <li><span>Total</span><span class="cart-page__cart-total-amount">$20.98</span></li>
                </ul>
                <div class="cart-page__buttons">
                    <a href="cart.html" class="eduact-btn eduact-btn-second update"><span class="eduact-btn__curve"></span>Update<i class="icon-arrow"></i></a>
                    <a href="cart.html" class="eduact-btn eduact-btn-second checkout"><span class="eduact-btn__curve"></span>Checkout<i class="icon-arrow"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Cart End -->



@endsection
