@extends('layouts.layout')

@section('content')
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/rangking.css') }}">
</head>
<body>
    <div class="ranking-container">
        <h1 class="title">Ranking Pendonor Darah</h1>
        <p class="description">Terima kasih kepada para pendonor yang telah menyumbangkan darah mereka untuk membantu pasien thalassemia. Berikut adalah peringkat pendonor dengan jumlah donasi terbanyak.</p>
    </div>

    </section>
    <div class="whatsapp-container">
        <a href="https://wa.me/6287866885151?text=Halo, saya ingin bertanya" class="whatsapp-float" target="_blank">
            <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp" style="width:50px;height:50px;">
        </a>
        <div class="whatsapp-tooltip">Chat Sekarang</div>
        <div class="whatsapp-window">Jika ada bantuan, chat di sini</div>
    </div>
</body>
</html>


@endsection