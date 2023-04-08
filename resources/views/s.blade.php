@php $title = "" @endphp
@extends('frontend.layouts.main')
@section('main-container')

<style>
    .ctaga a{
        color: #7164ea;
        text-decoration: none;
    }

</style>

    <div class="container">
        @if ($posts != $temp)
            @foreach ($posts as $post)
                <div class="mb-4 mt-4 ctaga">
                    <h3 style="color: #7164ea"> <a href="{{ URL('/blog'.'/'.$post->id )}}">{{ $post->title }}</a></h3>
                    <div class="text-secondary mb-4" style="font-size: 12px">{{ $post->created_at->format('F d, Y') }} | By Admin </div>
                </div>
            @endforeach
        @else 
        <h3>Not Found</h3>
        @endif
        
    </div>




@endsection
