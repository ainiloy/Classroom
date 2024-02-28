<section>
    <div class="container">
        <h5 class="text-warning mb-3">শিক্ষার্থীদের মতামত</h5>
        <h1 class="mb-3">আমাদের শিক্ষার্থীদের মতামত</h1>
    </div>
    <div class="container">

        <section class="course_department">
            <div class="container sal-animate" data-sal="slide-up" data-sal-delay="500" data-sal-duration="800"
                data-sal-easing="ease">
                <div class="our_student_talk">
                    @foreach($testimonials as $testimonial)
                                            <div class="course_slider_item">
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <img src="{{ asset($testimonial->image) }}"
                                    style="width:507px; height: 232px;" alt="">
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <h2>{{ $testimonial->title }}</h2>
                                <p class="mt-3">{!! $testimonial->description !!}</p>
                                <div class="d-flex pt-4">
                                    <div class="">
                                        <img src="https://st2.depositphotos.com/2703645/7303/v/600/depositphotos_73039841-stock-illustration-male-avatar-icon.jpg"
                                            style="width:70px;height:70px;object-fit: contain;border-radius: 50%;"
                                            alt="">
                                    </div>
                                    <div class="ms-3">
                                        <h5>{{ $testimonial->user->name }}</h5>
                                        <!-- <p class="mt-3">অফলাইন বেচ ১৪৮</p> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

        </section>

    </div>
</section>