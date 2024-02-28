@extends('layouts.app')

@section('content')

<section class="page-header @@extraClassName" data-jarallax data-speed="0.3" data-imgPosition="50% -100%">
    <div class="page-header__bg jarallax-img"></div><!-- /.page-header-bg -->
    <div class="page-header__overlay"></div><!-- /.page-header-overlay -->
    <div class="container text-center">
        <h2 class="page-header__title">About</h2><!-- /.page-title -->
        <ul class="page-header__breadcrumb list-unstyled">
            <li><a href="index.html">Home</a></li>
            <li><span>About</span></li>
        </ul><!-- /.page-breadcrumb list-unstyled -->
    </div><!-- /.container -->
</section><!-- /.page-header -->
<!-- About Start -->
<section class="about-two about-two--about">
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="about-two__thumb wow fadeInLeft" data-wow-delay="100ms"><!-- about thumb start -->
                    <div class="about-two__thumb__one eduact-tilt" data-tilt-options='{ "glare": false, "maxGlare": 0, "maxTilt": 2, "speed": 700, "scale": 1 }'>
                        <img src="{{ asset('frontend/assets/images/resources/about-2-2-about.jpg') }}" alt="eduact">
                    </div><!-- /.about-thumb-one -->
                    <div class="about-two__thumb__two">
                        <img src="{{ asset('frontend/assets/images/resources/about-2-1-about.jpg') }}" alt="eduact">
                        <div class="about-two__thumb__two-icon"><span class="icon-business"></span></div>
                    </div><!-- /.about-thumb-two -->
                    <div class="about-two__fact">
                        <div class="about-two__fact__icon"><span class="icon-trophy"></span></div>
                        <div class="about-two__fact__content">
                            <div class="about-two__fact__count">
                                +<span class="count-box">
                                    <span class="count-text" data-stop="230" data-speed="1500"></span>
                                </span>
                            </div><!-- /.fact-one__count -->
                            <h3 class="about-two__fact__title">Awesome Awards</h3><!-- /.fact-one__title -->
                        </div>
                    </div><!-- /.fact-item -->
                    <div class="about-two__thumb__shape1 wow zoomIn" data-wow-delay="300ms">
                        <img src="{{ asset('frontend/assets/images/shapes/about-2-shape-1.png') }}" alt="eduact">
                    </div><!-- /.about-shape-one -->
                    <div class="about-two__thumb__shape2 wow zoomIn" data-wow-delay="400ms">
                        <img src="{{ asset('frontend/assets/images/shapes/about-2-shape-2.png') }}" alt="eduact">
                    </div><!-- /.about-shape-two -->
                    <div class="about-two__thumb__shape3 wow zoomIn" data-wow-delay="400ms">
                        <img src="{{ asset('frontend/assets/images/shapes/about-2-shape-3.png') }}" alt="eduact">
                    </div><!-- /.about-shape-two -->
                    <div class="about-two__thumb__shape4 wow zoomIn" data-wow-delay="400ms">
                        <img src="{{ asset('frontend/assets/images/shapes/about-2-shape-4.png') }}" alt="eduact">
                    </div><!-- /.about-shape-two -->
                </div><!-- about thumb end -->
            </div>
            <div class="col-xl-6 wow fadeInRight" data-wow-delay="100ms">
                <div class="about-two__content"><!-- about content start-->
                    <div class="section-title">
                        <h5 class="section-title__tagline">
                            About Us
                            <svg class="arrow-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 55 13">
                                <g clip-path="url(#clip0_324_36194)">
                                    <path d="M10.5406 6.49995L0.700562 12.1799V8.56995L4.29056 6.49995L0.700562 4.42995V0.819946L10.5406 6.49995Z" />
                                    <path d="M25.1706 6.49995L15.3306 12.1799V8.56995L18.9206 6.49995L15.3306 4.42995V0.819946L25.1706 6.49995Z" />
                                    <path d="M39.7906 6.49995L29.9506 12.1799V8.56995L33.5406 6.49995L29.9506 4.42995V0.819946L39.7906 6.49995Z" />
                                    <path d="M54.4206 6.49995L44.5806 12.1799V8.56995L48.1706 6.49995L44.5806 4.42995V0.819946L54.4206 6.49995Z" />
                                </g>
                            </svg>
                        </h5>
                        <h2 class="section-title__title">Establishing a Community that Encourages Lifelong Learning</h2>
                    </div><!-- section-title -->
                    <p class="about-two__content__text">
                        It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures,
                        to generate Lorem Ipsum which looks The generated Lorem Ipsum is therefore always free from repetition
                    </p>
                    <div class="about-two__about-box">
                        <div class="about-two__about-box__top">
                            <div class="about-two__about-box__icon"><span class="icon-logical-thinking"></span></div>
                            <h4 class="about-two__about-box__title">Our Mission</h4>
                        </div>
                        <p class="about-two__about-box__text">
                            It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures,
                            to generate Lorem Ipsum which looks The generated Lorem Ipsum is therefore always free from repetition
                        </p>
                    </div><!-- /.icon-box -->
                    <div class="about-two__about-box">
                        <div class="about-two__about-box__top">
                            <div class="about-two__about-box__icon"><span class="icon-vision"></span></div>
                            <h4 class="about-two__about-box__title">Our Vision</h4>
                        </div>
                        <p class="about-two__about-box__text">
                            It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures,
                            to generate Lorem Ipsum which looks The generated Lorem Ipsum is therefore always free from repetition
                        </p>
                    </div><!-- /.icon-box -->
                </div><!-- about content end -->
            </div>
        </div>
    </div>
