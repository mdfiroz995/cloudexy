@php $title = $post->title @endphp
@extends('frontend.layouts.main')
@section('main-container')
    <hr>
    <div class="container text-center w-75 mt-5">
        <h1 class="case-h">{{ $post->title }}</h1>
        <div class="text-secondary mb-4" style="font-size: 12px">{{ $post->created_at->format('F d, Y') }} | BY ADMIN |
            UNCATEGORIZED </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-9">
                <div class="img-hover-zoom">
                    <img class="img-fluid single-post-img" src="{{ asset('blogimages/' . $post->postimg) }}" alt="">
                </div>

                <div class="single-post-p">
                    {!! $post->long_description !!}
                </div>

            </div>

            <div class="col-sm-3">
                <div class=" rounded">
                    <form action="{{ route('search') }}" method="GET">
                        <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search"
                            aria-describedby="search-addon" />
                    </form>
                </div>
                <div>
                    <h4 class="single-post-h4">Recent Posts</h4>
                </div>


                @foreach ($posts->take(3) as $post)
                    <div class="cinline">
                        <div><img class="single-post-side-img" src="{{ asset('blogimages/' . $post->postimg) }}"
                                alt="">
                        </div>

                        <div class='single-blog'>
                            <p class="text-secondary" style="font-weight: 400;font-size: 12px;">
                                {{ $post->created_at->format('F d, Y') }} </p>
                            <a href="{{ URL('/blog' . '/' . $post->id) }}">
                                <p style="margin-top: -18px;">{{ $post->title }}</p>
                            </a>
                        </div>
                    </div>
                @endforeach
                <div>
                    <div>
                        <h4 class="single-post-h4">Our Courses</h4>
                    </div>
                    <div>
                        <ul class="blogpost">
                            <li class="blogpost">Python</li>
                            <li class="blogpost">Aws </li>
                            <li class="blogpost">Web Development</li>
                            <li class="blogpost">Aws + DevOps </li>
                        </ul>
                    </div>
                </div>

                <div>
                    <div>
                        <h4 class="single-post-h4">Contacts</h4>
                    </div>
                    <div><span class="icons"
                            style="margin-right: 20px;font-size: 18px;
                        line-height: 27px;
                        font-weight: 400;
                        color: #696687;"><i
                                class="fas fa-phone"></i> {{ $themes->phoneno }}</span> </div>
                    <div class="my-3"><span class="icons"
                            style="font-size: 18px;
                        line-height: 27px;
                        font-weight: 400;
                        color: #696687;">
                            <i class="fas fa-envelope"></i> {{ $themes->email }}</span></div>
                    <div><span class="icons"
                            style="font-size: 18px;
                        line-height: 27px;
                        font-weight: 400;
                        color: #696687;">
                            <i class="fas fa-map-marker-alt"></i> {{ $themes->address }}</span></div>
                </div>

            </div>
        </div>
    </div>
@endsection
