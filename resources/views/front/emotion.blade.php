@extends('front.mainpage')
@section('js_area')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
@endsection
@section('content')

    <div class="container mt-2">

        <div class="row">
            @foreach ($data as $item)
                <div class="col-md-3 col-sm-6 ">
                    <div class="card card-block bg_bg mt-3 "  style="width: 250px;height:400px;">
                        <img class="color_clicked" 
                            src="data:image/jpeg;base64,{{ base64_encode($item->emotion_image) }}"
                            alt="{{ $item->emotion_name }}">
                        <h5 class="card-title mt-3 mb-3 category_text">{{ $item->emotion_name }}</h5>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
