@extends('layouts.app2')

@section('content')
@include('student.layouts.second_style')
        <!--Topbar-->
        {{-- @include('layouts.header') --}}
        {{-- <!--Section-->
        <section>
            <div class="bannerimg">
                <div class="header-text mb-0">
                    <div class="container">
                        <div class="text-center text-white">
                            <h1 class="">My Dashboard</h1>
                            <ol class="breadcrumb text-center">
                                <li class="breadcrumb-item"><a href="{{URL::to('/')}}">Home</a></li>
                                <li class="breadcrumb-item active text-white" aria-current="page">My Dashboard</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--/Section--> --}}
    </div><!--/Section-->
    <!--User Dashboard-->
    <section class="sptb">
        <div class="container" style="margin-bottom:100px">
            <div class="row">
                @include('layouts.dashboard_sidebar')

                @include('layouts.dashboard_form')
            </div>
        </div>
    </section><!--/User Dashboard-->
@stop
