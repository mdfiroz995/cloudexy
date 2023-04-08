<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<style>
    .rate {
        float: left;
        height: 46px;
        padding: 0 10px;
    }

    .rate:not(:checked)>input {
        position: absolute;
        display: none;
    }

    .rate:not(:checked)>label {
        float: right;
        width: 1em;
        overflow: hidden;
        white-space: nowrap;
        cursor: pointer;
        font-size: 30px;
        color: #ccc;
    }

    .rated:not(:checked)>label {
        float: right;
        width: 1em;
        overflow: hidden;
        white-space: nowrap;
        cursor: pointer;
        font-size: 25px;
        color: #ccc;
    }

    .rate:not(:checked)>label:before {
        content: '★ ';
    }

    .rate>input:checked~label {
        color: #ffc700;
    }

    .rate:not(:checked)>label:hover,
    .rate:not(:checked)>label:hover~label {
        color: #deb217;
    }

    .rate>input:checked+label:hover,
    .rate>input:checked+label:hover~label,
    .rate>input:checked~label:hover,
    .rate>input:checked~label:hover~label,
    .rate>label:hover~input:checked~label {
        color: #c59b08;
    }

    .star-rating-complete {
        color: #c59b08;
    }

    .rating-container .form-control:hover,
    .rating-container .form-control:focus {
        background: #fff;
        border: 1px solid #ced4da;
    }

    .rating-container textarea:focus,
    .rating-container input:focus {
        color: #000;
    }

    .rated {
        float: left;
        height: 46px;
        padding: 0 10px;
    }

    .rated:not(:checked)>input {
        position: absolute;
        display: none;
    }

    .rated:not(:checked)>label {
        float: right;
        width: 1em;
        overflow: hidden;
        white-space: nowrap;
        cursor: pointer;
        font-size: 25px;
        color: #ffc700;
    }

    .rated:not(:checked)>label:before {
        content: '★ ';
    }

    .rated>input:checked~label {
        color: #ffc700;
    }

    .rated:not(:checked)>label:hover,
    .rated:not(:checked)>label:hover~label {
        color: #deb217;
    }

    .rated>input:checked+label:hover,
    .rated>input:checked+label:hover~label,
    .rated>input:checked~label:hover,
    .rated>input:checked~label:hover~label,
    .rated>label:hover~input:checked~label {
        color: #c59b08;
    }
</style>
@if ($message = Session::get('success'))
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
    </div>
@endif
@if ($message = Session::get('warning'))
    <div class="alert alert-warning alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
    </div>
@endif
@if ($message = Session::get('info'))
    <div class="alert alert-info alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
    </div>
@endif
@if (!empty($value))
<div class="container">

</div>
<div class="container d-flex" >
    <div class="row1" style='border:1px solid rgb(195, 192, 192); width:60%;'>
        <div> <p class="font-weight-bold" style="margin-left: 26px;">Review</p></div>

    @foreach ($value as $val)
                <div class="col mt-4">
                    <div class="mb-0">
                        {{-- <div class="col">
                        </div> --}}
                    </div>
                    <div class="mb-0">
                        <div class="col d-flex">
                            <h6 style='margin-top:11px;'>{{ $val->user_name }}</h6>

                            <div class="rated">
                                @for ($i = 1; $i <= $val->star_rating; $i++)
                                    {{-- <input type="radio" id="star{{$i}}" class="rate" name="rating" value="5"/> --}}
                                    <label class="star-rating-complete" title="text">{{ $i }} stars</label>
                                @endfor
                            </div>
                            {{-- <div class='mt-3' style='color:grey'>{{ '(' . $val->star_rating . ')' }}</div> --}}
                        </div>
                    </div>
                    <div class="ml-1">
                        <div class="col">
                            <p>{{ $val->comments }}</p>
                        </div>
                    </div>
                </div>
    @endforeach
</div>
<div class="row2" style='border:1px solid rgb(195, 192, 192);  width:39%; margin-left:1%;'>
    <div class="col mt-4">
        <form class="py-2 px-4" action="{{ route('review_store') }}" style="box-shadow: 0 0 10px 0 #ddd;"
            method="POST" autocomplete="off">
            @csrf
            <p class="font-weight-bold ">Review</p>
            <div class="form-group row">
                <div class="col">
                    <div class="rate">
                        <input type="radio" id="star5" class="rate" name="rating" value="5" />
                        <label for="star5" title="text">5 stars</label>
                        <input type="radio"  id="star4" class="rate" name="rating" value="4" />
                        <label for="star4" title="text">4 stars</label>
                        <input type="radio" id="star3" class="rate" name="rating" value="3" />
                        <label for="star3" title="text">3 stars</label>
                        <input type="radio" id="star2" class="rate" name="rating" value="2">
                        <label for="star2" title="text">2 stars</label>
                        <input type="radio" id="star1" class="rate" name="rating" value="1" />
                        <label for="star1" title="text">1 star</label>
                    </div>
                </div>
            </div>
            <div class="form-group row mt-4">
                <div class="col">
                    <textarea class="form-control" name="comment" rows="6 " placeholder="Comment" maxlength="200"></textarea>
                </div>
            </div>
            <div class="mt-3 text-right">
                <button class="btn btn-sm py-2 px-3 btn-info">Submit
                </button>
            </div>
        </form>
    </div>
</div>

</div>

@endif
{{--
<div class="container">
    <div class="row">
        <div class="col mt-4">
            <form class="py-2 px-4" action="{{ route('review_store') }}" style="box-shadow: 0 0 10px 0 #ddd;"
                method="POST" autocomplete="off">
                @csrf
                <p class="font-weight-bold ">Review</p>
                <div class="form-group row">
                    <div class="col">
                        <div class="rate">
                            <input type="radio" id="star5" class="rate" name="rating" value="5" />
                            <label for="star5" title="text">5 stars</label>
                            <input type="radio"  id="star4" class="rate" name="rating" value="4" />
                            <label for="star4" title="text">4 stars</label>
                            <input type="radio" id="star3" class="rate" name="rating" value="3" />
                            <label for="star3" title="text">3 stars</label>
                            <input type="radio" id="star2" class="rate" name="rating" value="2">
                            <label for="star2" title="text">2 stars</label>
                            <input type="radio" id="star1" class="rate" name="rating" value="1" />
                            <label for="star1" title="text">1 star</label>
                        </div>
                    </div>
                </div>
                <div class="form-group row mt-4">
                    <div class="col">
                        <textarea class="form-control" name="comment" rows="6 " placeholder="Comment" maxlength="200"></textarea>
                    </div>
                </div>
                <div class="mt-3 text-right">
                    <button class="btn btn-sm py-2 px-3 btn-info">Submit
                    </button>
                </div>
            </form>
        </div>
    </div>
</div> --}}
