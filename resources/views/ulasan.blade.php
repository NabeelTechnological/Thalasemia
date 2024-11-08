@extends('layouts.layout')

@section('content')
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/ulasan.css') }}">
    
</head>
<body>
    <div class="review-container">
        <h1 class="title">Ulasan Anda</h1>
        <p class="description">Kami menghargai pendapat Anda! Berikan ulasan atau saran untuk membantu kami meningkatkan layanan kami.</p>
            <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v20.0" nonce="tvyEOCTV"></script>
<div class="fb-comments" data-href="http://127.0.0.1:8000/ulasan" data-width="" data-numposts="5"></div>
    </div>

    </section>
    <script src="facebook.js"></script>
</body>
</html>


@endsection