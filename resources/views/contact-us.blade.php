@php $title = "Contact Us" @endphp
@extends('frontend.layouts.main')
@section('main-container')
    <div class="container-fluid bgtop"
    style="background-color: #1e2436; height:250px;">
        <div class="container">
            <div class="text-center text-white pt-4 pb-2">
                <h1 class="bred-margin">Contact Us</h1>
                <p> Home <span><i class="fas fa-circle" style="font-size: 6px;margin: 0px 3px;color: rgba(255, 105, 0, 1);;"></i></span> Contact Us</p>
            </div>
        </div>
    </div>
    <div class="container text-center mt-5">
        <h6 class="mt-5">LETS TALK</h6>
        <h2>Find the Perfect Course for</h2>
        <!-- <h2>Your</h2> -->
        <p class="text-secondary">Have you started in IT Industry and don’t know how to onvolve it? Do You want to know about this industry then you can contact us.And Bring your queries to us and will provide you with most convenient and promising solution in every aspect.</p>
    </div>

    <div class="container">
        <img class="img-fluid" src="{{ asset('img/contacts_01.jpg') }}" alt="">
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-sm">
                <h6>FOR FAST SUPPORT</h6>
                <h2>Get In Touch</h2>
                <p class="text-secondary">We are actively seeking new work and we’d love to hear about your query,
                    challenges.</p>
                <br>
                <h5 class="text-secondary">Phone:</h5>
                <p class="text-brand">{{$themes->phoneno}}</p>
                <h5 class="text-secondary">Send Email:</h5>
                <p class="text-brand">{{$themes->email}}</p>
                <!-- <h5 class="text-secondary">Book Meeting:</h5>
                <p class="mt-3 text-brand"><a href="{{route('get.book')}}"> Schedule Now</a></p> -->
            </div>

            <div class="col-sm">
                <div style="background-image: url('{{ asset('img/contacts_img_02.png') }}');">
                @if(session('message'))
                    <div class="alert alert-success mb-1 mt-1">
                     {{ session('message') }}
                   </div>
                @endif
                    <div class="p-5">
                        <h2 class="mt-2">Drop Us a Message</h2>
                        <p class="text-secondary">Let us know your questions, suggestions and concerns by filling out this form.</p>
                    </div>
                    <div class="icard-body" style="padding: 0px 37px;">
                        <form method="POST" action="{{ route('post.contact') }}">
                            @csrf
                            <div class="irow irow-space">
                                <div class="col-2">
                                    <div class="input-group">
                                        <input class="input--style-1" type="text" placeholder="Your Name*"
                                            name="name" value="{{old('name')}}">
                                    </div>
                                    @error('name')
                                        <div class="er">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-2">
                                    <div class="input-group">
                                        <input class="input--style-1" type="email" placeholder="Email*"
                                            name="email" value="{{old('email')}}">
                                    </div>
                                    @error('email')
                                         <div class="er">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="irow irow-space">
                                <div class="col-2">
                                    <div class="input-group">
                                        <input class="input--style-1" type="number" placeholder="Phone"
                                            name="phone" value="{{old('phone')}}">
                                    </div>
                                @error('phone')
                                    <div class="er">{{ $message }}</div>
                                @enderror
                                </div>
                                <div class="col-2">
                                    <div class="input-group">
                                        <input class="input--style-1" type="text" placeholder="Subject"name="subject" value="{{old('subject')}}">
                                    </div>
                                </div>
                            </div>

                            <div class="irow irow-space">
                                <div class="input-group">
                                    {{-- <input class="input--style-1" type="text" placeholder="message*"name="message"> --}}
                                    <textarea class="input--style-1" name="message" id="message"  rows="4" placeholder="Message*" value="{{old('message')}}"></textarea>
                                </div>
                            @error('message')
                                <div class="er">{{ $message }}</div>
                            @enderror
                            </div>
                            <div>
                                <button class="col btn btn-plp-moon mb-3">SEND MESSAGE</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
