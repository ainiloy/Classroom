        <!-- ========== Left Sidebar Start ========== -->
        <div class="vertical-menu" style="background: black">

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
                        <li class="menu-title">Menu</li>

                        <li>
                            <a href="{{ route('teacher.dashboard') }}" class="waves-effect"><i class='bx bx-home-smile'></i><span>Dashboard</span></a>
                        </li>


                        <li>
                            <a href="{{ route('teacher.information') }}" class="waves-effect"><i class='bx bx-user'></i><span>Account Details</span></a>
                        </li>



                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect"><i class="bx bx-map-alt"></i><span>Class Settings</span></a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="{{route('teacher.online_class.create')}}">Class Add</a></li>
                                <li><a href="{{route('teacher.online_class.index')}}">Class Manage</a></li>
                                {{-- <li><a href="{{route('teacher.class_link.create')}}">Create Class Link</a></li>
                                <li><a href="{{route('teacher.class_link.index')}}">Class Link Manage</a></li> --}}
                            </ul>
                        </li>
                        {{-- <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect"><i class="bx bx-map-alt"></i><span>Student Support </span></a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="{{route('teacher.study_material.create')}}">Study Material Add</a></li>
                                <li><a href="{{route('teacher.study_material.index')}}">Study Material Manage</a></li>
                                <li><a href="{{route('teacher.support-answer')}}">Support Answer</a></li>
                            </ul>
                        </li> --}}
                        
                        {{-- <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect"><i class="bx bx-map-alt"></i><span>Exam Settings</span></a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="{{route('teacher.home_work.create')}}">HomeWork Add</a></li>
                                <li><a href="{{route('teacher.home_work.index')}}">HomeWork Manage</a></li>
                                <li><a href="{{route('teacher.hw.evaluation')}}">Homework Evalution</a></li>
                                <li><a href="{{route('teacher.question.create')}}">Question Add</a></li>
                                <li><a href="{{route('teacher.question.index')}}">Question Manage</a></li>
                                <li><a href="{{route('teacher.lesion.create')}}">Lesion Add</a></li>
                                <li><a href="{{route('teacher.lesion.index')}}">Lesion Manage</a></li>
                            </ul>
                        </li> --}}





                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect"><i class="bx bx-map-alt"></i><span>Notice</span></a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="{{route('teacher.notice.create')}}">Notice Add</a></li>
                                <li><a href="{{route('teacher.notice.index')}}">Notice Manage</a></li>
                            </ul>
                        </li>










                    </ul>
                </div>
                <!-- Sidebar -->
            </div>
        </div>
        <!-- Left Sidebar End -->
