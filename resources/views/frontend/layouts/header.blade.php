<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
    src = "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
    </script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}" class="rel">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.green.css') }}" class="rel">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nivo-slider.css') }}" type="text/css" media="screen" />
    <link rel="stylesheet" href="{{ asset('css/default.css') }}" type="text/css" media="screen" />
    <script type="text/javascript" src="{{asset('js/jquery.nivo.slider.js')}}"></script>
    <title>{{ $title }}</title>
    <style>

    </style>
</head>

<body>


    {{-- upper navigation start --}}
    <div class="container-fluid hidee" style="padding:12px;">
        <div class="container">
            <span class="icons" style="margin-right: 20px;"><i class="fas fa-phone"></i>{{$themes->phoneno}}</span> <span
                class="icons"> <i class="fas fa-envelope"></i> {{$themes->email}}</span>
                <section class="float-end" >
                    <a target="_blank" class=" btn-floating text-secondary"
                        href="{{$themes->facebook}}" role="button"><i class="fab fa-facebook-f"></i></a>

                    <a class=" btn-floating px-2 text-secondary" target="_blank"
                        href="{{$themes->instagram}}" role="button"><i class="fab fa-instagram"></i></a>

                    <a class=" btn-floating text-secondary" target="_blank"
                        href="{{$themes->linkedin}}" role="button"><i class="fab fa-linkedin"></i></a>
                </section>
        </div>
    </div>

    {{-- upper navigation end --}}
    <nav id="navbar_top" class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}"><img src="{{ asset('logo/'.$themes->headerlogo) }}"
                        style="width: 170px" alt=""></a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="main_nav">
            <ul class="navbar-nav ms-auto text-center">
                    <li class="nav-item">
                        <a class="nav-link " href="#" aria-current="page">Home</a>
                    </li>
                    <li class="nav-item" id='services_section1'>
                        <a class="nav-link" onclick='scrollToCourse()'>Course</a>
                        {{-- {{ route('home.services') }} --}}
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">Project</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" onclick='scrollToAbout()'>About</a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item" style="pointer:none">
                        <a class="nav-link" href="{{route('login')}}" >Login</a>
                    </li>
                </ul>

            </div> <!-- navbar-collapse.// -->
        </div> <!-- container-fluid.// -->
    </nav>
    <script>
    document.addEventListener("DOMContentLoaded", function() {
        window.addEventListener('scroll', function() {
            if (window.scrollY > 50) {
                document.getElementById('navbar_top').classList.add('fixed-top');
                // add padding top to show content behind navbar
                navbar_height = document.querySelector('.navbar').offsetHeight;
                document.body.style.paddingTop = navbar_height + 'px';
            } else {
                document.getElementById('navbar_top').classList.remove('fixed-top');
                // remove padding top from body
                document.body.style.paddingTop = '0';
            }
        });
    });
    </script>

    <div class="offcanvas offcanvas-end p-2" id="demo">

        <img class="p-3" src="{{ asset('logo/'.$themes->headerlogo) }}" style="width: 170px" alt=""></a>
        <div class="offcanvas-header">
            <h3 class="offcanvas-title">Cloudexy</h3>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
        </div>
        <div class="offcanvas-body">
            <p class="text-secondary">Cloudexy is an online platform that brings together the best of Industry Experts,
                Technology, and Education to help you master the skills of the future.</p>
            <br>
            <h5>Our Courses</h5>
            <ul class="text-secondary">
                <li>Python</li>
                <li>Aws</li>
                <li>Website Development</li>
                <li>Aws+DevOps</li>
            </ul><br>
            <h5>Contacts</h5>
            <span class="icons text-secondary"> <i class="fas fa-phone"></i>{{$themes->phoneno}}</span><br>
            <span class="icons text-secondary"> <i class="fas fa-envelope"></i> {{$themes->email}} </span>
            <br>
        </div>
    </div>
    </div>

    <script>
    $(document).ready(function() {
        $("[href]").each(function() {
            if (this.href == window.location.href) {
                $(this).addClass("link-active");
            }
        });
    });
    </script>
