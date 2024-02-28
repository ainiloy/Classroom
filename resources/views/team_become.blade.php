@extends('layouts.app')

@section('content')

<section class="page-header page-header--bg-two" data-jarallax data-speed="0.3" data-imgPosition="50% -100%">
    <div class="page-header__bg jarallax-img"></div><!-- /.page-header-bg -->
    <div class="page-header__overlay"></div><!-- /.page-header-overlay -->
    <div class="container text-center">
        <h2 class="page-header__title">Become a Teacher</h2><!-- /.page-title -->
        <ul class="page-header__breadcrumb list-unstyled">
            <li><a href="index.html">Home</a></li>
            <li><span>Teacher</span></li>
        </ul><!-- /.page-breadcrumb list-unstyled -->
    </div><!-- /.container -->
</section><!-- /.page-header -->
<!-- team-details-start -->
<section class="become-team">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 wow fadeInUp animated" data-wow-delay="300ms">
                <div class="become-team__content">
                    <h3 class="become-team__title">Teacher Rules</h3>
                    <ul class="become-team__list">
                        <li>There are many variations of passages of Lorem Ipsum available</li>
                        <li>suffered alteration in some form, by injected humour, or randomised words which don't look</li>
                        <li>ou need to be sure there isn't anything embarrassing hidden</li>
                        <li>If you are going to use a passage of Lorem Ipsum, </li>
                        <li>There are many variations of passages of Lorem Ipsum available</li>
                    </ul>
                    <h3 class="become-team__title">Areas of Expertise</h3>
                    <p class="become-team__text">
                        There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form,
                        by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of
                        Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.
                    </p>
                    <h3 class="become-team__title">Education</h3>
                    <p class="become-team__text">
                        There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form,
                        by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of
                        Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.
                    </p>
                </div>
            </div>
            <div class="col-lg-5 wow fadeInUp animated" data-wow-delay="400ms">
                <div class="become-team__form-box">
                    <h3 class="become-team__form-box__title">Apply for Registration</h3>
                    <form action="https://bracketweb.com/eduact-html/assets/inc/sendemail.php" class="become-team__form contact-form-validated" novalidate="novalidate">
                        <div class="become-team__input-box">
                            <input type="text" placeholder="Your Name" name="name">
                        </div>
                        <div class="become-team__input-box">
                            <input type="email" placeholder="Email Address" name="email">
                        </div>
                        <div class="become-team__input-box">
                            <input type="text" placeholder="Phone Number" name="phone">
                        </div>
                        <div class="become-team__input-box text-message-box">
                            <textarea name="message" placeholder="Comment"></textarea>
                        </div>
                        <div class="become-team__btn-box">
                            <button type="submit" class="eduact-btn eduact-btn-second"><span class="eduact-btn__curve"></span>Become a Techer<i class="icon-arrow"></i></button>
                        </div>
                    </form>
                    <div class="result"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- team-details-end-->
<!-- Team Start -->
<section class="team-two" style="background-image: url({{ asset('frontend/assets/images/shapes/team-bg-2.png') }});">
    <div class="container">
        <div class="section-title text-center wow fadeInUp" data-wow-delay="100ms">
            <h5 class="section-title__tagline">
                Our Teacher
                <svg class="arrow-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 55 13">
                    <g clip-path="url(#clip0_324_36194)">
                        <path d="M10.5406 6.49995L0.700562 12.1799V8.56995L4.29056 6.49995L0.700562 4.42995V0.819946L10.5406 6.49995Z" />
                        <path d="M25.1706 6.49995L15.3306 12.1799V8.56995L18.9206 6.49995L15.3306 4.42995V0.819946L25.1706 6.49995Z" />
                        <path d="M39.7906 6.49995L29.9506 12.1799V8.56995L33.5406 6.49995L29.9506 4.42995V0.819946L39.7906 6.49995Z" />
                        <path d="M54.4206 6.49995L44.5806 12.1799V8.56995L48.1706 6.49995L44.5806 4.42995V0.819946L54.4206 6.49995Z" />
                    </g>
                </svg>
            </h5>
            <h2 class="section-title__title">Learn from the Best Teacher</h2>
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





@endsection