</section>
<!-- About End -->
<!-- Counter Start -->
<section class="fact-one" style="background-image: url({{ asset('frontend/assets/images/shapes/fact-bg-1.png') }});">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                <div class="fact-one__item text-center">
                    <svg viewBox="0 0 303 181" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="1.5" y="2.00049" width="300" height="177" rx="7" stroke="#4F5DE4" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="20 20" />
                    </svg>
                    <div class="fact-one__count">
                        <span class="count-box">
                            <span class="count-text" data-stop="30.3" data-speed="1500"></span>
                        </span>k
                    </div><!-- /.fact-one__count -->
                    <h3 class="fact-one__title">Student Enrolled</h3><!-- /.fact-one__title -->
                </div><!-- /.fact-item -->
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                <div class="fact-one__item text-center">
                    <svg viewBox="0 0 303 181" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="1.5" y="2.00049" width="300" height="177" rx="7" stroke="#4F5DE4" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="20 20" />
                    </svg>
                    <div class="fact-one__count">
                        <span class="count-box">
                            <span class="count-text" data-stop="40.5" data-speed="1500"></span>
                        </span>k
                    </div><!-- /.fact-one__count -->
                    <h3 class="fact-one__title">Class Completed</h3><!-- /.fact-one__title -->
                </div><!-- /.fact-item -->
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                <div class="fact-one__item text-center">
                    <svg viewBox="0 0 303 181" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="1.5" y="2.00049" width="300" height="177" rx="7" stroke="#4F5DE4" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="20 20" />
                    </svg>
                    <div class="fact-one__count">
                        <span class="count-box">
                            <span class="count-text" data-stop="88.9" data-speed="1500"></span>
                        </span>%
                    </div><!-- /.fact-one__count -->
                    <h3 class="fact-one__title">Satisfaction Rate</h3><!-- /.fact-one__title -->
                </div><!-- /.fact-item -->
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                <div class="fact-one__item text-center">
                    <svg viewBox="0 0 303 181" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="1.5" y="2.00049" width="300" height="177" rx="7" stroke="#4F5DE4" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="20 20" />
                    </svg>
                    <div class="fact-one__count">
                        <span class="count-box">
                            <span class="count-text" data-stop="6.30" data-speed="1500"></span>
                        </span>+
                    </div><!-- /.fact-one__count -->
                    <h3 class="fact-one__title">Top Instructors</h3><!-- /.fact-one__title -->
                </div><!-- /.fact-item -->
            </div>
        </div>
    </div>
