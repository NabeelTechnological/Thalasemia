@extends('layouts.layout')

@section('content')
<head>
    <!-- Link ke font Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/rangking.css') }}">
</head>
<body>
    <div class="ranking-container">
        <h1 class="title">Ranking Pendonor Darah</h1>
        <script src="https://sheetdb.io/s/t/yne28ped57whg.js"></script>
        <p class="description">Terima kasih kepada para pendonor yang telah menyumbangkan darah mereka untuk membantu pasien thalassemia. Berikut adalah peringkat pendonor dengan jumlah donasi terbanyak.</p>
    </div>
</body>
@endsection
