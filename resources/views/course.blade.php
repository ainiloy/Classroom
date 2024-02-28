@extends('layouts.app')

@section('content')

<section class="page-header page-header--bg-two" data-jarallax data-speed="0.3" data-imgPosition="50% -100%">
    <div class="page-header__bg jarallax-img"></div><!-- /.page-header-bg -->
    <div class="page-header__overlay"></div><!-- /.page-header-overlay -->
    <div class="container text-center">
        <h2 class="page-header__title">Course</h2><!-- /.page-title -->
        <ul class="page-header__breadcrumb list-unstyled">
            <li><a href="index.html">Home</a></li>
            <li><span>Course</span></li>
        </ul><!-- /.page-breadcrumb list-unstyled -->
    </div><!-- /.container -->
</section><!-- /.page-header -->
<!-- Course Start -->
<section class="course-two course-two--page">
    <div class="course-two__shape-top wow fadeInRight" data-wow-delay="300ms"><img src="{{ asset('frontend/assets/images/shapes/course-shape-1.png') }}" alt="eduact"></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-delay="100ms">
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
            <div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-delay="200ms">
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
            <div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-delay="300ms">
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
                            <a href="frontend-development.html">The Special HTML & CSS Bootcamp Edition</a>
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
            <div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-delay="400ms">
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
                                <h5 class="course-two__author__name">Wade Warren</h5>
                                <p class="course-two__author__designation">Finance</p>
                            </div>
                            <div class="course-two__meta">
                                <h4 class="course-two__meta__price">$473.00</h4>
                                <p class="course-two__meta__class">15 Lessons</p>
                            </div>
                        </div>
                    </div><!-- /.course-content -->
                </div><!-- /.course-card-two -->
            </div>
            <div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-delay="500ms">
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
                                <h5 class="course-two__author__name">Wade Warren</h5>
                                <p class="course-two__author__designation">Finance</p>
                            </div>
                            <div class="course-two__meta">
                                <h4 class="course-two__meta__price">$473.00</h4>
                                <p class="course-two__meta__class">15 Lessons</p>
                            </div>
                        </div>
                    </div><!-- /.course-content -->
                </div><!-- /.course-card-two -->
            </div>
            <div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-delay="600ms">
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

@endsection
