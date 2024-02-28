@extends('layouts.app')

@section('content')

<section class="page-header page-header--bg-two" data-jarallax data-speed="0.3" data-imgPosition="50% -100%">
    <div class="page-header__bg jarallax-img"></div><!-- /.page-header-bg -->
    <div class="page-header__overlay"></div><!-- /.page-header-overlay -->
    <div class="container text-center">
        <h2 class="page-header__title">Blog Details</h2><!-- /.page-title -->
        <ul class="page-header__breadcrumb list-unstyled">
            <li><a href="index.html">Home</a></li>
            <li><span>Blog</span></li>
        </ul><!-- /.page-breadcrumb list-unstyled -->
    </div><!-- /.container -->
</section><!-- /.page-header -->
<!-- Blog Start -->
<section class="blog-details">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-7">
                <div class="blog-details__content">
                    <div class="blog-details__img">
                        <img src="{{ asset('frontend/assets/images/blog/blog-details-1.jpg') }}" alt="eduact">
                    </div><!-- details-image -->
                    <div class="blog-details__meta">
                        <div class="blog-details__meta__cats">
                            <a href="blog-list-right.html">Development</a>
                        </div>
                        <div class="blog-details__meta__date"><i class="icon-clock"></i>26 Mar, 2023</div>
                    </div><!-- /.details-meta -->
                    <h3 class="blog-details__title">The Complete Web Developer Guideline 2023</h3><!-- details-tiele -->
                    <p class="blog-details__text">
                        There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form,
                        by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of
                        Lorem Ipsum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum
                        sollicitudin varius mauris non dignissim. Sed quis iaculis est. Nulla quam neque, interdum vitae fermentum lacinia,
                        interdum eu magna. Mauris non posuere tellus. Donec quis euismod tellus. Nam vel lacus eu nisl bibendum accumsan
                        vitae vitae nibh. Nam nec eros id magna hendrerit sagittis. Nullam sed mi non odio feugiat volutpat sit amet nec elit.
                        Maecenas id hendrerit ipsum. Sed eget auctor metus, ac dapibus dolor
                    </p>
                    <p class="blog-details__text">
                        Nam vel lacus eu nisl bibendum accumsan vitae vitae nibh. Nam nec eros id magna hendrerit sagittis. Nullam sed mi non
                        odio feugiat volutpat sit amet nec elit. Maecenas id hendrerit ipsum. Sed eget auctor metus, ac dapibus dolor.
                        Mauris gravida lacus metus, ac sagittis tortor hendrerit sit amet. Aenean dictum eget nulla in pharetra.
                        Vestibulum vulputate vehicula mattis. Vivamus dictum nec dui porta rutrum. Nam erat felis, mattis ac massa
                    </p>
                </div><!-- details-content -->
                <div class="blog-details__bottom">
                    <div class="blog-details__tags">
                        <h5 class="blog-details__tags__title">Tags</h5>
                        <a href="blog-grid-left.html">Marketing</a>
                        <a href="blog-grid-right.html">Development</a>
                        <a href="blog-grid.html">Design</a>
                    </div>
                    <div class="blog-details__social">
                        <a href="https://www.google.com/"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.google.com/"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.google.com/"><i class="fab fa-pinterest-p"></i></a>
                        <a href="https://www.google.com/"><i class="fab fa-instagram"></i></a>
                    </div>
                </div><!-- details-tags-share -->
                <div class="blog-details__comment">
                    <h3 class="blog-details__comment__title">2 Comments</h3>
                    <div class="blog-details__comment__item">
                        <div class="blog-details__comment__image">
                            <img src="{{ asset('frontend/assets/images/blog/comment-1-1.jpg') }}" alt="eduact">
                        </div>
                        <div class="blog-details__comment__content">
                            <h3 class="blog-details__comment__name">David Shon</h3>
                            <p class="blog-details__comment__text">
                                Nam vel lacus eu nisl bibendum accumsan vitae vitae nibh. Nam nec eros id magna hendrerit sagittis.
                                Nullam sed mi non odio feugiat volutpat sit amet nec elit. Maecenas id hendrerit ipsum. Sed eget
                                auctor metus, ac dapibus dolor.
                            </p>
                            <a href="blog-details.html" class="eduact-btn"><span class="eduact-btn__curve"></span>Reply</a>
                        </div>
                    </div>
                    <div class="blog-details__comment__item">
                        <div class="blog-details__comment__image">
                            <img src="{{ asset('frontend/assets/images/blog/comment-1-2.jpg') }}" alt="eduact">
                        </div>
                        <div class="blog-details__comment__content">
                            <h3 class="blog-details__comment__name">Jhon Watchson</h3>
                            <p class="blog-details__comment__text">
                                Nam vel lacus eu nisl bibendum accumsan vitae vitae nibh. Nam nec eros id magna hendrerit sagittis.
                                Nullam sed mi non odio feugiat volutpat sit amet nec elit. Maecenas id hendrerit ipsum. Sed eget
                                auctor metus, ac dapibus dolor.
                            </p>
                            <a href="blog-details.html" class="eduact-btn"><span class="eduact-btn__curve"></span>Reply</a>
                        </div>
                    </div>
                </div><!-- details-comment -->
                <div class="blog-details__comment-form">
                    <h3 class="blog-details__comment-form__title">Leave a Comment</h3>
                    <form action="https://bracketweb.com/eduact-html/assets/inc/sendemail.php" class="contact-form-validated" novalidate="novalidate">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="blog-details__comment-form__input-box">
                                    <input type="text" placeholder="Your name" name="name">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="blog-details__comment-form__input-box">
                                    <input type="email" placeholder="Email address" name="email">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="blog-details__comment-form__input-box">
                                    <textarea name="message" placeholder="Write  a comment"></textarea>
                                </div>
                                <button type="submit" class="eduact-btn eduact-btn-second">
                                    <span class="eduact-btn__curve"></span>Submit Comment<i class="icon-arrow"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                    <div class="result"></div>
                </div><!-- details-comment-form -->
            </div>
        </div>
    </div>
</section>
<!-- Blog End -->



@endsection
