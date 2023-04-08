@php $title = "Batch Information" @endphp
@extends('frontend.layouts.main')
@section('main-container')

<hr>
<div class="container text-center w-75 mt-5">
    <h1 class="case-h" >Our Batch Information</h1>
    <p class="text-secondary">Comming Soon Listing.....</p>
</div>

   
<!-- <div class="gallery">

    <ul class="controls">
        <li class="buttons active" data-filter="all">All</li>
        <li class="buttons" data-filter="web">Web Design</li>
        <li class="buttons" data-filter="graphic">Graphic Design</li>
        <li class="buttons" data-filter="cake">Marketing</li>
    </ul>

    <div class="image-container">

               {{-- graphics designing case--}}

            <a href="{{ asset('/img/case/graphic1.jpg') }}" class="image graphic">
                <img src="{{ asset('/img/case/graphic1.jpg') }}" alt="">
            </a>
            <a href="{{ asset('/img/case/graphic2.jpg') }}" class="image graphic">
                <img src="{{ asset('/img/case/graphic2.jpg') }}" alt="">
            </a>
    
            <a href="{{ asset('/img/case/graphic3.jpg') }}" class="image graphic">
                <img src="{{ asset('/img/case/graphic3.jpg') }}" alt="">
            </a>
    
            <a href="{{ asset('/img/case/graphic4.jpg') }}" class="image graphic">
                <img src="{{ asset('/img/case/graphic4.jpg') }}" alt="">
            </a>
            <a href="{{ asset('/img/case/graphic5.jpg') }}" class="image graphic">
                <img src="{{ asset('/img/case/graphic5.jpg') }}" alt="">
            </a>
    
            <a href="{{ asset('/img/case/graphic6.png') }}" class="image graphic">
                <img src="{{ asset('/img/case/graphic6.png') }}" alt="">
            </a>

        {{-- web designing case --}}

        <a href="{{ asset('/img/case/web-d1.jpg') }}" class="image web">
            <img src="{{ asset('/img/case/web-d1.jpg') }}" alt="">
        </a>
        <a href="{{ asset('/img/case/web-d2.png') }}" class="image web">
            <img src="{{ asset('/img/case/web-d2.png') }}" alt="">
        </a>
        <a href="{{ asset('/img/case/web-d3.png') }}" class="image web">
            <img src="{{ asset('/img/case/web-d3.png') }}" alt="">
        </a>
        <a href="{{ asset('/img/case/web-d4.png') }}" class="image web">
            <img src="{{ asset('/img/case/web-d4.png') }}" alt="">
        </a>
        <a href="{{ asset('/img/case/web-d5.jpg') }}" class="image web">
            <img src="{{ asset('/img/case/web-d5.jpg') }}" alt="">
        </a>
        <a href="{{ asset('/img/case/web-d6.png') }}" class="image web">
            <img src="{{ asset('/img/case/web-d6.png') }}" alt="">
        </a>


        {{-- marketing case --}}

        <a href="{{ asset('/img/case/marketing-1.jpeg') }}" class="image cake">
            <img src="{{ asset('/img/case/marketing-1.jpeg') }}" alt="">
        </a>
        <a href="{{ asset('/img/case/marketing-2.jpeg') }}" class="image cake">
            <img src="{{ asset('/img/case/marketing-2.jpeg') }}" alt="">
        </a>
        <a href="{{ asset('/img/case/marketing-3.jpeg') }}" class="image cake">
            <img src="{{ asset('/img/case/marketing-3.jpeg') }}" alt="">
        </a>
        <a href="{{ asset('/img/case/marketing4.jpeg') }}" class="image cake">
            <img src="{{ asset('/img/case/marketing4.jpeg') }}" alt="">
        </a>
        <a href="{{ asset('/img/case/marketing5.jpeg') }}" class="image cake">
            <img src="{{ asset('/img/case/marketing5.jpeg') }}" alt="">
        </a>
    </div>

</div> -->

    <!-- magnific popup js cdn link  -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>

    <script>
        $(document).ready(function() {
            $('.buttons').click(function() {
                $(this).addClass('active').siblings().removeClass('active');
                var filter = $(this).attr('data-filter')
                if (filter == 'all') {
                    $('.image').show(400);
                } else {
                    $('.image').not('.' + filter).hide(200);
                    $('.image').filter('.' + filter).show(400);
                }
            });

            $('.gallery').magnificPopup({
                delegate: 'a',
                type: 'image',
                gallery: {
                    enabled: true
                }
            });
        });
    </script> -->

@endsection