</section>
<!-- Counter End -->
<!-- Course Start -->
<section class="course-two">
    <div class="course-two__shape-top wow fadeInRight" data-wow-delay="300ms"><img src="{{ asset('frontend/assets/images/shapes/course-shape-1.png') }}" alt="eduact"></div>
    <div class="container wow fadeInUp" data-wow-delay="200ms">
        <div class="section-title text-center">
            <h5 class="section-title__tagline">
                Best Course
                <svg class="arrow-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 55 13">
                    <g clip-path="url(#clip0_324_36194)">
                        <path d="M10.5406 6.49995L0.700562 12.1799V8.56995L4.29056 6.49995L0.700562 4.42995V0.819946L10.5406 6.49995Z" />
                        <path d="M25.1706 6.49995L15.3306 12.1799V8.56995L18.9206 6.49995L15.3306 4.42995V0.819946L25.1706 6.49995Z" />
                        <path d="M39.7906 6.49995L29.9506 12.1799V8.56995L33.5406 6.49995L29.9506 4.42995V0.819946L39.7906 6.49995Z" />
                        <path d="M54.4206 6.49995L44.5806 12.1799V8.56995L48.1706 6.49995L44.5806 4.42995V0.819946L54.4206 6.49995Z" />
                    </g>
                </svg>
            </h5>
            <h2 class="section-title__title">Featured Course On This Month</h2>
        </div><!-- section-title -->
        <div class="course-two__slider eduact-owl__carousel owl-with-shadow owl-theme owl-carousel" data-owl-options='{
    "items": 3,
    "margin": 30,
    "smartSpeed": 700,
    "loop":true,
    "autoplay": true,
    "dots":false,
    "nav":true,
    "navText": ["<span class=\"icon-arrow-left\"></span>","<span class=\"icon-arrow\"></span>"],
    "responsive":{
        "0":{
            "items":1
        },
        "992":{
            "items": 2
        },
        "1200":{
            "items": 3
        },
        "1400":{
            "margin": 36,
            "items": 3
        }
    }
    }'>
            <div class="item">
                <div class="course-two__item">
                    <div class="course-two__thumb">
                        <img src="{{ asset('frontend/assets/images/course/course-2-1.png') }}" alt="eduact">
                        <a class="course-two__like" href="javascript:void(0);"><span class="icon-like"></span></a>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 353 177">
                            <path d="M37 0C16.5655 0 0 16.5655 0 37V93.4816C0 103.547 4.00259 113.295 11.7361 119.737C54.2735 155.171 112.403 177 176.496 177C240.589 177 298.718 155.171 341.261 119.737C348.996 113.295 353 103.546 353 93.4795V37C353 16.5655 336.435 0 316 0H37Z" />
                        </svg>
                    </div><!-- /.course-thumb -->
                    <div class="course-two__content">
                        <div class="course-two__time">20 Hours</div>
                        <div class="course-two__ratings">
                            <span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span>
                            <div class="course-two__ratings__reviews">(25 Reviews)</div>
                        </div>
                        <h3 class="course-two__title">
                            <a href="management-consulting.html">Management Consultants in Competitive Markets</a>
                        </h3>
                        <div class="course-two__bottom">
                            <div class="course-two__author">
                                <img src="{{ asset('frontend/assets/images/course/author-1.png') }}" alt="eduact">
                                <h5 class="course-two__author__name">Guy Hawkins</h5>
                                <p class="course-two__author__designation">Project Manager</p>
                            </div>
                            <div class="course-two__meta">
                                <h4 class="course-two__meta__price">$473.00</h4>
                                <p class="course-two__meta__class">15 Lessons</p>
                            </div>
                        </div>
                    </div><!-- /.course-content -->
                </div><!-- /.course-card-two -->
            </div>
            <div class="item">
                <div class="course-two__item">
                    <div class="course-two__thumb">
                        <img src="{{ asset('frontend/assets/images/course/course-2-2.png') }}" alt="eduact">
                        <a class="course-two__like" href="javascript:void(0);"><span class="icon-like"></span></a>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 353 177">
                            <path d="M37 0C16.5655 0 0 16.5655 0 37V93.4816C0 103.547 4.00259 113.295 11.7361 119.737C54.2735 155.171 112.403 177 176.496 177C240.589 177 298.718 155.171 341.261 119.737C348.996 113.295 353 103.546 353 93.4795V37C353 16.5655 336.435 0 316 0H37Z" />
                        </svg>
                    </div><!-- /.course-thumb -->
                    <div class="course-two__content">
                        <div class="course-two__time">20 Hours</div>
                        <div class="course-two__ratings">
                            <span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span>
                            <div class="course-two__ratings__reviews">(25 Reviews)</div>
                        </div>
                        <h3 class="course-two__title">
                            <a href="web-development.html">The Ultimate Developer Course For Future Learner</a>
                        </h3>
                        <div class="course-two__bottom">
                            <div class="course-two__author">
                                <img src="{{ asset('frontend/assets/images/course/author-1.png') }}" alt="eduact">
                                <h5 class="course-two__author__name">Guy Hawkins</h5>
                                <p class="course-two__author__designation">Project Manager</p>
                            </div>
                            <div class="course-two__meta">
                                <h4 class="course-two__meta__price">$473.00</h4>
                                <p class="course-two__meta__class">15 Lessons</p>
                            </div>
                        </div>
                    </div><!-- /.course-content -->
                </div><!-- /.course-card-two -->
            </div>
            <div class="item">
                <div class="course-two__item">
                    <div class="course-two__thumb">
                        <img src="{{ asset('frontend/assets/images/course/course-2-3.png') }}" alt="eduact">
                        <a class="course-two__like" href="javascript:void(0);"><span class="icon-like"></span></a>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 353 177">
                            <path d="M37 0C16.5655 0 0 16.5655 0 37V93.4816C0 103.547 4.00259 113.295 11.7361 119.737C54.2735 155.171 112.403 177 176.496 177C240.589 177 298.718 155.171 341.261 119.737C348.996 113.295 353 103.546 353 93.4795V37C353 16.5655 336.435 0 316 0H37Z" />
                        </svg>
                    </div><!-- /.course-thumb -->
                    <div class="course-two__content">
                        <div class="course-two__time">20 Hours</div>
                        <div class="course-two__ratings">
                            <span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span>
                            <div class="course-two__ratings__reviews">(25 Reviews)</div>
                        </div>
                        <h3 class="course-two__title">
                            <a href="frontend-development.html">The Special HTML &amp; CSS Bootcamp Edition</a>
                        </h3>
                        <div class="course-two__bottom">
                            <div class="course-two__author">
                                <img src="{{ asset('frontend/assets/images/course/author-1.png') }}" alt="eduact">
                                <h5 class="course-two__author__name">Guy Hawkins</h5>
                                <p class="course-two__author__designation">Project Manager</p>
                            </div>
                            <div class="course-two__meta">
                                <h4 class="course-two__meta__price">$473.00</h4>
                                <p class="course-two__meta__class">15 Lessons</p>
                            </div>
                        </div>
                    </div><!-- /.course-content -->
                </div><!-- /.course-card-two -->
            </div>
            <div class="item">
                <div class="course-two__item">
                    <div class="course-two__thumb">
                        <img src="{{ asset('frontend/assets/images/course/course-2-4.png') }}" alt="eduact">
                        <a class="course-two__like" href="javascript:void(0);"><span class="icon-like"></span></a>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 353 177">
                            <path d="M37 0C16.5655 0 0 16.5655 0 37V93.4816C0 103.547 4.00259 113.295 11.7361 119.737C54.2735 155.171 112.403 177 176.496 177C240.589 177 298.718 155.171 341.261 119.737C348.996 113.295 353 103.546 353 93.4795V37C353 16.5655 336.435 0 316 0H37Z" />
                        </svg>
                    </div><!-- /.course-thumb -->
                    <div class="course-two__content">
                        <div class="course-two__time">20 Hours</div>
                        <div class="course-two__ratings">
                            <span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span>
                            <div class="course-two__ratings__reviews">(25 Reviews)</div>
                        </div>
                        <h3 class="course-two__title">
                            <a href="uiux-design.html">Building Responsive User Interfaces to Implementing</a>
                        </h3>
                        <div class="course-two__bottom">
                            <div class="course-two__author">
                                <img src="{{ asset('frontend/assets/images/course/author-1.png') }}" alt="eduact">
                                <h5 class="course-two__author__name">Guy Hawkins</h5>
                                <p class="course-two__author__designation">Project Manager</p>
                            </div>
                            <div class="course-two__meta">
                                <h4 class="course-two__meta__price">$473.00</h4>
                                <p class="course-two__meta__class">15 Lessons</p>
                            </div>
                        </div>
                    </div><!-- /.course-content -->
                </div><!-- /.course-card-two -->
            </div>
            <div class="item">
                <div class="course-two__item">
                    <div class="course-two__thumb">
                        <img src="{{ asset('frontend/assets/images/course/course-2-5.png') }}" alt="eduact">
                        <a class="course-two__like" href="javascript:void(0);"><span class="icon-like"></span></a>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 353 177">
                            <path d="M37 0C16.5655 0 0 16.5655 0 37V93.4816C0 103.547 4.00259 113.295 11.7361 119.737C54.2735 155.171 112.403 177 176.496 177C240.589 177 298.718 155.171 341.261 119.737C348.996 113.295 353 103.546 353 93.4795V37C353 16.5655 336.435 0 316 0H37Z" />
                        </svg>
                    </div><!-- /.course-thumb -->
                    <div class="course-two__content">
                        <div class="course-two__time">20 Hours</div>
                        <div class="course-two__ratings">
                            <span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span>
                            <div class="course-two__ratings__reviews">(25 Reviews)</div>
                        </div>
                        <h3 class="course-two__title">
                            <a href="digital-photography.html">Photography Crash Course for Beginners</a>
                        </h3>
                        <div class="course-two__bottom">
                            <div class="course-two__author">
                                <img src="{{ asset('frontend/assets/images/course/author-1.png') }}" alt="eduact">
                                <h5 class="course-two__author__name">Guy Hawkins</h5>
                                <p class="course-two__author__designation">Project Manager</p>
                            </div>
                            <div class="course-two__meta">
                                <h4 class="course-two__meta__price">$473.00</h4>
                                <p class="course-two__meta__class">15 Lessons</p>
                            </div>
                        </div>
                    </div><!-- /.course-content -->
                </div><!-- /.course-card-two -->
            </div>
            <div class="item">
                <div class="course-two__item">
                    <div class="course-two__thumb">
                        <img src="{{ asset('frontend/assets/images/course/course-2-6.png') }}" alt="eduact">
                        <a class="course-two__like" href="javascript:void(0);"><span class="icon-like"></span></a>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 353 177">
                            <path d="M37 0C16.5655 0 0 16.5655 0 37V93.4816C0 103.547 4.00259 113.295 11.7361 119.737C54.2735 155.171 112.403 177 176.496 177C240.589 177 298.718 155.171 341.261 119.737C348.996 113.295 353 103.546 353 93.4795V37C353 16.5655 336.435 0 316 0H37Z" />
                        </svg>
                    </div><!-- /.course-thumb -->
                    <div class="course-two__content">
                        <div class="course-two__time">20 Hours</div>
                        <div class="course-two__ratings">
                            <span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span>
                            <div class="course-two__ratings__reviews">(25 Reviews)</div>
                        </div>
                        <h3 class="course-two__title">
                            <a href="online-business.html">Sales and Marketing For Online Businesses</a>
                        </h3>
                        <div class="course-two__bottom">
                            <div class="course-two__author">
                                <img src="{{ asset('frontend/assets/images/course/author-1.png') }}" alt="eduact">
                                <h5 class="course-two__author__name">Guy Hawkins</h5>
                                <p class="course-two__author__designation">Project Manager</p>
                            </div>
                            <div class="course-two__meta">
                                <h4 class="course-two__meta__price">$473.00</h4>
                                <p class="course-two__meta__class">15 Lessons</p>
                            </div>
                        </div>
                    </div><!-- /.course-content -->
                </div><!-- /.course-card-two -->
            </div>
        </div>
    </div>
    <div class="course-two__shape-bottom wow fadeInLeft" data-wow-delay="400ms"><img src="{{ asset('frontend/assets/images/shapes/course-shape-2.png') }}" alt="eduact"></div>
