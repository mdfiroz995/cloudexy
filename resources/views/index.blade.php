@php $title = "Cloudexy" @endphp
@extends('frontend.layouts.main')
@section('main-container')
    <div id="slider" class="nivoSlider">
        <img src="{{ asset('img/image-1.jpg') }}" data-thumb="{{ asset('img/image-1.webp') }}" alt=""
            title="<div class='custom_class1'><div style='display:flex; flex-direction:column-reverse; font-size:5vw; line-height:1.2;'><span>Cloudexy is </span><span><span style='color:#fdcd56;'>Online</span> IT Courses</span> <span> Learning Platform</span></div><p class='class_p' style='font-size:1.1vw;  margin-bottom:21px; line-height:1.7;'>Explore Cloudexy extensive, world-class online learning opportunities. We <br>  invite you to follow your intellectual curiosity.</p><a   onclick='scrollToCourse()' style='border:2px solid white; color:white; text-decoration:none;  font-size:1.1vw; padding:17px 40px 17px 40px;'>Start Learning</a></div>" />
        <img src="{{ asset('img/image-2.jpg') }}" data-thumb="{{ asset('img/image-2.webp') }}" alt=""
            title="<div class='custom_class'><div style='font-size:5vw;'>Best Online Learning</div><p class='class_p' style='font-size:1.1vw; margin-bottom:21px; line-height:1.7;'>Explore Cloudexy extensive, world-class online learning opportunities. We <br>  invite you to follow your intellectual curiosity.</p><a onclick='scrollToCourse()' style='border:2px solid white;  color:white; text-decoration:none;  font-size:1.1vw; padding:17px 40px 17px 40px;'>Start Learning</a></div>" />
    </div>
    <script type="text/javascript">
        $(window).load(function() {
            $('#slider').nivoSlider();
            $('.nivo-prevNav').empty();
            $('.nivo-nextNav').empty();
            $('.nivo-prevNav').append(
                '<i class="fa fa-3x fa-chevron-circle-left" aria-hidden="true"  style="margin-left: 7px; color:#c0c5cb;"></i>'
            );
            $('.nivo-nextNav').append(
                '<i class="fa fa-3x fa-chevron-circle-right" aria-hidden="true" style="margin-right: 7px; color:#c0c5cb;"></i>'
            );
            var data = $('.nivo-controlNav').children('a');
            for ($a = 1; $a <= data.length; $a++) {
                $('.nivo-controlNav .nivo-control:nth-of-type(' + $a + ')').empty();
                $('.nivo-controlNav .nivo-control:nth-of-type(' + $a + ')').append(
                    '<i class="fa fa-circle" aria-hidden="true" style="margin-right:3.5px; font-size:8px;"></i>'
                );
            }
        });
    </script>
    <div class="container-fluid" style="background-image: url('{{ asset('img/home8_iconbox_bg.webp') }}');">
        <div class="container mt-5">
            <div class="row">
                <h2 class="text-center" id="home">WHAT WE DO</h2>
                <div class="col-sm">
                    <div class="card service-card services-bg border-0" style="background-color: transparent;">
                        <img class="card-img-top mx-auto d-block" src="{{ asset('img/conversation-icon.webp') }}"
                            alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Consultancy</h5>
                            <p class="card-text text-secondary">You don’t need to sign a contract to know what you’re
                                missing out on. Get a free digital consultation session to find out where you are going.​
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="card service-card services-bg border-0" style="background-color: transparent;">
                        <img class="card-img-top mx-auto d-block" src="{{ asset('img/graphicon.webp') }}"
                            alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Analysis</h5>
                            <p class="card-text text-secondary">Our Experts carefully evaluate your digital marketing
                                presence
                                to identify flaws and suggest improvements to pave a way towards your digital success.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="card service-card services-bg border-0" style="background-color: transparent;">
                        <img class="card-img-top mx-auto d-block" src="{{ asset('img/rocket-icon.webp') }}"
                            alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Implementation</h5>
                            <p class="card-text text-secondary">We equip businesses with the tools they need to achieve
                                their
                                goals. Each of our marketing campaigns is built with clients’ needs in mind to solve their
                                challenges.​</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container" id='section1'>
        <h2 class="font-weight-bold text-center">Our Course</h2>
        <p class="font-italic text-muted text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
            eiusmod
            tempor incididunt.</p>
        <div class="row owl-carousel  owl-three">
            @foreach ($course as $item)
                @if ($item->c_status == 1)
                    <div class="col-sm-3" style="width:100%">
                        <div class="card">
                            <a href=""><img class="card-img-top mx-auto d-block"
                                    src="{{ asset('courseimages/' . $item->c_img) }}" alt="Card image cap" width="150"
                                    height="150"></a>
                            <div class="card-body">
                                <h5 class="card-title">{{ $item->c_name }}</h5>
                                <div class="d-flex justify-content-between">
                                    <div class="">
                                        <a href="{{ URL('/course' . '/' . $item->id) }}" class="btn"
                                            Style="background: linear-gradient(to right, #8f94fb, #4e54c8); font-size:2vmin;">Learn
                                            More</a>
                                    </div>
                                    <div class="">
                                        <a href="{{ URL('/course' . '/' . $item->id) }}" class="btn"
                                            Style="background: #a79c8e; font-size:2vmin;">Enroll
                                            Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>

    <div class="container" style="margin-top:38px;" >
        <h2 class="font-weight-bold text-center">Latest Blogs</h2>
        <p class="font-italic text-muted text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
            eiusmod
            tempor incididunt.</p>
        <div class="row owl-carousel owl-two">
            @foreach ($posts as $item)
                @if ($item->publish == 1)
                    <div class="col-sm-3" style="width: 100%">
                        <div class="card">
                            <a href="{{ URL('/blog' . '/' . $item->id) }}"><img class="card-img-top mx-auto d-block"
                                    src="{{ asset('blogimages/' . $item->postimg) }}" alt="Card image cap" width="150"
                                    height="150"></a>
                            <div class="card-body">
                                <h5 class="card-title">{{ $item->title }}</h5>

                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>

    <div class="container" style="margin-top:6px;">
        <h2 class="font-weight-bold mb-2 text-center">Our Trusted Score</h2>
        <p class="font-italic text-muted mb-4 text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
            eiusmod
            tempor incididunt.</p>
        <div class="row">

            <div class="four col-md-3">
                <div class="counter-box colored">
                    <i class="fa  fa-user"></i>
                    <span class="counter">2147</span>
                    <p>Our Student</p>
                </div>
            </div>
            <div class="four col-md-3">
                <div class="counter-box">
                    <i class="fa fa-group"></i>
                    <span class="counter">3275</span>
                    <p>Registered Student</p>
                </div>
            </div>
            <div class="four col-md-3">
                <div class="counter-box">
                    {{-- <i class="fa  fa-shopping-cart"></i> --}}
                    <i class="fa fa-book" aria-hidden="true"></i>
                    <span class="counter">289</span>
                    <p>Available Courses</p>
                </div>
            </div>
            <div class="four col-md-3">
                <div class="counter-box">
                    <i class="fa fa-thumbs-o-up"></i>
                    <span class="counter">1563</span>
                    <p>Finished Batch</p>
                </div>
            </div>
        </div>
    </div>

    {{-- </div> --}}
    </div>
    </div>
    <style>
        .counter-box {
            display: block;
            background: #f6f6f6;
            padding: 40px 20px 37px;
            text-align: center
        }

        .counter-box p {
            margin: 5px 0 0;
            padding: 0;
            color: #909090;
            font-size: 18px;
            font-weight: 500
        }

        .card {
            margin-right: 2px;
        }

        .owl-carousel .owl-nav button.owl-prev,
        .owl-carousel .owl-nav button.owl-next,
        .owl-carousel button.owl-dot {
            margin-left: 5px
        }

        .counter-box i {
            font-size: 60px;
            margin: 0 0 15px;
            color: #d2d2d2
        }

        .counter {
            display: block;
            font-size: 32px;
            font-weight: 700;
            color: #666;
            line-height: 28px
        }

        .counter-box.colored {
            background: #1e2436;
        }

        .counter-box.colored p,
        .counter-box.colored i,
        .counter-box.colored .counter {
            color: #fff
        }
    </style>

    <script>
        $(document).ready(function() {

            $('.counter').each(function() {
                $(this).prop('Counter', 0).animate({
                    Counter: $(this).text()
                }, {
                    duration: 4000,
                    easing: 'swing',
                    step: function(now) {
                        $(this).text(Math.ceil(now));
                    }
                });
            });

        });
    </script>
    <div class="container py-3 mt-3">

        <h2 class="font-weight-bold mb-2 text-center">Our Team</h2>
        <p class="font-italic text-muted mb-4 text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
            eiusmod
            tempor incididunt.</p>

        <div class="row owl-carousel owl-one">
            @foreach ($tests as $test)
                <div class="col-lg-3 col-md-6  mb-lg-0" style="width: 98%">
                    <!-- Card-->
                    <div class="card shadow-sm border-0 rounded">
                        <div class="card-body p-0"><img src="{{ asset('Testimonial_Images/' . $test->testimg) }}"
                                alt="" class="w-100 card-img-top">
                            <div class="p-4">
                                <h5 class="mb-0">{{ $test->name }}</h5>
                                <p class="small text-muted">{{ $test->designation }}</p>
                                <ul class="social mb-0 list-inline mt-3">
                                    <li class="list-inline-item m-0"><a href="#" class="social-link"><i
                                                class="fa fa-facebook-f"></i></a></li>
                                    <li class="list-inline-item m-0"><a href="#" class="social-link"><i
                                                class="fa fa-twitter"></i></a></li>
                                    <li class="list-inline-item m-0"><a href="#" class="social-link"><i
                                                class="fa fa-instagram"></i></a></li>
                                    <li class="list-inline-item m-0"><a href="#" class="social-link"><i
                                                class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="container mt-1">

        <h2 class="font-weight-bold mb-2 text-center">Reviews</h2>
        <p class="font-italic text-muted mb-4 text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
            eiusmod
            tempor incididunt.</p>

        <div class="row owl-carousel owl-one">
            @foreach ($review_rating as $test)
                <div class="col-lg-3 col-md-6  mb-lg-0" style="width: 98.5%">
                    <!-- Card-->
                    <div class="card shadow-sm rounded">
                        <div class="card-body p-0" style="min-height:270px;">

                            <div class="p-4">
                                <h5 class="mb-0">{{ $test->user_name }}</h5>
                                <p class="small text-muted" style="min-height:150px;">{{ $test->comments }}</p>
                                <div class="rated">
                                    @for ($i = 5; $i >= 1; $i--)
                                        @if ($i > $test->star_rating)
                                            <label class="star-rating-complete not" title="text">{{ $i }}
                                                stars</label>
                                        @else
                                            <label class="star-rating-complete" title="text">{{ $i }}
                                                stars</label>
                                        @endif
                                    @endfor
                                </div>
                                {{-- <span>{{$test->star_rating}}/5.00</span> --}}
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <style>
        .star-rating-complete {
            color: #c59b08;
        }

        .star-rating-complete.not {
            color: #bfb7b7 !important;
        }

        .rated {
            float: left;
            height: 46px;
        }

        .rated:not(:checked)>label {
            float: right;
            width: 1em;
            overflow: hidden;
            white-space: nowrap;
            cursor: pointer;
            font-size: 25px;
            color: #ffc700;
        }

        .rated:not(:checked)>label:before {
            content: '★ ';
        }

        .owl-three.owl-carousel .owl-nav.disabled
        {
            display: block;
            font-size: 60px;
            color: #bbacac;
        }

        .owl-two.owl-carousel .owl-nav.disabled,
        .owl-two.owl-carousel .owl-dots.disabled {
            display: block;
            font-size: 60px;
            color: #bbacac;
        }
    </style>

    <script>
        function scrollToCourse() {
            const section = document.getElementById("section1");
            console.log(section);

            section.scrollIntoView({
                behaviour: "smooth"
            });
        }

        function scrollToAbout() {
            const section = document.getElementById("section2");
            section.scrollIntoView({
                behaviour: "smooth"
            });
        }
    </script>
    <script>
        // Owl One
        $(document).ready(function() {
            $('.owl-carousel.owl-one').owlCarousel({
                loop: true,
                items: 4,
                margin: 10,
                responsive: {
                    0: {
                        items: 1,
                        nav: false,
                    },
                    600: {
                        items: 2
                    },
                    1000: {
                        items: 4
                    },
                },
                autoplay: true,
                autoplayTimeout: 3500,
            });
        });
        // Owl Two
        $(document).ready(function() {
            $('.owl-carousel.owl-two').owlCarousel({
                loop: true,
                items: 4,
                margin: 10,
                responsive: {
                    0: {
                        items: 1,
                    },
                    600: {
                        items: 2
                    },
                    1000: {
                        items: 4
                    },
                }
            });
        });

        // Owl Three
        $(document).ready(function() {
            $('.owl-carousel.owl-three').owlCarousel({
                loop: true,
                items: 4,
                margin: 10,
                responsive: {
                    0: {
                        items: 1,
                    },
                    600: {
                        items: 2
                    },
                    1000: {
                        items: 4
                    },
                }
            });
        });
    </script>
@endsection
