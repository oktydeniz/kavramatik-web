@extends('front.mainpage')
@section('js_area')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
@endsection
@section('content')

    <div class="container mt-2">

        <div class="row">
            @foreach ($data as $item)
                <div class="col-md-3 col-sm-6 mt-5">
                    <div class="card card-block bg_bg ">
                        <img class="color_clicked" text="{{ $item->color_name }}"
                            src="data:image/jpeg;base64,{{ base64_encode($item->color_image) }}"
                            alt="{{ $item->color_name }}">
                        <h5 class="card-title mt-3 mb-3 category_text">{{ $item->color_name }}</h5>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <script>
    var image = document.getElementsByClassName("color_clicked");
    var row = document.getElementsByClassName('col-md-3 col-sm-6');

    function clickfunction(dd) {
        console.log(dd);
    }
   /* for (i = 0; i < image.length; i++) {
        clickfunction(image[i].attributes.alt.value);
        image[i].onclick = function() {
            console.log(i);
            
           
        };

    }*/
    
</script>
@endsection
