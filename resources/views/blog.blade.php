@php $title = "Blog" @endphp
@extends('frontend.layouts.main')
@section('main-container')
    <div
        class="container-fluid bgtop mb-4" style="background-color: #1e2436; height:250px;">
        <div class="container">
            <div class="text-center text-white pt-4 pb-2">
                <h1 class="bred-margin">Blog</h1>
                <p> Home <span><i class="fas fa-circle"
                            style="font-size: 6px;margin: 0px 3px;color: rgba(255, 105, 0, 1);;"></i></span> Blog</p>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <!-- <p style="text-align:center;">Will meet soon</p> -->
        @foreach ($posts->chunk(3) as $post)
            <div class="row">
                @foreach ($post as $item)
                    @if ($item->publish == 1)
                        <div class="col-sm-4">
                            <div class="card border-0">
                                <a href="{{ URL('/blog'.'/'.$item->id )}}"><img class="card-img-top mx-auto d-block" src="{{ asset('blogimages/' . $item->postimg) }}"
                                    alt="Card image cap"></a>
                                <div class="card-body text-justify">
                                    <h5 class="card-title">{{ $item->title }}</h5>
                                    <div class="text-secondary mb-4" style="font-size: 12px">{{ $item->updated_at->format('F d, Y') }} /// No Comments </div>
                                    <p class="card-text text-secondary"> {{ $item->description }}​</p>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        @endforeach

    </div>
@endsection
