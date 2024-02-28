<footer class="main-footer">
    <div class="main-footer__bg" style="background-image: url({{ asset('frontend/assets/images/shapes/footer-bg-1.png') }});"></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-md-5 wow fadeInUp" data-wow-delay="100ms">
                <div class="main-footer__about">

                @foreach($data as $data)
                    <a href="index.html" class="main-footer__logo">
                        <img src="{{ asset($data->logo) }}" alt="eduact" width="213" height="55">
                    </a><!-- /.footer-logo -->
                    <p class="main-footer__about__text">{!!$data->about!!}</p>
                    <div class="main-footer__social">
                        <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                        <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a>
                    </div><!-- /.footer-social -->


                </div><!-- footer-top -->
            </div>
            <div class="col-xl-3 col-md-4 wow fadeInUp" data-wow-delay="200ms">
                <div class="main-footer__navmenu main-footer__widget01">
                    <h3 class="main-footer__title">Quick Links</h3>
                    <ul>
                        <li><a href="course.html">Latest Courses</a></li>
                        <li><a href="about.html">Mission & Vision</a></li>
                        <li><a href="services.html">Our Approach</a></li>
                        <li><a href="team.html">Exclusive Advisors</a></li>
                        <li><a href="team-become.html">Join a Carrer</a></li>
                    </ul><!-- /.list-unstyled -->
                </div><!-- /.footer-menu -->
            </div>
            <div class="col-xl-2 col-md-3 wow fadeInUp" data-wow-delay="300ms">
                <div class="main-footer__navmenu main-footer__widget02">
                    <h3 class="main-footer__title">Explore</h3>
                    <ul>
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="course.html">Upcoming Events</a></li>
                        <li><a href="blog-grid-right.html">Blog & News</a></li>
                        <li><a href="faq.html">FAQ Question</a></li>
                        <li><a href="pricing.html">Testimonial</a></li>
                        <li><a href="contact.html">Privacy Policy</a></li>
                    </ul><!-- /.list-unstyled -->
                </div><!-- /.footer-menu -->
            </div>


            <div class="col-xl-4 col-md-12 wow fadeInUp" data-wow-delay="400ms">
                <div class="main-footer__newsletter">
                    <h3 class="main-footer__title">Contact Us</h3>
                    <ul class="main-footer__info-list">
                        <li><span class="icon-Location"></span>{{$data->address}}</li>
                        <li><span class="icon-Telephone"></span><a href="tel:3035550105">{{$data->phone}}</a></li>
                        <li><span class="icon-Email"></span><a href="mailto:michael.mitc@example.com">{{$data->email}}</a></li>
                    </ul>
                    <!-- <form class="main-footer__email-box mc-form" data-url="MC_FORM_URL" novalidate="novalidate">
                        <div class="main-footer__email-input-box">
                            <input type="email" placeholder="Email Address" name="EMAIL">
                        </div>
                        <button type="submit" class="eduact-btn"><span class="eduact-btn__curve"></span>Subscribe</button>
                    </form> -->
                    <div class="mc-form__response"></div>
                </div><!-- /.footer-mailchimp -->
            </div>

            @endforeach


        </div><!-- /.row -->
    </div><!-- /.container -->
</footer><!-- /.main-footer -->

<section class="copyright text-center">
    <div class="container wow fadeInUp" data-wow-delay="400ms">
        <p class="copyright__text">Copyright <span class="dynamic-year"></span><!-- /.dynamic-year --> | Eduact HTML Template. All Rights Reserved</p>
    </div><!-- /.container -->
</section><!-- /.copyright -->
