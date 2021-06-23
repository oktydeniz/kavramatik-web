<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Kavramatik </title>
    <!-- Fonts -->
    <link rel="shortcut icon" href="{{ asset('images/logo.png') }}">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Styles -->


    <style>
        body {
            background-color: #ECECEC;
            font-family: 'Nunito', sans-serif;
        }

        .main-header {
            background-color: #707070;
            border-radius: 0px 0px 50px 50px;

        }

        .main-header img {
            margin: auto;
            display: block;
            padding-bottom: 15px;
        }

        .main-area {
            display: flex;
        }

        .image {
            flex-grow: 2;
        }

        .info {
            flex-grow: 1;
        }

        .lets_play {
            position: fixed;
            bottom: 0px;
            left: 0px;
        }

        .education {
            display: flex;
            justify-content: space-around;
        }

        .items {
            flex-grow: 4;
        }

        .eduimages {
            width: 300px;
            height: 250px;

        }

        @media only screen and (max-width: 997px) {
            body {
                background-color: lightblue;
            }

            .main-area {
                display: flex;
                flex-direction: column;
            }
        }

        .image-cc {
            height: 180px;
            width: 90%;
        }
        .bg_bg{
            background-color: #D4F3F0;
        }

        div [class^="col-"] {
            padding-left: 5px;
            padding-right: 5px;
        }

        .card {
            transition: 0.5s;
            cursor: pointer;
        }
        .category_text{
            text-align: center;
            font-size: 22px;
        }

        .card-title {
            font-size: 15px;
            transition: 1s;
            cursor: pointer;
        }

        .card-title i {
            font-size: 15px;
            transition: 1s;
            cursor: pointer;
            color: #ffa710
        }

        .card-title i:hover {
            transform: scale(1.25) rotate(100deg);
            color: #18d4ca;

        }

        .card:hover {
            transform: scale(1.05);
            box-shadow: 10px 10px 15px rgba(0, 0, 0, 0.3);
        }

        .card-text {
            height: 80px;
        }

        .card::before,
        .card::after {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            transform: scale3d(0, 0, 1);
            transition: transform .3s ease-out 0s;
            background: rgba(255, 255, 255, 0.1);
            content: '';
            pointer-events: none;
        }

        .card::before {
            transform-origin: left top;
        }

        .card::after {
            transform-origin: right bottom;
        }

        .card:hover::before,
        .card:hover::after,
        .card:focus::before,
        .card:focus::after {
            transform: scale3d(1, 1, 1);
        }

    </style>
</head>

<body class="antialiased">

    <header>
        <nav class="main-header">
            <img src="{{ asset('images/nav_top.png') }}" alt="kavramatik">
        </nav>
    </header>
</body>

<div class="mt-10"></div>
<div class="container mt-2">
    
    <div class="row">
        <div class="col-md-3 col-sm-6">
            <div class="card card-block bg_bg ">
                <img class="image-cc" src="data:image/jpeg;base64,{{ base64_encode($table[0]->category_image) }}"
                    alt="{{ $table[0]->category_name_slug }}">
                    <h5 class="card-title mt-3 mb-3 category_text">{{ $table[0]->category_name }}</h5>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 ">
            <div class="card card-block bg_bg ">
                <img class="image-cc" src="data:image/jpeg;base64,{{ base64_encode($table[1]->category_image) }}"
                    alt="{{ $table[1]->category_name_slug }}">
                    <h5 class="card-title mt-3 mb-3 category_text">{{ $table[1]->category_name }}</h5>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="card card-block bg_bg ">
                <img class="image-cc" src="data:image/jpeg;base64,{{ base64_encode($table[2]->category_image) }}"
                    alt="{{ $table[2]->category_name_slug }}">
                    <h5 class="card-title mt-3 mb-3 category_text">{{ $table[2]->category_name }}</h5>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="card card-block bg_bg ">
                <img class="image-cc" src="data:image/jpeg;base64,{{ base64_encode($table[3]->category_image) }}"
                    alt="{{ $table[3]->category_name_slug }}">
                    <h5 class="card-title mt-3 mb-3 category_text">{{ $table[3]->category_name }}</h5>
            </div>
        </div>
    </div>

</div>
<div class="container mt-2">

    <div class="row">
        <div class="col-md-3 col-sm-6">
            <div class="card card-block bg_bg ">
                <img class="image-cc" src="data:image/jpeg;base64,{{ base64_encode($table[4]->category_image) }}"
                    alt="{{ $table[4]->category_name_slug }}">
                    <h5 class="card-title mt-3 mb-3 category_text">{{ $table[4]->category_name }}</h5>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="card card-block bg_bg ">
                <img class="image-cc" src="data:image/jpeg;base64,{{ base64_encode($table[5]->category_image) }}"
                    alt="{{ $table[5]->category_name_slug }}">
                    <h5 class="card-title mt-3 mb-3 category_text">{{ $table[5]->category_name }}</h5>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="card card-block bg_bg ">
                <img class="image-cc" src="data:image/jpeg;base64,{{ base64_encode($table[6]->category_image) }}"
                    alt="{{ $table[6]->category_name_slug }}">
                    <h5 class="card-title mt-3 mb-3 category_text">{{ $table[6]->category_name }}</h5>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="card card-block bg_bg ">
                <img class="image-cc" src="data:image/jpeg;base64,{{ base64_encode($table[7]->category_image) }}"
                    alt="{{ $table[7]->category_name_slug }}">
                    <h5 class="card-title mt-3 mb-3 category_text">{{ $table[7]->category_name }}</h5>
            </div>
        </div>
    </div>
    <div class="container mt-2">

        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="card card-block bg_bg ">
                    <img class="image-cc" src="data:image/jpeg;base64,{{ base64_encode($table[8]->category_image) }}"
                        alt="{{ $table[8]->category_name_slug }}">
                    <h5 class="card-title mt-3 mb-3 category_text">{{ $table[8]->category_name }}</h5>
                </div>
            </div>
        
        </div>

</div>

</html>
