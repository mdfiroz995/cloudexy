{{-- Footer Starts --}}
<span id="" class="link page-top"><a> ^ </a></span>



<footer class="has-bg-img" style="background-color: #1e2436" id ="section2" >
    <div class="container  mt-3">
        <div class="row">
            <div class="col-sm-9 mt-5 mb-5">
                <a href="{{ route('home') }}"><img src="{{ asset('logo/'.$themes->footerlogo) }}" style="width: 170px" alt=""></a>
            </div>
            <div class="col-sm-3 mt-5 mb-5 cinline" style="color: #fefefe;">
                <div> <img src="{{asset('/img/img_box_29.png')}}" style="width: 38px; height: 48px" alt=""></div>
                <div style="margin-top: 8px;margin-left: 20px;"><p class="float-end">xyz@xyz.com</p></div>
            </div>
        </div>

        <div class="row text-white">
            <div class="col-sm-3">
                <h4>About</h4>
                <p class="text-justify"> Cloudexy is an online platform that brings together the best of Industry Experts, Technology, and Education to help you master the skills of the future.</p>
                <section class="mb-4 asection" style="color: white">
                    <!-- Facebook -->
                    <a target="_blank" class="btn btn-floating m-1"
                        href="{{$themes->facebook}}" role="button"><i class="fab fa-facebook-f " style="color: white"></i></a>

                    <!-- Instagram -->
                    <a class="btn btn-floating m-1" target="_blank"
                        href="{{$themes->instagram}}" role="button"><i class="fab fa-instagram" style="color: white"></i></a>

                    <!-- Linkedin -->
                    <a class="btn btn-floating m-1" target="_blank"
                        href="{{$themes->linkedin}}" role="button"><i class="fab fa-linkedin" style="color: white"></i></a>
                </section>
            </div>
            <div class="col-sm-3">
                <h4>Course</h4>
                <ul class="list-unstyled">
                    <li><a >Python</a> </li>
                    <li><a>Aws</a> </li>
                    <li><a>Web Development</a></li>
                    <li><a>Aws+DevOps</a> </li>
                </ul>
            </div>

            <div class="col-sm-3">
                <h4>Quick Links</h4>
                <ul class="list-unstyled">
                    <li><a href="{{route('home.blog')}}">Blog</a></li>
                    <li><a href="{{route('home.about')}}">About Us</a></li>
                    <!-- <li><a href="{{route('home.case')}}">Case Studies</a></li> -->
                    <li><a href="{{route('get.contact')}}">Contact Us</a></li>
                </ul>

                {{-- <a href=""><i class="fab fa-facebook fa-2x"></i></a> <a href=""><i class="fab fa-instagram fa-2x"></i></a> <a href=""><i class="fab fa-twitter fa-2x"></i></a><a href=""><i class="fab fa-linkedin fa-2x"></i></a> --}}


            </div>
            <div class="col-sm-3">
                <h4>Address</h4>
                <ul class="list-unstyled">
                <li><a>{{$themes->address}}</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid text-white text-center p-2 mt-4">
        © {{ date('Y') }} - {{$themes->copyright}}
    </div>
</footer>
{{-- Footer Ends --}}

</body>

</html>
