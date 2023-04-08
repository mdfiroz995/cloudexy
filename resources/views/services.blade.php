@php $title = "Courses" @endphp
@extends('frontend.layouts.main')
@section('main-container')
    <!-- <div class="container-fluid bgtop"
    style="background-color: #1e2436; height:250px;">
        <div class="container">
            <div class="text-center text-white pt-4 pb-2">
                <h1 class="bred-margin">Course</h1>
                <p> Home <span><i class="fas fa-circle" style="font-size: 6px;margin: 0px 3px;color: rgba(255, 105, 0, 1);;"></i></span></span> Services</p>
            </div>
        </div>
    </div> -->
    
<div class="container mt-5">
    @foreach ($course->chunk(4) as $courses)
    <div class="row">
        @foreach ($courses as $item)
        @if ($item->c_status == 1)
        <div class="col-sm-3 p-2" >
            <div class="card">
                <a href=""><img class="card-img-top mx-auto d-block"
                        src="{{ asset('courseimages/' . $item->c_img) }}" alt="Card image cap" width="150"
                        height="150"></a>
                <div class="card-body">
                <h5 class="card-title">{{ $item->c_name }}</h5>
                
                <div  class="d-flex justify-content-between">
                    <div class="">
                    <a href="{{ URL('/course'.'/'.$item->id )}}" class="btn" Style="background: linear-gradient(to right, #8f94fb, #4e54c8)">Learn More</a>
                    </div>
                    <div class="">
                    <a href="{{ URL('/course'.'/'.$item->id )}}" class="btn" Style="background: #a79c8e;">Enroll Now</a>
                    </div>
                </div>
                </div>
            </div>
        </div>
        @endif
        @endforeach
    </div>
    @endforeach

   
</div>

<div class="container mt-5">
<div class="row">
        <table class="table table-success table-light border">
            <thead>
                <tr>
                    <th>Batch Name</th>
                    <th>Details</th>
                    <th>Starting Date</th>
                </tr>
            </thead>
            <tbody> 
                @foreach($batch_info as $k=>$val)
                <tr>
                    <td>{{$val->batch_name}}</td>
                    <td>{{$val->batch_detail}}</td>
                    <td>{{date('F d, Y',strtotime($val->from_batch))}}</td>
               </tr>
               @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
