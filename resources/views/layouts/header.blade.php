<header class="main-header">
    <nav class="main-menu">
        <div class="container">
        @foreach($data as $data)
            <div class="main-menu__logo">
                <a href="index.html">
                    <img src="{{ asset($data->logo) }}" width="183" height="48" alt="Eduact">
                </a>
            </div>
            @endforeach


            <div class="main-menu__nav">
                <ul class="main-menu__list">
                    <li class="">
                        <a href="index.html">Home</a>
                    </li>
                    <li class="dropdown">
                        <a href="#">Pages</a>
                        <ul>
                            <li><a href="about.html">About</a></li>
                            <li><a href="team.html">Our Teacher</a></li>
                            <li><a href="team-carousel.html">Teacher Carousel</a></li>
                            <li><a href="team-become.html">Become Teacher</a></li>
                            <li><a href="team-details.html">Teacher Details</a></li>
                            <li><a href="gallery.html">Gallery</a></li>
                            <li><a href="gallery-carousel.html">Gallery Carousel</a></li>
                            <li><a href="pricing.html">Pricing</a></li>
                            <li><a href="faq.html">FAQs</a></li>
                            <li><a href="login.html">Login</a></li>
                            <li><a href="404.html">404 Error</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#">Course</a>
                        <ul>
                            <li><a href="course.html">Course Page</a></li>
                            <li><a href="course-carousel.html">Course Carousel</a></li>
                            <li><a href="management-consulting.html">Management Consulting</a></li>
                            <li><a href="web-development.html">Web Development</a></li>
                            <li><a href="frontend-development.html">Frontend Development</a></li>
                            <li><a href="uiux-design.html">UI/UX Design</a></li>
                            <li><a href="digital-photography.html">Digital Photography</a></li>
                            <li><a href="online-business.html">Online Business</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#">Shop</a>
                        <ul class="sub-menu">
                            <li class="dropdown">
                                <a href="#">Products</a>
                                <ul class="sub-menu">
                                    <li><a href="products.html">No Sidebar</a></li>
                                    <li><a href="products-left.html">Left Sidebar</a></li>
                                    <li><a href="products-right.html">Right Sidebar</a></li>
                                </ul>
                            </li>
                            <li><a href="products-carousel.html">Products Carousel</a></li>
                            <li><a href="product-details.html">Product Details</a></li>
                            <li><a href="cart.html">Cart</a></li>
                            <li><a href="checkout.html">Checkout</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#">Blog</a>
                        <ul class="sub-menu">
                            <li class="dropdown">
                                <a href="#">Blog Grid</a>
                                <ul class="sub-menu">
                                    <li><a href="blog-grid.html">No Sidebar</a></li>
                                    <li><a href="blog-grid-left.html">Left Sidebar</a></li>
                                    <li><a href="blog-grid-right.html">Right Sidebar</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#">Blog List</a>
                                <ul class="sub-menu">
                                    <li><a href="blog-list.html">No Sidebar</a></li>
                                    <li><a href="blog-list-left.html">Left Sidebar</a></li>
                                    <li><a href="blog-list-right.html">Right Sidebar</a></li>
                                </ul>
                            </li>
                            <li><a href="blog-carousel.html">Blog Carousel</a></li>
                            <li class="dropdown">
                                <a href="#">Blog Details</a>
                                <ul class="sub-menu">
                                    <li><a href="blog-details.html">No Sidebar</a></li>
                                    <li><a href="blog-details-left.html">Left Sidebar</a></li>
                                    <li><a href="blog-details-right.html">Right Sidebar</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </div><!-- /.main-menu__nav -->
            <div class="main-menu__right">
                <a href="#" class="main-menu__toggler mobile-nav__toggler">
                    <i class="fa fa-bars"></i>
                </a><!-- /.mobile menu btn -->
                <a href="#" class="main-menu__search search-toggler">
                    <i class="icon-Search"></i>
                </a><!-- /.search btn -->

                <a href="{{ url('/register') }}" class="main-menu__login">
                    <i class="icon-account-1"></i>
                </a><!-- /.login btn -->
                <a href="contact.html" class="eduact-btn"><span class="eduact-btn__curve"></span>Get In Touch</a><!-- /.contact btn -->
            </div><!-- /.main-menu__right -->
        </div><!-- /.container -->
    </nav>
    <!-- /.main-menu -->
</header><!-- /.main-header -->

<div class="stricky-header stricked-menu main-menu">
    <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
</div><!-- /.stricky-header -->
<!--Hero Banner Start-->
