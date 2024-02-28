@extends('layouts.app')

@section('content')

<section class="page-header page-header--bg-two" data-jarallax data-speed="0.3" data-imgPosition="50% -100%">
    <div class="page-header__bg jarallax-img"></div><!-- /.page-header-bg -->
    <div class="page-header__overlay"></div><!-- /.page-header-overlay -->
    <div class="container text-center">
        <h2 class="page-header__title">Teacher Details</h2><!-- /.page-title -->
        <ul class="page-header__breadcrumb list-unstyled">
            <li><a href="index.html">Home</a></li>
            <li><span>Teacher</span></li>
        </ul><!-- /.page-breadcrumb list-unstyled -->
    </div><!-- /.container -->
</section><!-- /.page-header -->
<!-- team-details-start -->
<section class="team-details">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 wow fadeInUp animated" data-wow-delay="300ms">
                <div class="team-details__image">
                    <img src="{{ asset('frontend/assets/images/team/team-details.jpg') }}" alt="eduact">
                    <div class="team-details__image__bg-shape"><img src="{{ asset('frontend/assets/images/shapes/team-details-shape-bg.png') }}" alt="eduact"></div>
                    <div class="team-details__image__shape-bottom"><img src="{{ asset('frontend/assets/images/shapes/team-details-shape-1.png') }}" alt="eduact"></div>
                    <div class="team-details__image__svg-shape">
                        <svg class="team-details__image__svg-shape__one" viewBox="0 0 69 80" xmlns="http://www.w3.org/2000/svg">
                            <path d="M68.9456 39.7448L0.113281 0V79.4895L68.9456 39.7448Z" />
                        </svg>
                        <svg class="team-details__image__svg-shape__two" viewBox="0 0 135 157" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 78.2921L135 156.287V0.286804L0 78.2921Z" />
                        </svg>
                    </div>
                </div><!-- /.team-image -->
            </div>
            <div class="col-lg-7 wow fadeInUp animated" data-wow-delay="400ms">
                <div class="team-details__content">
                    <h3 class="team-details__title">Hello, I’m William Ketty</h3><!-- /.team-name -->
                    <span class="team-details__designation">UI/UX Designer</span><!-- /.team-designation -->
                    <p class="team-details__text">
                        There are many variations of passages of Lorem Ipsum avagtilable, but the majority have suffered alteration in some form,
                        by injected hudfdfmour, or randomised words which don't look even slightly believable. If you are going to use a passage
                        of Lorem Ipsum. Class aptent taciti sociosqu ad litora torquent pe
                    </p><!-- /.team-text -->
                    <p class="team-details__text">
                        Himenaeos. Vestibulum sollicitudin varius mauris non dignissim. Sed quis iaculis est. Nulla quam neque, interdum vitae
                        fermentum lacinia, interdum eu magna. Mauris non posuere tellus. Donec quis euismod tellus. Nam vel lacus eu nisl bibendum
                        accumsan vitae vitae nibh. Nam nec eros id magna hendrerit sagittis. Nullam sed mi non odio feugiat volutpat sit amet nec elit.
                        Maecenas id hendrerit ipsum. Sed eget auctor metus, ac dapibus dolo
                    </p><!-- /.team-text -->
                    <div class="team-details__progress">
                        <h4 class="team-details__progress__title">UI / UX Design</h4>
                        <div class="team-details__progress__bar">
                            <div class="team-details__progress__inner count-bar" data-percent="80%">
                                <div class="team-details__progress__number count-text">80%</div>
                            </div>
                        </div>
                    </div><!-- /.skills-item -->
                    <div class="team-details__social">
                        <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                        <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a>
                    </div><!-- /.team-social -->
                    <a href="contact.html" class="eduact-btn eduact-btn-second"><span class="eduact-btn__curve"></span>Get In Touch<i class="icon-arrow"></i></a>
                </div><!-- /.team-details-content -->
            </div>
        </div>
    </div>
</section>
<!-- team-details-end-->
<!-- Course Start -->
<section class="course-two">
    <div class="course-two__shape-top wow fadeInRight" data-wow-delay="300ms"><img src="{{ asset('frontend/assets/images/shapes/course-shape-1.png') }}" alt="eduact"></div>
    <div class="container wow fadeInUp" data-wow-delay="200ms">
        <div class="section-title text-center">
            <h5 class="section-title__tagline">
                Checkout Now
                <svg class="arrow-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 55 13">
                    <g clip-path="url(#clip0_324_36194)">
                        <path d="M10.5406 6.49995L0.700562 12.1799V8.56995L4.29056 6.49995L0.700562 4.42995V0.819946L10.5406 6.49995Z" />
                        <path d="M25.1706 6.49995L15.3306 12.1799V8.56995L18.9206 6.49995L15.3306 4.42995V0.819946L25.1706 6.49995Z" />
                        <path d="M39.7906 6.49995L29.9506 12.1799V8.56995L33.5406 6.49995L29.9506 4.42995V0.819946L39.7906 6.49995Z" />
                        <path d="M54.4206 6.49995L44.5806 12.1799V8.56995L48.1706 6.49995L44.5806 4.42995V0.819946L54.4206 6.49995Z" />
                    </g>
                </svg>
            </h5>
            <h2 class="section-title__title">My All Courses</h2>
        </div><!-- section-title -->
        <div class="course-two__slider eduact-owl__carousel owl-with-shadow owl-theme owl-carousel" data-owl-options='{
    "items": 3,
    "margin": 30,
    "smartSpeed": 700,
    "loop":true,
    "autoplay": true,
    "dots":false,
    "nav":false,
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
                            <a href="course-details.html">Management Consultants in Competitive Markets</a>
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
                            <a href="course-details.html">The Ultimate Developer Course For Future Learner</a>
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
                            <a href="course-details.html">The Special HTML & CSS Bootcamp Edition</a>
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
                            <a href="course-details.html">Management Consultants in Competitive Markets</a>
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
                            <a href="course-details.html">The Ultimate Developer Course For Future Learner</a>
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
                            <a href="course-details.html">The Special HTML & CSS Bootcamp Edition</a>
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





@endsection
