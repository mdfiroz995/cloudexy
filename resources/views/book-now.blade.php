@php $title = "Book Now" @endphp
@extends('frontend.layouts.main')
@section('main-container')
    <hr>

    {{-- <div class="container-fluid bg-light">
        <div class="container pt-5 pb-5">
            <div class="p-3 border rounded bg-white shadow" style="height:550px">
                <div class="text-center"><img class="rounded-circle" style="height: 60px;"
                        src="{{ asset('img/circlelogo.png') }}" alt="">
                </div>
               <div class="d-flex justify-content-center text-center">
                <div class=" text-secondary mt-4" style="height:200px; width:270px">
                    <h5>Socialist Fox</h5>
                    <p class="mt-3">Socialistfox is a Social Media Marketing Agency offering a dynamic one-stop solution for all your online needs, with clients across the globe.</p>
                </div>
              </div>

              <div class="hov cinline">
                <div class="ydot"></div>
                <div style="margin-left: 11px;"><b>30 Minutes Meeting</b> </div>
                <div style="margin-left: 90px;"><i class="fas fa-caret-right fa-2x"></i></div>
              </div>
              
            </div>
        </div>
    </div> --}}

    <!-- Calendly inline widget begin -->
<div class="calendly-inline-widget bg-light" data-url="https://calendly.com/satishsen-1/30min?hide_gdpr_banner=1" style="min-width:320px;height:750px;"></div>
<script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js" async></script>
<!-- Calendly inline widget end -->

@endsection
