<section id="seminar mb-5">
    <div class="container seminar">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="seminar_content sal-animate" data-sal="slide-left" data-sal-delay="500"
                    data-sal-duration="800" data-sal-easing="ease">
                    <h2>অংশ নিন ফ্রি সেমিনারে</h2>
                    <p>ফ্রিল্যান্সিং-এর জন্য কোন কোর্স করবেন, সিদ্ধান্ত নিতে পারছেন না? জয়েন করুন আমাদের ফ্রি
                        সেমিনারে।
                        বিষয়ভিত্তিক এই সেমিনারগুলোতে প্রতিটি কোর্সের সম্ভাবনা সম্পর্কে জানতে পারবেন। তাছাড়া
                        সেমিনারে
                        উপস্থিত এক্সপার্ট কাউন্সেলরের সাথে কথা বলে আপনি সহজেই উপযুক্ত কোর্স বেছে নেওয়ার সিদ্ধান্ত
                        নিতে
                        পারেন।</p>
                    <ul>
                        @foreach($seminers as $seminer)
                            <li>
                                <div class="px-4">{{ $seminer->date->format('d/m/Y') }}</div>
                                <div class="text_main">
                                    <div class="text row">
                                        <div class="col-md-5 col-9 p-2" style="border-right:1px solid #bfb7b7">
                                            <div class="d-flex text-center">
                                                <div class="avatar"> <img
                                                        src="{{ asset($seminer->teacher->user->image ?? '') }}"
                                                        style="width:150px;height:75px;object-fit:contain" alt="">
                                                </div>
                                                <div>
                                                    <h4>{{ $seminer->teacher->user->name ?? ''}}</h4>
                                                    <p>{{ $seminer->teacher->qualification ?? '' }}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-6 p-2 work" style="border-right:1px solid #bfb7b7">
                                            <h4 class="text-center">
                                                {{ $seminer->title }}
                                            </h4>
                                        </div>
                                        <div class="col-md-2 col-6 p-2 work" style="border-right:1px solid #bfb7b7">
                                            <h4 class="text-center">
                                                @if($seminer->online_or_offline == 1)

                                                অনলাইন
                                                @else
                                                    অফলাইন
                                                @endif

                                                 , {{ $seminer->time }}
                                            </h4>
                                        </div>
                                        <div class="col-md-2 col-3">
                                            <div class="join_btn text-center p-2"><a href="{{ $seminer->link }}" target="_blank">জয়েন</a></div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                    @foreach($courses as $course)
                        <div class="card shadow p-3 mt-4 course-countdown-card">
                            <div class="couse-timeline text-center pt-4">
                                <h4 class="fw-bolder">{{ $course->title }} শুরু  হতে আর বাকি</h4>
                                    <div class="d-flex justify-content-center gap-4 pt-3">
                                        <div class="time p-2">
                                            <h6 id="days_{{$loop->index}}">00</h6>
                                            <h6>Days</h6>
                                        </div>
                                        <div class="time p-2">
                                            <h6 id="hours_{{$loop->index}}">00</h6>
                                            <h6>Hours</h6>
                                        </div>
                                        <div class="time p-2">
                                            <h6 id="minutes_{{$loop->index}}">00</h6>
                                            <h6>Minutes</h6>
                                        </div>
                                        <div class="time p-2">
                                            <h6 id="seconds_{{$loop->index}}">00</h6>
                                            <h6>Seconds</h6>
                                        </div>


                                    </div>
                            </div>
                            <div class="row p-3 mt-4">
                                <div class="col-md-6 col-sm-12">
                                    <h5 class="fw-bolder"><i class="fa fa-calendar fw-bolder" aria-hidden="true"
                                            style="color: #E945E1;"></i>
                                        ভর্তি শুরু: {{ date('d-m-Y', strtotime($course->admission_starting_date)); }}</h5>
                                    <h5 class="mt-5 fw-bolder"><i class="fa fa-bookmark-o fw-bolder" aria-hidden="true"
                                            style="color: #26A4F9;"></i>
                                        ভর্তি শেষ: {{ date('d-m-Y', strtotime($course->admission_ending_date)); }} </h5>
                                </div>
                                <div class="col-md-6 col-sm-12 mobile-it">
                                    <h5 class="fw-bolder"><i class="fa fa-bell text-success fw-bolder" aria-hidden="true"></i>
                                        {{ $course->time }}</h5>
                                    <h5 class="fw-bolder mt-4"><i class="fa fa-television text-danger fw-bolder"
                                            aria-hidden="true"></i>
                                        ক্লাস শুরু: {{ date('d-m-Y', strtotime($course->class_start)); }} </h5>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <div class="seminar_btn">
                        <a data-sal="flip-up" data-sal-delay="600" data-sal-duration="800" data-sal-easing="ease" href="free-seminar.html" class="sal-animate">সকল সেমিনারের সময় সূচি </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>