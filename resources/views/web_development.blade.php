@extends('layouts.app')

@section('content')

<section class="page-header page-header--bg-two" data-jarallax data-speed="0.3" data-imgPosition="50% -100%">
    <div class="page-header__bg jarallax-img"></div><!-- /.page-header-bg -->
    <div class="page-header__overlay"></div><!-- /.page-header-overlay -->
    <div class="container text-center">
        <h2 class="page-header__title">Web Development</h2><!-- /.page-title -->
        <ul class="page-header__breadcrumb list-unstyled">
            <li><a href="index.html">Home</a></li>
            <li><span>Course</span></li>
        </ul><!-- /.page-breadcrumb list-unstyled -->
    </div><!-- /.container -->
</section><!-- /.page-header -->
<!-- course-details-start -->
<section class="course-details">
    <div class="container">
        <div class="row">
            <div class="col-xl-8">
                <div class="course-details__thumb">
                    <img src="{{ asset('frontend/assets/images/course/course-detail-2.jpg') }}" alt="eduact" />
                </div><!-- details-thumb -->
                <div class="course-details__meta">
                    <div class="course-details__meta__author">
                        <img src="{{ asset('frontend/assets/images/course/author-7.png') }}" alt="eduact">
                        <h5 class="course-details__meta__name">Guy Hawkins</h5>
                        <p class="course-details__meta__designation">Project Manager</p>
                    </div>
                    <div class="course-details__meta__cats"><a href="course.html">Development</a></div>
                    <div class="course-details__meta__ratings">
                        <span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span>
                        <div class="course-details__meta__ratings__reviews">(25 Reviews)</div>
                    </div>
                    <div class="course-details__meta__price">$473.00</div>
                </div><!-- details-meta -->
                <h3 class="course-details__title">The Ultimate Developer Course For Future Learner</h3><!-- details-title -->
                <div class="course-details__tabs tabs-box">
                    <ul class="course-details__tabs__lists tab-buttons list-unstyled">
                        <li data-tab="#overview" class="tab-btn"><span>Overview</span></li>
                        <li data-tab="#curriculum" class="tab-btn active-btn"><span>Curriculum</span></li>
                        <li data-tab="#reviews" class="tab-btn"><span>Reviews</span></li>
                        <li data-tab="#instructor" class="tab-btn"><span>Instructor</span></li>
                    </ul><!-- tab-title -->
                    <div class="tabs-content">
                        <div class="tab fadeInUp animated" id="overview">
                            <div class="course-details__overview">
                                <p class="course-details__overview__text">
                                    Nam vel lacus eu nisl bibendum accumsan vitae vitae nibh. Nam nec eros id magna hendrerit sagittis.
                                    Nullam sed mi non odio feugiat volutpat sit amet nec elit. Maecenas id hendrerit ipsum. Sed eget auctor metus,
                                    ac dapibus dolor. Nam vel lacus eu nisl bibendum accumsan vitae vitae nibh.
                                </p>
                                <p class="course-details__overview__text">
                                    Himenaeos. Vestibulum sollicitudin varius mauris non dignissim. Sed quis iaculis est. Nulla quam neque, interdum vitae
                                    fermentum lacinia, interdum eu magna. Mauris non posuere tellus. Donec quis euismod tellus. Nam vel lacus eu nisl
                                    bibendum accumsan vitae vitae nibh. Nam nec eros id magna hendrerit sagittis. Nullam sed mi non odio feugiat volutpat
                                    sit amet nec elit. Maecenas id hendrerit ipsum. Sed eget auctor metus, ac dapibus dolo
                                </p>
                                <p class="course-details__overview__text">
                                    Nam vel lacus eu nisl bibendum accumsan vitae vitae nibh. Nam nec eros id magna hendrerit sagittis.
                                    Nullam sed mi non odio feugiat volutpat sit amet nec elit. Maecenas id hendrerit ipsum. Sed eget auctor metus,
                                    ac dapibus dolor. Nam vel lacus eu nisl bibendum accumsan vitae vitae nibh.
                                </p>
                                <ul class="list-unstyled course-details__overview__lists">
                                    <li><span class="icon-check"></span>Nam at elit nec neque suscipit gravida.</li>
                                    <li><span class="icon-check"></span>Aenean egestas orci eu maximus tincidunt.</li>
                                    <li><span class="icon-check"></span>Curabitur vel turpis id tellus cursus laoreet.</li>
                                </ul>
                            </div>
                        </div><!-- tab-content-overview -->
                        <div class="tab active-tab fadeInUp animated" id="curriculum">
                            <div class="course-details__curriculum">
                                <h4 class="course-details__curriculum__title">Starting Beginners Level Course</h4>
                                <p class="course-details__curriculum__text">
                                    Nam vel lacus eu nisl bibendum accumsan vitae vitae nibh. Nam nec eros id magna hendrerit sagittis.
                                    Nullam sed mi non odio feugiat volutpat sit amet nec elit. Maecenas id hendrerit ipsum. Sed eget auctor metus,
                                    ac dapibus dolor. Nam vel lacus eu nisl bibendum accumsan vitae vitae nibh.
                                </p>
                                <ul class="list-unstyled course-details__curriculum__lists">
                                    <li>
                                        <i class="icon-play-border"></i>
                                        <span class="course-details__curriculum__lists__title">Introduction of Editing</span>
                                        <span class="course-details__curriculum__lists__preview">Preview</span>
                                        <span class="course-details__curriculum__lists__time">10 Minutes</span>
                                    </li>
                                    <li>
                                        <i class="icon-play-border"></i>
                                        <span class="course-details__curriculum__lists__title">Overview of Editing</span>
                                        <span class="course-details__curriculum__lists__preview">Preview</span>
                                        <span class="course-details__curriculum__lists__time">10 Minutes</span>
                                    </li>
                                    <li>
                                        <i class="icon-file"></i>
                                        <span class="course-details__curriculum__lists__title">Basic Editing Technology</span>
                                    </li>
                                    <li>
                                        <i class="icon-logical-thinking"></i>
                                        <span class="course-details__curriculum__lists__title">Quiz</span>
                                        <span class="course-details__curriculum__lists__time">6 Questions</span>
                                    </li>
                                </ul>
                                <h4 class="course-details__curriculum__title">Intermediate Level Course</h4>
                                <p class="course-details__curriculum__text">
                                    Nam vel lacus eu nisl bibendum accumsan vitae vitae nibh. Nam nec eros id magna hendrerit sagittis.
                                    Nullam sed mi non odio feugiat volutpat sit amet nec elit. Maecenas id hendrerit ipsum. Sed eget auctor metus,
                                    ac dapibus dolor. Nam vel lacus eu nisl bibendum accumsan vitae vitae nibh.
                                </p>
                                <ul class="list-unstyled course-details__curriculum__lists">
                                    <li>
                                        <i class="icon-play-border"></i>
                                        <span class="course-details__curriculum__lists__title">Introduction of Editing</span>
                                        <span class="course-details__curriculum__lists__preview">Preview</span>
                                        <span class="course-details__curriculum__lists__time">10 Minutes</span>
                                    </li>
                                    <li>
                                        <i class="icon-file"></i>
                                        <span class="course-details__curriculum__lists__title">Basic Editing Technology</span>
                                    </li>
                                    <li>
                                        <i class="icon-logical-thinking"></i>
                                        <span class="course-details__curriculum__lists__title">Quiz</span>
                                        <span class="course-details__curriculum__lists__time">6 Questions</span>
                                    </li>
                                </ul>
                            </div>
                        </div><!-- tab-content-curriculum -->
                        <div class="tab fadeInUp animated" id="reviews">
                            <div class="course-details__comment">
                                <h3 class="course-details__review-title">2 Reviews</h3>
                                <!--Start Comment Box-->
                                <div class="course-details__comment-box">
                                    <figure class="course-details__comment-box__thumb"><img src="{{ asset('frontend/assets/images/resources/review-2-1.jpg') }}" alt="eduact"></figure><!-- comment-image -->
                                    <h4 class="course-details__comment-box__meta">David Shon</h4><!-- comment-meta -->
                                    <div class="course-details__comment-box__ratings">
                                        <span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span>
                                    </div><!-- comment-ratings -->
                                    <p class="course-details__comment-box__text">
                                        Nam vel lacus eu nisl bibendum accumsan vitae vitae nibh. Nam nec eros id magna hendrerit sagittis.
                                        Nullam sed mi non odio feugiat volutpat sit amet nec elit. Maecenas id hendrerit ipsum. Sed eget
                                        auctor metus, ac dapibus dolor.
                                    </p><!-- comment-text -->
                                </div>
                                <!--End Comment Box-->
                                <!--Start Comment Box-->
                                <div class="course-details__comment-box">
                                    <figure class="course-details__comment-box__thumb"><img src="{{ asset('frontend/assets/images/resources/review-2-2.jpg') }}" alt="eduact"></figure><!-- comment-image -->
                                    <h4 class="course-details__comment-box__meta">Sarah Albert</h4><!-- comment-meta -->
                                    <div class="course-details__comment-box__ratings">
                                        <span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span>
                                    </div><!-- comment-ratings -->
                                    <p class="course-details__comment-box__text">
                                        Nam vel lacus eu nisl bibendum accumsan vitae vitae nibh. Nam nec eros id magna hendrerit sagittis.
                                        Nullam sed mi non odio feugiat volutpat sit amet nec elit. Maecenas id hendrerit ipsum. Sed eget
                                        auctor metus, ac dapibus dolor.
                                    </p><!-- comment-text -->
                                </div>
                                <!--End Comment Box-->
                            </div><!-- /.review-comment -->
                            <div class="course-details__form">
                                <h3 class="course-details__form-title">Add a Review</h3>
                                <div class="course-details__form-ratings">
                                    <p class="course-details__form-ratings__label">Rate this Product</p>
                                    <span class="far fa-star"></span><span class="far fa-star"></span><span class="far fa-star"></span><span class="far fa-star"></span><span class="far fa-star"></span>
                                </div><!-- review-ratings -->
                                <form action="https://bracketweb.com/eduact-html/assets/inc/sendemail.php" class="review-form contact-form-validated" novalidate="novalidate">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="review-form__input-box">
                                                <input type="text" placeholder="Your Name" name="name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="review-form__input-box">
                                                <input type="email" placeholder="Email Address" name="email">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="review-form__input-box">
                                                <textarea name="message" placeholder="Write a Message"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <button type="submit" class="eduact-btn eduact-btn-second"><span class="eduact-btn__curve"></span>Leave a Review<i class="icon-arrow"></i></button>
                                        </div>
                                    </div>
                                </form>
                                <div class="result"></div>
                            </div><!-- /.review-form -->
                        </div><!-- tab-content-reviews -->
                        <div class="tab fadeInUp animated" id="instructor">
                            <div class="course-details__instructor">
                                <figure class="course-details__instructor__thumb"><img src="{{ asset('frontend/assets/images/resources/instructor-1.jpg') }}" alt="eduact"></figure><!-- instructor-image -->
                                <h4 class="course-details__instructor__name">Guy Hawkins</h4><!-- instructor-name -->
                                <span class="course-details__instructor__designation">Project Manager</span><!-- instructor-designation -->
                                <p class="course-details__instructor__text">
                                    Nam vel lacus eu nisl bibendum accumsan vitae vitae nibh. Nam nec eros id magna hendrerit sagittis.
                                    Nullam sed mi non odio feugiat volutpat sit amet nec elit. Maecenas id hendrerit ipsum. Sed eget
                                    auctor metus, ac dapibus dolor.
                                </p><!-- instructor-text -->
                            </div>
                        </div><!-- tab-content-instructor -->
                    </div><!-- tab-content -->
                </div><!-- tabs -->
            </div>
            <div class="col-xl-4 wow fadeInRight" data-wow-delay="300ms">
                <div class="course-details__sidebar">
                    <div class="course-details__sidebar__item">
                        <h3 class="course-details__sidebar__title">Course Features</h3>
                        <ul class="course-details__sidebar__lists clerfix">
                            <li><i class="icon-history"></i>Duration:<span>20 Hours</span></li>
                            <li><i class="icon-book"></i>Lessons:<span>15</span></li>
                            <li><i class="icon-reading"></i>Students:<span>Max 15</span></li>
                            <li><i class="icon-play-border"></i>Videos<span>10 Hours</span></li>
                            <li><i class="icon-logical-thinking"></i>Skill Level<span>Advanced</span></li>
                            <li><i class="icon-Digital-marketing"></i>Language:<span>English</span></li>
                        </ul>
                        <a href="contact.html" class="eduact-btn eduact-btn-second"><span class="eduact-btn__curve"></span>Buy This Course<i class="icon-arrow"></i></a>
                    </div>
                    <div class="course-details__sidebar__item">
                        <h3 class="course-details__sidebar__title">Latest Course</h3>
                        <ul class="course-details__sidebar__post">
                            <li>
                                <div class="course-details__sidebar__post__image">
                                    <img src="{{ asset('frontend/assets/images/course/lc-1.jpg') }}" alt="eduact">
                                </div>
                                <div class="course-details__sidebar__post__content">
                                    <span class="course-details__sidebar__post__meta">By <a href="course.html">Robert Fox</a></span>
                                    <h3 class="course-details__sidebar__post__title"><a href="course.html">The Complete Web.....</a></h3>
                                    <div class="course-details__sidebar__post__ratings">
                                        <span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span>
                                        <div class="course-details__sidebar__post__ratings__reviews">4.8(30)</div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="course-details__sidebar__post__image">
                                    <img src="{{ asset('frontend/assets/images/course/lc-2.jpg') }}" alt="eduact">
                                </div>
                                <div class="course-details__sidebar__post__content">
                                    <span class="course-details__sidebar__post__meta">By <a href="course.html">Robert Fox</a></span>
                                    <h3 class="course-details__sidebar__post__title"><a href="course.html">Management Cons.....</a></h3>
                                    <div class="course-details__sidebar__post__ratings">
                                        <span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span>
                                        <div class="course-details__sidebar__post__ratings__reviews">4.8(30)</div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="course-details__sidebar__post__image">
                                    <img src="{{ asset('frontend/assets/images/course/lc-3.jpg') }}" alt="eduact">
                                </div>
                                <div class="course-details__sidebar__post__content">
                                    <span class="course-details__sidebar__post__meta">By <a href="course.html">Robert Fox</a></span>
                                    <h3 class="course-details__sidebar__post__title"><a href="course.html">The Special HTML.....</a></h3>
                                    <div class="course-details__sidebar__post__ratings">
                                        <span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span>
                                        <div class="course-details__sidebar__post__ratings__reviews">4.8(30)</div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- course-details-end -->



@endsection
