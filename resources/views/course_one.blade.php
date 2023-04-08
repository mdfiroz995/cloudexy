@php $title = $course->c_name @endphp
@extends('frontend.layouts.main')
@section('main-container')
    <div class="container text-center w-75 mt-5">
        <h1 class="case-h">{{ $course->c_name }}</h1>
        <div class="text-secondary mb-4" style="font-size: 12px">{{ $course->created_at->format('F d, Y') }} | BY ADMIN |
            UNCATEGORIZED </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-9">
                <div class="img-hover-zoom">
                    <img class="img-fluid" src="{{ asset('courseimages/' . $course->c_img) }}" alt="" style="width: 50%; border-radius: 8px; margin-bottom: 30px;}">
                </div>

                <div class="single-post-p">
                    {!! $course->c_detail !!}
                </div>

            </div>

            <div class="col-sm-3">
                <div class="rounded mb-2">
                    <form action="{{ route('search') }}" method="GET">
                        <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search"
                            aria-describedby="search-addon" />
                    </form>
                </div>

                @foreach ($all_course->take(3) as $val)
                    <div class="cinline">
                        <div ><img class="single-post-side-img" src="{{ asset('courseimages/' . $val->c_img) }}"
                                alt="" width="50% !important">
                        </div>
                        <div class='single-blog'>
                            <p class="text-secondary" style="font-weight: 400;font-size: 12px;">
                                {{ $val->created_at->format('F d, Y') }} </p>
                            <a href="{{ URL('/course' . '/' . $course->id) }}">
                                <p style="margin-top: -18px;">{{ $val->c_name }}</p>
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
                            @foreach($all_course as $course)
                                <li class="blogpost">{{$course->c_name}}</li>
                            @endforeach
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
    <div class="container mt-5">
        <div class="col-sm-4">
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
</script>
@endsection
