@php $title = "About Us" @endphp
@extends('frontend.layouts.main')
@section('main-container')
    <style>
        .item {
            height: 510px;
        }
    </style>

    </div>
    <!-- <div class="container mb-5">
        <div class="row justify-content-sm-center">
            <div class="col-sm-4">
                <div class="card aboutcard aboutbg1 border-0">
                    <img class="card-img-top mx-auto d-block" src="{{ asset('img/about1.png') }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Our Mission</h5>
                        <p class="p-upper">Our mission is to advance and nurture people who are engaged in digitalizing
                            the world by providing consistently successful systems and we seek to revolutionize the digital
                            business sphere.</p>
                    </div>
                </div>

            </div>
            <div class="col-sm-4">
                <div class="card aboutcard aboutbg2 border-0">
                    <img class="card-img-top mx-auto d-block" src="{{ asset('img/about2.png') }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Our Vision</h5>
                        <p class="p-upper">Our vision is to create a massive impact on the digital sustainably. At
                            Socialistfox, we as a social media marketing agency empower businesses to impose an essential
                            role in boosting the world economy by digital platforms.</p>
                    </div>
                </div>

            </div>
            <div class="col-sm-4">
                <div class="card aboutcard aboutbg3 border-0">
                    <img class="card-img-top mx-auto d-block" src="{{ asset('img/about3.png') }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Our Value</h5>
                        <p class="p-upper">Our values derive from “enabling our clients.” We as a Social Media marketing
                            agency combine creative ideas with vast experience in social media to deliver measurable results
                            for our clients so that our clients can scale their business to new heights.</p>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-6 ">
                <h6>ABOUT US</h6>
                <h2>Cloudexy is all about Excellence</h2>
                <h5 class="text-secondary">Cloudexy is an online platform that brings together the best of Industry Experts, Technology, and Education to help you master the skills of the future.</h5>
                <p class="text-secondary">Cloudexy is an online platform that brings together the best of Industry Experts, Technology, and Education to help you master the skills of the future.</p>
                <br>
                <div>
                    <button class="col btn btn-purple-moon">OUR COURSES</button>
                </div>
            </div>
            <div class="col-sm-6">
                <img class="img-fluid" src="{{ asset('img/about-data1.jpg') }}" style="width: 100%" alt="">
            </div>

        </div>
    </div>

    <div class="container">
        <div class="text-center">
            <h6>WHAT WE DO</h6>
            <h2>Fresh Ideas For You</h2>
        </div>
        <div class="row">
            <div class="col-sm">
                <img class="img-fluid" src="{{ asset('img/about-data2.png') }}" alt="">
            </div>
            <div class="col-sm">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="flex-wrapper">
                            <div class="single-chart">
                                <svg viewBox="0 0 36 36" class="circular-chart blu">
                                    <path class="circle-bg"
                                        d="M18 2.0845
                                      a 15.9155 15.9155 0 0 1 0 31.831
                                      a 15.9155 15.9155 0 0 1 0 -31.831" />
                                    <path class="circle" stroke-dasharray="{{ $themes->creative_score }}, 100"
                                        d="M18 2.0845
                                      a 15.9155 15.9155 0 0 1 0 31.831
                                      a 15.9155 15.9155 0 0 1 0 -31.831" />
                                    <text x="18" y="20.35"
                                        class="percentage">{{ $themes->creative_score }}%</text>
                                </svg>
                            </div>
                        </div>

                    </div>
                    <div class="col-sm-9" style="margin-top: 10px;">
                        <h4 style="color: #7164ea">Creative Approach</h4>
                        <p class="text-secondary">We have a simple and straightforward creative philosophy. All our creative
                            output is designed to etch our clients’ brands onto the minds of their target audiences.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="flex-wrapper">
                            <div class="single-chart">
                                <svg viewBox="0 0 36 36" class="circular-chart org">
                                    <path class="circle-bg"
                                        d="M18 2.0845
                                      a 15.9155 15.9155 0 0 1 0 31.831
                                      a 15.9155 15.9155 0 0 1 0 -31.831" />
                                    <path class="circle" stroke-dasharray="{{ $themes->trackable_score }}, 100"
                                        d="M18 2.0845
                                      a 15.9155 15.9155 0 0 1 0 31.831
                                      a 15.9155 15.9155 0 0 1 0 -31.831" />
                                    <text x="18" y="20.35"
                                        class="percentage">{{ $themes->trackable_score }}%</text>
                                </svg>
                            </div>
                        </div>

                    </div>
                    <div class="col-sm-9" style="margin-top: 10px;">
                        <h4 style="color: rgb(242,145,17)">Trackable Results</h4>
                        <p class="text-secondary">Our entire process and strategies are done using systems that are fully
                            trackable and measurable. We provide complete transparency to our clients.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="flex-wrapper">
                            <div class="single-chart">
                                <svg viewBox="0 0 36 36" class="circular-chart grn">
                                    <path class="circle-bg"
                                        d="M18 2.0845
                                      a 15.9155 15.9155 0 0 1 0 31.831
                                      a 15.9155 15.9155 0 0 1 0 -31.831" />
                                    <path class="circle" stroke-dasharray="{{ $themes->guaranteed_score }}, 100"
                                        d="M18 2.0845
                                      a 15.9155 15.9155 0 0 1 0 31.831
                                      a 15.9155 15.9155 0 0 1 0 -31.831" />
                                    <text x="18" y="20.35"
                                        class="percentage">{{ $themes->guaranteed_score }}%</text>
                                </svg>
                            </div>
                        </div>

                    </div>
                    <div class="col-sm-9" style="margin-top:10px;">
                        <h4 style="color: #42cd83">Guaranteed Success</h4>
                        <p class="text-secondary">In business, there is nothing more attractive than achieving good
                            results. We can’t guarantee success, only increase its probability.​</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-4 mb-4">
        <br>
        <div class="row">
            <div class="col-sm">
                <img class="img-fluid" src="{{ asset('img/about-data3.png') }}" alt="">
            </div>
            <div class="col-sm">
                <h6>WHY CHOOSE US</h6>
                <h2>Learn More & More Here</h2>
                <div class="row">
                    <div class="col-sm-1"><img class="check_b" src="{{ asset('img/check_b.png') }}" alt="">
                    </div>
                    <div class="col-sm-11">
                        <h5>Weekend Classes</h5>
                        <p class="text-secondary">Transparency is one thing that differentiates us. That's why we keep our
                            students updated with every Weekend also provides notes, video recording.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-1"><img class="check_b" src="{{ asset('img/check_b.png') }}" alt="">
                    </div>
                    <div class="col-sm-11">
                        <h5>Best Services</h5>
                        <p class="text-secondary">In our end we can provide all material what you need for good job and gaining for best knowledge.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-1"><img class="check_b" src="{{ asset('img/check_b.png') }}" alt="">
                    </div>
                    <div class="col-sm-11">
                        <h5>24/7 Support Query Resolving</h5>
                        <p class="text-secondary">We understand the importance of timely and efficient responses. That's
                            why we are 24/7 available at your service.</p>
                    </div>
                </div>
                <br>
                <div>
                    <button class="col btn btn-purple-moon">Connect With US</button>
                    <!-- <a class="col btn btn-purple-moon" href="{{ route('get.contact') }}">GET IN TOUCH</a> -->
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="bg-light">
        <div class="container text-center pt-4">
            <h6 class="">TESTIMONIALS</h6>
            <h2 class="mb-4">What Our Client’s Say </h2>


            {{-- dynamic jquery slider starts --}}
            <div class="container w-75 text-secondary">
                <div class="owl-carousel owl-theme">
                @foreach ($tests as $test )
                 <div class="item">
                        <div class="d-flex justify-content-center">
                            <img src="{{ asset('Testimonial_Images/'.$test->testimg) }}"
                                style="width: 150px;height: 150px;border-radius: 100px; margin-bottom: 10px"
                                alt="">
                        </div>
                        <p class="px-3">{{ $test->message }}</p>
                        <div>
                            <h5>{{ $test->name }}</h5>
                            <p>{{ $test->designation }}</p>
                        </div>
                    </div>
                @endforeach
                </div>
            </div>
            {{-- dynamic jquery slider ends --}}

        </div>
    </div> -->

    <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}" class="rel">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.green.css') }}" class="rel">
    <script>
        $(document).ready(function() {
            $('.owl-carousel').owlCarousel({
                loop: true,
                items: 1,
                nav: true,
                navText: ['<i class="fa fa-arrow-left" aria-hidden="true"></i>',
                    '<i class="fa fa-arrow-right" aria-hidden="true"></i>'
                ],
                responsive: {
                    0: {
                        items: 1,
                        nav: false,
                    },
                    600: {
                        items: 1
                    },
                    1000: {
                        items: 1

                    },
                },
                autoplay: true,
                autoplayTimeout: 4000,
                dots: false,
            });
        })
    </script>
@endsection
