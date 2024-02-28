<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu" style="background: black !important">

    <div data-simplebar class="h-100">

        <div class="navbar-brand-box">
            <a href="{{ URL::to('/') }}" class="logo">
                <img src="{{ asset('backend') }}/assets/images/logo-light.png" />
            </a>
        </div>

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>

                <li>
                    <a href="{{ route('dashboard') }}" class="waves-effect"><i
                            class='bx bx-home-smile'></i><span>Dashboard</span></a>
                </li>


                {{-- <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect"><i class="bx bx-map-alt"></i><span>User</span></a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="{{route('admin.user.index')}}">Manage</a></li>
                        </ul>
                    </li> --}}


                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect"><i
                            class="bx bx-map-alt"></i><span>Category</span></a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('admin.category.create') }}">Add</a></li>
                        <li><a href="{{ route('admin.category.index') }}"> Manage</a></li>
                    </ul>
                </li>

                {{-- <li>
                    <a href="{{ route('admin.user-verify') }}" class="waves-effect"><i
                            class='bx bx-home-smile'></i><span>User Verify</span></a>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect"><i
                            class="bx bx-map-alt"></i><span>Sponsore</span></a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('admin.sponsore.create') }}">Add</a></li>
                        <li><a href="{{ route('admin.sponsore.index') }}"> Manage</a></li>
                    </ul>
                </li> --}}


                {{-- <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect"><i
                            class="bx bx-map-alt"></i><span>Course</span></a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('admin.course.create') }}">Add</a></li>
                        <li><a href="{{ route('admin.course.index') }}"> Manage</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect"><i
                            class="bx bx-map-alt"></i><span>Seminer</span></a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('admin.seminer.create') }}">Add</a></li>
                        <li><a href="{{ route('admin.seminer.index') }}"> Manage</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect"><i
                            class="bx bx-map-alt"></i><span>Testimonial</span></a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('admin.testimonial.create') }}">Add</a></li>
                        <li><a href="{{ route('admin.testimonial.index') }}"> Manage</a></li>
                    </ul>
                </li> --}}

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect"><i
                            class="bx bx-map-alt"></i><span>Batch</span></a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('admin.batch.create') }}">Add</a></li>
                        <li><a href="{{ route('admin.batch.index') }}"> Manage</a></li>
                    </ul>
                </li>


                {{-- <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect"><i
                            class="bx bx-map-alt"></i><span>Vanue</span></a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('admin.vanue.create') }}">Add</a></li>
                        <li><a href="{{ route('admin.vanue.index') }}"> Manage</a></li>
                    </ul>
                </li> --}}
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect"><i
                            class="bx bx-map-alt"></i><span>Class</span></a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('admin.class.create') }}">Add</a></li>
                        <li><a href="{{ route('admin.class.index') }}"> Manage</a></li>
                    </ul>
                </li>




                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect"><i
                            class="bx bx-map-alt"></i><span>Teacher</span></a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('admin.teacher.create') }}">Add</a></li>
                        <li><a href="{{ route('admin.teacher.index') }}"> Manage</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect"><i
                            class="bx bx-map-alt"></i><span>Coupon</span></a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('admin.coupon.create') }}">Add</a></li>
                        <li><a href="{{ route('admin.coupon.index') }}"> Manage</a></li>
                    </ul>
                </li>
                {{-- <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect"><i
                            class="bx bx-map-alt"></i><span>Payment Method</span></a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('admin.payment-method.create') }}">Add</a></li>
                        <li><a href="{{ route('admin.payment-method.index') }}"> Manage</a></li>
                    </ul>
                </li> --}}


                {{-- <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect"><i
                            class="bx bx-map-alt"></i><span>Post</span></a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('admin.post.create') }}">Add</a></li>
                        <li><a href="{{ route('admin.post.index') }}"> Manage</a></li>
                    </ul>
                </li> --}}

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect"><i
                            class="bx bx-map-alt"></i><span>Site Setting</span></a>
                    <ul class="sub-menu" aria-expanded="false">

                        <li><a href="{{ route('admin.site-setting.index') }}">Manage</a></li>
                    </ul>
                </li>
                {{-- <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect"><i
                            class="bx bx-map-alt"></i><span>Course Order</span></a>
                    <ul class="sub-menu" aria-expanded="false">

                        <li><a href="{{ route('admin.order-handle.index') }}"> Manage</a></li>
                    </ul>
                </li> --}}
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect"><i
                            class="bx bx-map-alt"></i><span>Pages</span></a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('admin.page.create') }}">Add</a></li>
                        <li><a href="{{ route('admin.page.index') }}"> Manage</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect"><i
                            class="bx bx-map-alt"></i><span>Blog Category</span></a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('admin.blog-category.create') }}">Add</a></li>
                        <li><a href="{{ route('admin.blog-category.index') }}"> Manage</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect"><i
                            class="bx bx-map-alt"></i><span>Blog</span></a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('admin.blog.create') }}">Add</a></li>
                        <li><a href="{{ route('admin.blog.index') }}"> Manage</a></li>
                    </ul>
                </li>
                </li>
                {{-- <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect"><i
                            class="bx bx-map-alt"></i><span>Services</span></a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('admin.services.create') }}">Add</a></li>
                        <li><a href="{{ route('admin.services.index') }}"> Manage</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect"><i
                            class="bx bx-map-alt"></i><span>Service Packages</span></a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('admin.service_package.create') }}">Add</a></li>
                        <li><a href="{{ route('admin.service_package.index') }}"> Manage</a></li>
                    </ul>
                </li> --}}
                {{-- <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect"><i class="bx bx-map-alt"></i><span>Web Hosting</span></a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('admin.web_hosting.create')}}">Add</a></li>
                        <li><a href="{{route('admin.web_hosting.index')}}"> Manage</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect"><i class="bx bx-map-alt"></i><span>Web Hosting Orders</span></a>
                    <ul class="sub-menu" aria-expanded="false">
                         @php
                             $count=DB::TABLE('web_hosting_orders')->where('is_check',0)->count();
                         @endphp
                        <li><a href="{{route('admin.web_hosting_orders.index')}}"> Manage <span class="text-danger">({{ $count }})</span></a></li>
                    </ul>
                </li> --}}
                {{-- <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect"><i
                            class="bx bx-map-alt"></i><span>Message</span></a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('admin.message.index') }}"> Messages</a></li>
                    </ul>
                </li> --}}
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
