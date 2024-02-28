@extends('layouts.app')

@section('content')

<section class="page-header page-header--bg-two" data-jarallax data-speed="0.3" data-imgPosition="50% -100%">
    <div class="page-header__bg jarallax-img"></div><!-- /.page-header-bg -->
    <div class="page-header__overlay"></div><!-- /.page-header-overlay -->
    <div class="container text-center">
        <h2 class="page-header__title">Gallery Carousel</h2><!-- /.page-title -->
        <ul class="page-header__breadcrumb list-unstyled">
            <li><a href="index.html">Home</a></li>
            <li><span>Gallery</span></li>
        </ul><!-- /.page-breadcrumb list-unstyled -->
    </div><!-- /.container -->
</section><!-- /.page-header -->
<!-- gallery-start -->
<section class="gallery-page">
    <div class="container">
        <div class="gallery-page__carousel eduact-owl__carousel eduact-owl__dots owl-theme owl-carousel" data-owl-options='{
    "items": 3,
    "margin": 30,
    "smartSpeed": 700,
    "loop":true,
    "autoplay": true,
    "nav":false,
    "dots":true,
    "navText": ["<span class=\"icon-arrow-left\"></span>","<span class=\"icon-arrow\"></span>"],
    "responsive":{
        "0":{
            "items":1,
            "margin": 0
        },
        "700":{
            "items": 2
        },
        "992":{
            "items": 3
        },
        "1400":{
            "margin": 36
        }
    }
    }'>
            <!-- gallery-item-start -->
            <div class="item">
                <div class="gallery-page__single">
                    <img src="{{ asset('frontend/assets/images/gallery/gallery-1.jpg') }}" alt="eduact">
                    <div class="gallery-page__icon">
                        <a class="img-popup" href="{{ asset('frontend/assets/images/gallery/gallery-1.jpg') }}"></a>
                    </div>
                </div>
            </div>
            <!-- gallery-item-end -->
            <!-- gallery-item-start -->
            <div class="item">
                <div class="gallery-page__single">
                    <img src="{{ asset('frontend/assets/images/gallery/gallery-2.jpg') }}" alt="eduact">
                    <div class="gallery-page__icon">
                        <a class="img-popup" href="{{ asset('frontend/assets/images/gallery/gallery-2.jpg') }}"></a>
                    </div>
                </div>
            </div>
            <!-- gallery-item-end -->
            <!-- gallery-item-start -->
            <div class="item">
                <div class="gallery-page__single">
                    <img src="{{ asset('frontend/assets/images/gallery/gallery-3.jpg') }}" alt="eduact">
                    <div class="gallery-page__icon">
                        <a class="img-popup" href="{{ asset('frontend/assets/images/gallery/gallery-3.jpg') }}"></a>
                    </div>
                </div>
            </div>
            <!-- gallery-item-end -->
            <!-- gallery-item-start -->
            <div class="item">
                <div class="gallery-page__single">
                    <img src="{{ asset('frontend/assets/images/gallery/gallery-4.jpg') }}" alt="eduact">
                    <div class="gallery-page__icon">
                        <a class="img-popup" href="{{ asset('frontend/assets/images/gallery/gallery-4.jpg') }}"></a>
                    </div>
                </div>
            </div>
            <!-- gallery-item-end -->
            <!-- gallery-item-start -->
            <div class="item">
                <div class="gallery-page__single">
                    <img src="{{ asset('frontend/assets/images/gallery/gallery-5.jpg') }}" alt="eduact">
                    <div class="gallery-page__icon">
                        <a class="img-popup" href="{{ asset('frontend/assets/images/gallery/gallery-5.jpg') }}"></a>
                    </div>
                </div>
            </div>
            <!-- gallery-item-end -->
            <!-- gallery-item-start -->
            <div class="item">
                <div class="gallery-page__single">
                    <img src="{{ asset('frontend/assets/images/gallery/gallery-6.jpg') }}" alt="eduact">
                    <div class="gallery-page__icon">
                        <a class="img-popup" href="{{ asset('frontend/assets/images/gallery/gallery-6.jpg') }}"></a>
                    </div>
                </div>
            </div>
            <!-- gallery-item-end -->
        </div>
    </div>
</section>
<!-- gallery-end-->



@endsection
