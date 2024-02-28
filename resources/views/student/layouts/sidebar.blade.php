        <!-- ========== Left Sidebar Start ========== -->
        <div class="vertical-menu">

            <div data-simplebar class="h-100">

                <div class="navbar-brand-box">
                    <a href="{{ URL::to('/') }}" class="logo">
                        <img src="{{asset('backend')}}/assets/images/logo-light.png" />
                    </a>
                </div>

                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="metismenu list-unstyled" id="side-menu">
                        <li class="menu-title">Menu1</li>

                        <li>
                            <a href="{{ route('student.dashboard') }}" class="waves-effect"><i class='bx bx-home-smile'></i><span>Dashboard</span></a>
                        </li>


                        <li>
                            <a href="{{ route('student.information') }}" class="waves-effect"><i class='bx bx-user'></i><span>Account Details</span></a>
                        </li>

                        <li class="menu-title">Operations</li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect"><i class="bx bx-map-alt"></i><span>Class Operation</span></a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="{{route('student.comming-soon')}}">Join Class</a></li>
                                <li><a href="{{route('student.comming-soon')}}">Homework Submit</a></li>
                                <li><a href="{{route('student.comming-soon')}}">Exams</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect"><i class="bx bx-share-alt"></i><span>Support</span></a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="{{route('student.comming-soon')}}">Notice</a></li>
                                <li><a href="{{route('student.comming-soon')}}">Ask A Question</a></li>
                                <li><a href="{{route('student.comming-soon')}}">View Study Material</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="waves-effect"><i class='bx bx-home-smile'></i><span>Logout</span>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </div>
                <!-- Sidebar -->
            </div>
        </div>
        <!-- Left Sidebar End -->