</section>
<!-- Course End -->
<!-- Testimonial Start -->
<section class="testimonial-two" style="background-image: url({{ asset('frontend/assets/images/shapes/testimonial-bg-2.png') }});">
    <div class="container">
        <div class="section-title text-center">
            <h5 class="section-title__tagline">
                Testimonial
                <svg class="arrow-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 55 13">
                    <g clip-path="url(#clip0_324_36194)">
                        <path d="M10.5406 6.49995L0.700562 12.1799V8.56995L4.29056 6.49995L0.700562 4.42995V0.819946L10.5406 6.49995Z" />
                        <path d="M25.1706 6.49995L15.3306 12.1799V8.56995L18.9206 6.49995L15.3306 4.42995V0.819946L25.1706 6.49995Z" />
                        <path d="M39.7906 6.49995L29.9506 12.1799V8.56995L33.5406 6.49995L29.9506 4.42995V0.819946L39.7906 6.49995Z" />
                        <path d="M54.4206 6.49995L44.5806 12.1799V8.56995L48.1706 6.49995L44.5806 4.42995V0.819946L54.4206 6.49995Z" />
                    </g>
                </svg>
            </h5>
            <h2 class="section-title__title">What Our Student Feedback</h2>
        </div><!-- section-title -->
        <div class="testimonial-two__carousel eduact-owl__carousel owl-with-shadow owl-theme owl-carousel" data-owl-options='{
    "items": 3,
    "margin": 30,
    "smartSpeed": 700,
    "loop":true,
    "autoplay": true,
    "center": true,
    "nav":true,
    "dots":false,
    "navText": ["<span class=\"icon-arrow-left\"></span>","<span class=\"icon-arrow\"></span>"],
    "responsive":{
        "0":{
            "items":1,
            "margin": 0
        },
        "700":{
            "items": 1
        },
        "992":{
            "items": 3
        },
        "1200":{
            "margin": 36,
            "items": 3
        }
    }
    }'>
            <!-- Testimonial Item -->
            <div class="item">
                <div class="testimonial-two__item">
                    <div class="testimonial-two__item-inner" style="background-image: url({{ asset('frontend/assets/images/shapes/testimonial-shape-2.png') }});">
                        <div class="testimonial-two__ratings">
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </div>
                        <div class="testimonial-two__quote">
                            Flexible Classes refers to the process of acquiring knowledge or skills through the use of digital technologies and the internet
                        </div><!-- testimonial-quote -->
                        <div class="testimonial-two__meta">
                            <img src="{{ asset('frontend/assets/images/resources/testimonial-2-author-1.png') }}" alt="eduact">
                            <h5 class="testimonial-two__title">Savannah Nguyen</h5>
                            <span class="testimonial-two__designation">UI/UX Designer</span>
                        </div><!-- testimonial-meta -->
                        <svg viewBox="0 0 416 249" xmlns="http://www.w3.org/2000/svg">
                            <g filter="url(#filter0_d_324_36064)">
                                <path d="M296.443 526.351C291.626 517.219 286.22 508.4 280.351 499.907C274.064 490.803 267.257 482.07 260.072 473.662C252.166 464.412 243.802 455.551 235.132 447.015C225.525 437.563 215.537 428.493 205.305 419.728C193.907 409.977 182.21 400.591 170.293 391.477C157.025 381.325 143.506 371.508 129.809 361.934C114.574 351.278 99.1373 340.919 83.5681 330.773C66.2815 319.506 48.8344 308.493 31.2774 297.659C11.8453 285.67 -7.71089 273.899 -27.3627 262.269C-49.0253 249.452 -70.8004 236.801 -92.632 224.268C-112.751 212.719 -132.553 200.599 -151.773 187.605C-167.672 176.859 -183.186 165.529 -198.079 153.411C-210.223 143.528 -221.954 133.126 -233.015 122.043C-242.024 113.01 -250.588 103.518 -258.425 93.4561C-264.651 85.4701 -270.424 77.1028 -275.483 68.3262C-279.503 61.3457 -283.079 54.0865 -285.969 46.5676C-288.192 40.7857 -290.021 34.8356 -291.27 28.7606C-292.209 24.2029 -292.822 19.5763 -292.986 14.9289C-293.101 11.7908 -293.016 8.64358 -292.628 5.53246C-292.424 3.91736 -292.165 2.29171 -291.728 0.72597C-291.679 0.529505 -291.617 0.330416 -291.559 0.139576C-291.56 1.6512 -291.422 3.17245 -291.258 4.67452C-290.799 8.90587 -289.976 13.0825 -288.939 17.2111C-287.309 23.703 -285.103 30.0422 -282.479 36.194C-278.927 44.5375 -274.604 52.5471 -269.706 60.1738C-263.507 69.8349 -256.393 78.8972 -248.649 87.3719C-238.942 97.9926 -228.245 107.691 -216.918 116.571C-203.009 127.487 -188.159 137.18 -172.79 145.896C-153.752 156.686 -133.883 165.972 -113.594 174.141C-88.9088 184.08 -63.5671 192.361 -37.9282 199.441C-11.3405 206.779 15.589 212.887 42.7613 217.66C67.4471 221.999 92.326 225.272 117.29 227.514C141.053 229.653 164.9 230.869 188.764 231.226C211.313 231.559 233.873 231.113 256.392 229.925C277.174 228.838 297.929 227.116 318.614 224.801C337.536 222.679 356.4 220.056 375.184 216.945C391.68 214.211 408.11 211.094 424.452 207.59C438.374 204.605 452.242 201.341 466.025 197.777C476.913 194.966 487.745 191.97 498.512 188.749C506.072 186.491 513.591 184.133 521.068 181.624C524.972 180.313 528.87 178.974 532.737 177.541C533.207 177.365 533.677 177.189 534.148 177.014L296.443 526.351Z" />
                            </g>
                        </svg>
                    </div>
                </div>
            </div>
            <!-- Testimonial Item -->
            <!-- Testimonial Item -->
            <div class="item">
                <div class="testimonial-two__item">
                    <div class="testimonial-two__item-inner" style="background-image: url({{ asset('frontend/assets/images/shapes/testimonial-shape-2.png') }});">
                        <div class="testimonial-two__ratings">
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </div>
                        <div class="testimonial-two__quote">
                            Flexible Classes refers to the process of acquiring knowledge or skills through the use of digital technologies and the internet
                        </div><!-- testimonial-quote -->
                        <div class="testimonial-two__meta">
                            <img src="{{ asset('frontend/assets/images/resources/testimonial-2-author-2.png') }}" alt="eduact">
                            <h5 class="testimonial-two__title">Darrell Steward</h5>
                            <span class="testimonial-two__designation">Web Developer</span>
                        </div><!-- testimonial-meta -->
                        <svg viewBox="0 0 416 249" xmlns="http://www.w3.org/2000/svg">
                            <g filter="url(#filter0_d_324_36064)">
                                <path d="M296.443 526.351C291.626 517.219 286.22 508.4 280.351 499.907C274.064 490.803 267.257 482.07 260.072 473.662C252.166 464.412 243.802 455.551 235.132 447.015C225.525 437.563 215.537 428.493 205.305 419.728C193.907 409.977 182.21 400.591 170.293 391.477C157.025 381.325 143.506 371.508 129.809 361.934C114.574 351.278 99.1373 340.919 83.5681 330.773C66.2815 319.506 48.8344 308.493 31.2774 297.659C11.8453 285.67 -7.71089 273.899 -27.3627 262.269C-49.0253 249.452 -70.8004 236.801 -92.632 224.268C-112.751 212.719 -132.553 200.599 -151.773 187.605C-167.672 176.859 -183.186 165.529 -198.079 153.411C-210.223 143.528 -221.954 133.126 -233.015 122.043C-242.024 113.01 -250.588 103.518 -258.425 93.4561C-264.651 85.4701 -270.424 77.1028 -275.483 68.3262C-279.503 61.3457 -283.079 54.0865 -285.969 46.5676C-288.192 40.7857 -290.021 34.8356 -291.27 28.7606C-292.209 24.2029 -292.822 19.5763 -292.986 14.9289C-293.101 11.7908 -293.016 8.64358 -292.628 5.53246C-292.424 3.91736 -292.165 2.29171 -291.728 0.72597C-291.679 0.529505 -291.617 0.330416 -291.559 0.139576C-291.56 1.6512 -291.422 3.17245 -291.258 4.67452C-290.799 8.90587 -289.976 13.0825 -288.939 17.2111C-287.309 23.703 -285.103 30.0422 -282.479 36.194C-278.927 44.5375 -274.604 52.5471 -269.706 60.1738C-263.507 69.8349 -256.393 78.8972 -248.649 87.3719C-238.942 97.9926 -228.245 107.691 -216.918 116.571C-203.009 127.487 -188.159 137.18 -172.79 145.896C-153.752 156.686 -133.883 165.972 -113.594 174.141C-88.9088 184.08 -63.5671 192.361 -37.9282 199.441C-11.3405 206.779 15.589 212.887 42.7613 217.66C67.4471 221.999 92.326 225.272 117.29 227.514C141.053 229.653 164.9 230.869 188.764 231.226C211.313 231.559 233.873 231.113 256.392 229.925C277.174 228.838 297.929 227.116 318.614 224.801C337.536 222.679 356.4 220.056 375.184 216.945C391.68 214.211 408.11 211.094 424.452 207.59C438.374 204.605 452.242 201.341 466.025 197.777C476.913 194.966 487.745 191.97 498.512 188.749C506.072 186.491 513.591 184.133 521.068 181.624C524.972 180.313 528.87 178.974 532.737 177.541C533.207 177.365 533.677 177.189 534.148 177.014L296.443 526.351Z" />
                            </g>
                        </svg>
                    </div>
                </div>
            </div>
            <!-- Testimonial Item -->
            <!-- Testimonial Item -->
            <div class="item">
                <div class="testimonial-two__item">
                    <div class="testimonial-two__item-inner" style="background-image: url({{ asset('frontend/assets/images/shapes/testimonial-shape-2.png') }});">
                        <div class="testimonial-two__ratings">
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </div>
                        <div class="testimonial-two__quote">
                            Flexible Classes refers to the process of acquiring knowledge or skills through the use of digital technologies and the internet
                        </div><!-- testimonial-quote -->
                        <div class="testimonial-two__meta">
                            <img src="{{ asset('frontend/assets/images/resources/testimonial-2-author-3.png') }}" alt="eduact">
                            <h5 class="testimonial-two__title">Wade Warren</h5>
                            <span class="testimonial-two__designation">Seo Expert</span>
                        </div><!-- testimonial-meta -->
                        <svg viewBox="0 0 416 249" xmlns="http://www.w3.org/2000/svg">
                            <g filter="url(#filter0_d_324_36064)">
                                <path d="M296.443 526.351C291.626 517.219 286.22 508.4 280.351 499.907C274.064 490.803 267.257 482.07 260.072 473.662C252.166 464.412 243.802 455.551 235.132 447.015C225.525 437.563 215.537 428.493 205.305 419.728C193.907 409.977 182.21 400.591 170.293 391.477C157.025 381.325 143.506 371.508 129.809 361.934C114.574 351.278 99.1373 340.919 83.5681 330.773C66.2815 319.506 48.8344 308.493 31.2774 297.659C11.8453 285.67 -7.71089 273.899 -27.3627 262.269C-49.0253 249.452 -70.8004 236.801 -92.632 224.268C-112.751 212.719 -132.553 200.599 -151.773 187.605C-167.672 176.859 -183.186 165.529 -198.079 153.411C-210.223 143.528 -221.954 133.126 -233.015 122.043C-242.024 113.01 -250.588 103.518 -258.425 93.4561C-264.651 85.4701 -270.424 77.1028 -275.483 68.3262C-279.503 61.3457 -283.079 54.0865 -285.969 46.5676C-288.192 40.7857 -290.021 34.8356 -291.27 28.7606C-292.209 24.2029 -292.822 19.5763 -292.986 14.9289C-293.101 11.7908 -293.016 8.64358 -292.628 5.53246C-292.424 3.91736 -292.165 2.29171 -291.728 0.72597C-291.679 0.529505 -291.617 0.330416 -291.559 0.139576C-291.56 1.6512 -291.422 3.17245 -291.258 4.67452C-290.799 8.90587 -289.976 13.0825 -288.939 17.2111C-287.309 23.703 -285.103 30.0422 -282.479 36.194C-278.927 44.5375 -274.604 52.5471 -269.706 60.1738C-263.507 69.8349 -256.393 78.8972 -248.649 87.3719C-238.942 97.9926 -228.245 107.691 -216.918 116.571C-203.009 127.487 -188.159 137.18 -172.79 145.896C-153.752 156.686 -133.883 165.972 -113.594 174.141C-88.9088 184.08 -63.5671 192.361 -37.9282 199.441C-11.3405 206.779 15.589 212.887 42.7613 217.66C67.4471 221.999 92.326 225.272 117.29 227.514C141.053 229.653 164.9 230.869 188.764 231.226C211.313 231.559 233.873 231.113 256.392 229.925C277.174 228.838 297.929 227.116 318.614 224.801C337.536 222.679 356.4 220.056 375.184 216.945C391.68 214.211 408.11 211.094 424.452 207.59C438.374 204.605 452.242 201.341 466.025 197.777C476.913 194.966 487.745 191.97 498.512 188.749C506.072 186.491 513.591 184.133 521.068 181.624C524.972 180.313 528.87 178.974 532.737 177.541C533.207 177.365 533.677 177.189 534.148 177.014L296.443 526.351Z" />
                            </g>
                        </svg>
                    </div>
                </div>
            </div>
            <!-- Testimonial Item -->
        </div>
    </div>
