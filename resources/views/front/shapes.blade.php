@extends('front.mainpage')
@section('js_area')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
@endsection
@section('content')

    <div class="container mt-2">
        <input type="text" class="hiddenInput" style="display: none;" value="{{ count($data) }}">
        <div class="row">
            @foreach ($data as $item)
                @if ($item->shape_two_image != null)
                    <div class="col-md-2 col-sm-6 "></div>
                    <div class="col-md-4 col-sm-6 m-10">
                        <div class="card card-block bg_bg mt-3 " style="width: 300px;height:400px;">
                            <img class="color_clicked imageOne"
                                src="data:image/jpeg;base64,{{ base64_encode($item->shape_image) }}"
                                alt="{{ $item->shape_name }}">
                            <h5 class="card-title mt-3 mb-3 category_text imageOneText">{{ $item->shape_name }}</h5>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 m-10">
                        <div class="card card-block bg_bg mt-3 " style="width: 300px;height:400px;">
                            <img class="color_clicked imageTwo"
                                src="data:image/jpeg;base64,{{ base64_encode($item->shape_two_image) }}"
                                alt="{{ $item->shape_two_text }}">
                            <h5 class="card-title mt-3 mb-3 category_text imageTwoText">{{ $item->shape_two_text }}</h5>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6"></div>
                @else
                <div class="col-md-4 col-sm-6"></div>
                <div class="col-md-4 col-sm-6 m-10 ">
                    <div class="card card-block bg_bg mt-3 " style="width: 300px;height:400px;">
                        <img class="color_clicked imageOne"
                            src="data:image/jpeg;base64,{{ base64_encode($item->shape_image) }}"
                            alt="{{ $item->shape_name }}">
                        <h5 class="card-title mt-3 mb-3 category_text imageOneText">{{ $item->shape_name }}</h5>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6"></div>
                @endif
            @endforeach
        </div>

    </div>
    <script>
        var size = document.querySelector('.hiddenInput').value;
        var btn = document.querySelector('.nextItem');
        var imageOne = document.querySelector('.imageOne');
        var imageTwo = document.querySelector('.imageTwo');
        var imageOneText = document.querySelector('.imageOneText');
        var imageTwoText = document.querySelector('.imageTwoText');
    </script>


@endsection
