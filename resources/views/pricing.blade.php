@extends('layouts.app')

@section('content')
<section class="page-header page-header--bg-two" data-jarallax data-speed="0.3" data-imgPosition="50% -100%">
    <div class="page-header__bg jarallax-img"></div><!-- /.page-header-bg -->
    <div class="page-header__overlay"></div><!-- /.page-header-overlay -->
    <div class="container text-center">
        <h2 class="page-header__title">Pricing Tables</h2><!-- /.page-title -->
        <ul class="page-header__breadcrumb list-unstyled">
            <li><a href="index.html">Home</a></li>
            <li><span>Pricing</span></li>
        </ul><!-- /.page-breadcrumb list-unstyled -->
    </div><!-- /.container -->
</section><!-- /.page-header -->
<!-- Pricing Start -->
<section class="pricing-one" style="background-image: url({{ asset('frontend/assets/images/shapes/pricing-bg.jpg') }});">
    <div class="container">
        <div class="section-title  text-center">
            <h5 class="section-title__tagline">
                Our Pricing Plan
                <svg class="arrow-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 55 13">
                    <g clip-path="url(#clip0_324_36194)">
                        <path d="M10.5406 6.49995L0.700562 12.1799V8.56995L4.29056 6.49995L0.700562 4.42995V0.819946L10.5406 6.49995Z" />
                        <path d="M25.1706 6.49995L15.3306 12.1799V8.56995L18.9206 6.49995L15.3306 4.42995V0.819946L25.1706 6.49995Z" />
                        <path d="M39.7906 6.49995L29.9506 12.1799V8.56995L33.5406 6.49995L29.9506 4.42995V0.819946L39.7906 6.49995Z" />
                        <path d="M54.4206 6.49995L44.5806 12.1799V8.56995L48.1706 6.49995L44.5806 4.42995V0.819946L54.4206 6.49995Z" />
                    </g>
                </svg>
            </h5>
            <h2 class="section-title__title">Select a Plan According to<br> Your Requirements</h2>
        </div><!-- section-title -->
        <div class="pricing-one__main-tab-box tabs-box">
            <ul class="tab-buttons list-unstyled">
                <li data-tab="#monthly" class="tab-btn active-btn"><span>Monthly</span></li>
                <li data-tab="#yearly" class="tab-btn"><span>Yearly</span></li>
            </ul><!-- pricing-tab -->
            <div class="tabs-content">
                <!--month-tab-start-->
                <div class="tab active-tab" id="monthly">
                    <div class="row">
                        <!--pricing-column-start-->
                        <div class="col-lg-4 col-md-6 fadeInUp animated" data-wow-delay="200ms">
                            <!--pricing-item-start-->
                            <div class="pricing-one__item">
                                <svg viewBox="0 0 416 173" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="207.5" cy="-81.5" r="254.5" />
                                </svg><!--pricing-svg-->
                                <div class="pricing-one__item__name">Website Design</div><!--pricing-name-->
                                <h3 class="pricing-one__item__price">$130</h3><!--pricing-item-price-->
                                <h5 class="pricing-one__item__list-title">All Services include:</h5>
                                <!--pricing-item-list-title-->
                                <ul class="pricing-one__item__list">
                                    <li><span class="fa fa-check-circle"></span>10 Days Time</li>
                                    <li><span class="fa fa-check-circle"></span>Interview Training</li>
                                    <li><span class="fa fa-check-circle"></span>Guarantee Approval</li>
                                    <li><span class="fa fa-check-circle"></span>Documents Submission</li>
                                </ul>
                                <!--pricing-item-list-->
                                <div class="pricing-one__item__border"></div><!--pricing-divider-->
                                <a href="contact.html" class="eduact-btn"><span class="eduact-btn__curve"></span>Apply Now</a><!-- /.btn -->
                            </div>
                            <!--pricing-item-end-->
                        </div>
                        <!--pricing-column-end-->
                        <!--pricing-column-start-->
                        <div class="col-lg-4 col-md-6 fadeInUp animated" data-wow-delay="300ms">
                            <!--pricing-item-start-->
                            <div class="pricing-one__item active">
                                <svg viewBox="0 0 416 173" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="207.5" cy="-81.5" r="254.5" />
                                </svg><!--pricing-svg-->
                                <div class="pricing-one__item__name">app development</div><!--pricing-name-->
                                <h3 class="pricing-one__item__price">$230</h3><!--pricing-item-price-->
                                <h5 class="pricing-one__item__list-title">All Services include:</h5>
                                <!--pricing-item-list-title-->
                                <ul class="pricing-one__item__list">
                                    <li><span class="fa fa-check-circle"></span>10 Days Time</li>
                                    <li><span class="fa fa-check-circle"></span>Interview Training</li>
                                    <li><span class="fa fa-check-circle"></span>Guarantee Approval</li>
                                    <li><span class="fa fa-check-circle"></span>Documents Submission</li>
                                </ul>
                                <!--pricing-item-list-->
                                <div class="pricing-one__item__border"></div><!--pricing-divider-->
                                <a href="contact.html" class="eduact-btn"><span class="eduact-btn__curve"></span>Apply Now</a><!-- /.btn -->
                            </div>
                            <!--pricing-item-end-->
                        </div>
                        <!--pricing-column-end-->
                        <!--pricing-column-start-->
                        <div class="col-lg-4 col-md-6 fadeInUp animated" data-wow-delay="400ms">
                            <!--pricing-item-start-->
                            <div class="pricing-one__item">
                                <svg viewBox="0 0 416 173" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="207.5" cy="-81.5" r="254.5" />
                                </svg><!--pricing-svg-->
                                <div class="pricing-one__item__name">digital marketing</div><!--pricing-name-->
                                <h3 class="pricing-one__item__price">$330</h3><!--pricing-item-price-->
                                <h5 class="pricing-one__item__list-title">All Services include:</h5>
                                <!--pricing-item-list-title-->
                                <ul class="pricing-one__item__list">
                                    <li><span class="fa fa-check-circle"></span>10 Days Time</li>
                                    <li><span class="fa fa-check-circle"></span>Interview Training</li>
                                    <li><span class="fa fa-check-circle"></span>Guarantee Approval</li>
                                    <li><span class="fa fa-check-circle"></span>Documents Submission</li>
                                </ul>
                                <!--pricing-item-list-->
                                <div class="pricing-one__item__border"></div><!--pricing-divider-->
                                <a href="contact.html" class="eduact-btn"><span class="eduact-btn__curve"></span>Apply Now</a><!-- /.btn -->
                            </div>
                            <!--pricing-item-end-->
                        </div>
                        <!--pricing-column-end-->
                    </div>
                </div>
                <!--month-tab-end-->
                <!--month-tab-start-->
                <div class="tab" id="yearly">
                    <div class="row">
                        <!--pricing-column-start-->
                        <div class="col-lg-4 col-md-6 fadeInUp animated" data-wow-delay="200ms">
                            <!--pricing-item-start-->
                            <div class="pricing-one__item">
                                <svg viewBox="0 0 416 173" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="207.5" cy="-81.5" r="254.5" />
                                </svg><!--pricing-svg-->
                                <div class="pricing-one__item__name">Website Design</div><!--pricing-name-->
                                <h3 class="pricing-one__item__price">$330</h3><!--pricing-item-price-->
                                <h5 class="pricing-one__item__list-title">All Services include:</h5>
                                <!--pricing-item-list-title-->
                                <ul class="pricing-one__item__list">
                                    <li><span class="fa fa-check-circle"></span>10 Days Time</li>
                                    <li><span class="fa fa-check-circle"></span>Interview Training</li>
                                    <li><span class="fa fa-check-circle"></span>Guarantee Approval</li>
                                    <li><span class="fa fa-check-circle"></span>Documents Submission</li>
                                </ul>
                                <!--pricing-item-list-->
                                <div class="pricing-one__item__border"></div><!--pricing-divider-->
                                <a href="contact.html" class="eduact-btn"><span class="eduact-btn__curve"></span>Apply Now</a><!-- /.btn -->
                            </div>
                            <!--pricing-item-end-->
                        </div>
                        <!--pricing-column-end-->
                        <!--pricing-column-start-->
                        <div class="col-lg-4 col-md-6 fadeInUp animated" data-wow-delay="300ms">
                            <!--pricing-item-start-->
                            <div class="pricing-one__item active">
                                <svg viewBox="0 0 416 173" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="207.5" cy="-81.5" r="254.5" />
                                </svg><!--pricing-svg-->
                                <div class="pricing-one__item__name">app development</div><!--pricing-name-->
                                <h3 class="pricing-one__item__price">$430</h3><!--pricing-item-price-->
                                <h5 class="pricing-one__item__list-title">All Services include:</h5>
                                <!--pricing-item-list-title-->
                                <ul class="pricing-one__item__list">
                                    <li><span class="fa fa-check-circle"></span>10 Days Time</li>
                                    <li><span class="fa fa-check-circle"></span>Interview Training</li>
                                    <li><span class="fa fa-check-circle"></span>Guarantee Approval</li>
                                    <li><span class="fa fa-check-circle"></span>Documents Submission</li>
                                </ul>
                                <!--pricing-item-list-->
                                <div class="pricing-one__item__border"></div><!--pricing-divider-->
                                <a href="contact.html" class="eduact-btn"><span class="eduact-btn__curve"></span>Apply Now</a><!-- /.btn -->
                            </div>
                            <!--pricing-item-end-->
                        </div>
                        <!--pricing-column-end-->
                        <!--pricing-column-start-->
                        <div class="col-lg-4 col-md-6 fadeInUp animated" data-wow-delay="400ms">
                            <!--pricing-item-start-->
                            <div class="pricing-one__item">
                                <svg viewBox="0 0 416 173" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="207.5" cy="-81.5" r="254.5" />
                                </svg><!--pricing-svg-->
                                <div class="pricing-one__item__name">digital marketing</div><!--pricing-name-->
                                <h3 class="pricing-one__item__price">$530</h3><!--pricing-item-price-->
                                <h5 class="pricing-one__item__list-title">All Services include:</h5>
                                <!--pricing-item-list-title-->
                                <ul class="pricing-one__item__list">
                                    <li><span class="fa fa-check-circle"></span>10 Days Time</li>
                                    <li><span class="fa fa-check-circle"></span>Interview Training</li>
                                    <li><span class="fa fa-check-circle"></span>Guarantee Approval</li>
                                    <li><span class="fa fa-check-circle"></span>Documents Submission</li>
                                </ul>
                                <!--pricing-item-list-->
                                <div class="pricing-one__item__border"></div><!--pricing-divider-->
                                <a href="contact.html" class="eduact-btn"><span class="eduact-btn__curve"></span>Apply Now</a><!-- /.btn -->
                            </div>
                            <!--pricing-item-end-->
                        </div>
                        <!--pricing-column-end-->
                    </div>
                </div>
                <!--month-tab-end-->
            </div>
        </div>
    </div>
</section>
<!-- Pricing Start -->



@endsection
