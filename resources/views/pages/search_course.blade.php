@extends('layouts.app')

@section('content')
        <!--Section-->
        <div class="banner-1 cover-image  bg-background2" data-image-src="{{asset('frontend')}}/assets/images/banners/banner1.jpg">
        @include('layouts.header_filter')
        </div><!--/Section-->
        <!--Section-->
        <section class="sptb ">
            <div class="container">
                <div class="section-title center-block text-center">
                    <h2>Our Courses</h2>
                    <span class="sectiontitle-design"><span class="icons"></span></span>
                </div>
                <div id="myCarousel1" class="owl-carousel owl-carousel-icons2">

                   @foreach ($courses as $item)
                   <div class="item">
                    <div class="card mb-0 overflow-hidden">
                        <div class="power-ribbon power-ribbon-top-left text-warning"><span class="bg-warning"><i class="fa fa-bolt"></i></span></div>
                        <div class="item-card2-img">
                            <a href="{{route('course.details',$item->slug)}}"></a>
                            <img src="{{asset($item->image)}}" alt="img" class="cover-image">
                            <div class="item-tag">
                                <h4  class="mb-0">{{$item->price}}৳</h4>
                            </div>
                            <div class="item-overly-trans">
                                <div class="rating-stars d-flex">
                                    <span class="text-white me-1 ps-1">4.3</span>
                                    <div class=" d-inline-flex ms-auto">
                                        <div class="rating-star sm block my-rating-5" data-stars="2s">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item-card2-icons">
                            <a href="{{route('course.details',$item->slug)}}" class="item-card2-icons-l"> <i class="fa fa-share-alt"></i></a>
                            <a href="{{route('course.details',$item->slug)}}" class="item-card2-icons-l "> <i class="fa fa-heart-o"></i></a>
                        </div>
                        <div class="card-body">
                            <div class="item-card2">
                                <div class="item-card2-desc">
                                    <div class="item-card2-text mb-3">
                                        <a href="{{route('course.details',$item->slug)}}" class="text-dark"><h4 class="mb-2">{{$item->title}}</h4></a>
                                    </div>
                                    <p class="">{!!  substr(strip_tags($item->description), 0, 100) !!}<span>....</span></p>
                                    <ul class="mb-0">
                                        <li><a href="javascript:void(0);" class="icons"><i class="icon icon-location-pin  me-1"></i>  Bangladesh</a></li>
                                        <li><a href="javascript:void(0);" class="icons"><i class="icon icon-event  me-1"></i> {{$item->created_at->diffForHumans()}}</a></li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="item-card2-footer">
                                <a class="btn btn-outline-light"><span class="font-weight-bold"><i class="fa fa-calendar"></i> :</span>{{$item->course_duration}} Months</a>
                                <a class="btn btn-primary text-white float-end"><span class="font-weight-bold"><i class="fa fa-clock-o"></i> :</span> {{$item->daily_hour}} Hours</a>
                            </div>
                        </div>
                    </div>
                </div>
                   @endforeach
                    
                </div>
            </div>
        </section><!--/Section-->
@endsection
@section('script')


@endsection