</section>
<!-- Testimonial End -->
<!-- Team Start -->
<section class="team-two team-two--about" style="background-image: url({{ asset('frontend/assets/images/shapes/team-bg-2.png') }});">
    <div class="container">
        <div class="section-title text-center wow fadeInUp" data-wow-delay="100ms">
            <h5 class="section-title__tagline">
                Our Team
                <svg class="arrow-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 55 13">
                    <g clip-path="url(#clip0_324_36194)">
                        <path d="M10.5406 6.49995L0.700562 12.1799V8.56995L4.29056 6.49995L0.700562 4.42995V0.819946L10.5406 6.49995Z" />
                        <path d="M25.1706 6.49995L15.3306 12.1799V8.56995L18.9206 6.49995L15.3306 4.42995V0.819946L25.1706 6.49995Z" />
                        <path d="M39.7906 6.49995L29.9506 12.1799V8.56995L33.5406 6.49995L29.9506 4.42995V0.819946L39.7906 6.49995Z" />
                        <path d="M54.4206 6.49995L44.5806 12.1799V8.56995L48.1706 6.49995L44.5806 4.42995V0.819946L54.4206 6.49995Z" />
                    </g>
                </svg>
            </h5>
            <h2 class="section-title__title">Meet Our Professional Team<br> Members</h2>
        </div><!-- section-title -->
        <div class="row">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                <div class="team-two__item">
                    <div class="team-two__image">
                        <img src="{{ asset('frontend/assets/images/team/team-2-1.jpg') }}" alt="eduact">
                    </div><!-- /.team-image -->
                    <div class="team-two__content">
                        <h3 class="team-two__title">
                            <a href="team-details.html">Aleesha Brown</a>
                        </h3><!-- /.team-name -->
                        <span class="team-two__designation">Web Developer</span><!-- /.team-designation -->
                        <div class="team-two__social">
                            <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                            <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                            <a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a>
                        </div><!-- /.team-social -->
                    </div><!-- /.team-content -->
                </div><!-- /.team-two -->
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                <div class="team-two__item">
                    <div class="team-two__image">
                        <img src="{{ asset('frontend/assets/images/team/team-2-2.jpg') }}" alt="eduact">
                    </div><!-- /.team-image -->
                    <div class="team-two__content">
                        <h3 class="team-two__title">
                            <a href="team-details.html">Devon Lane</a>
                        </h3><!-- /.team-name -->
                        <span class="team-two__designation">UI/UX Designer</span><!-- /.team-designation -->
                        <div class="team-two__social">
                            <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                            <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                            <a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a>
                        </div><!-- /.team-social -->
                    </div><!-- /.team-content -->
                </div><!-- /.team-two -->
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                <div class="team-two__item">
                    <div class="team-two__image">
                        <img src="{{ asset('frontend/assets/images/team/team-2-3.jpg') }}" alt="eduact">
                    </div><!-- /.team-image -->
                    <div class="team-two__content">
                        <h3 class="team-two__title">
                            <a href="team-details.html">Mike Hardson</a>
                        </h3><!-- /.team-name -->
                        <span class="team-two__designation">Designer</span><!-- /.team-designation -->
                        <div class="team-two__social">
                            <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                            <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                            <a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a>
                        </div><!-- /.team-social -->
                    </div><!-- /.team-content -->
                </div><!-- /.team-two -->
            </div>
        </div>
    </div>
</section>
<!-- Team End -->
<!-- Call To Action Start -->
<section class="cta-two">
    <div class="container">
        <div class="cta-two__bg" style="background-image: url({{ asset('frontend/assets/images/shapes/cta-bg-2.jpg') }});">
            <div class="row">
                <div class="col-lg-6 wow fadeInLeft" data-wow-delay="200ms">
                    <h3 class="cta-two__title">Subscribe to Our Newsletter<br> for Daily Updates</h3>
                </div>
                <div class="col-lg-6">
                    <div class="cta-two__mail wow fadeInRight" data-wow-delay="200ms">
                        <form class="cta-two__email-box mc-form" data-url="MC_FORM_URL" novalidate="novalidate">
                            <div class="cta-two__email-input-box">
                                <input type="email" placeholder="Email Address" name="EMAIL">
                            </div>
                            <button type="submit" class="eduact-btn"><span class="eduact-btn__curve"></span>Subscribe</button>
                        </form>
                        <div class="mc-form__response"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Call To Action End -->


@endsection
