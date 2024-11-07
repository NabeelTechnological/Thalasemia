<!-- resources/views/home.blade.php -->

@extends('layouts.layout')

@section('title', 'Home')

@section('content')
    <head>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    </head>
    <section class="hero">
        <div class="container">
            <h2>Dengan mendonor maka kalian membantu orang-orang yang membutuhkan.</h2>
            <p>Ayo bergabung di sini, Donor darah ke orang yang membutuhkan!</p>
            <a href="/donor" class="btn">Memulai Donor Darah</a>
            
            <!-- Spasi yang tidak perlu telah dihapus -->
            
            <!-- Tambahkan gambar di kanan atas -->
            <img src="{{ asset('css/darah.png') }}" class="image-top-right" alt="Gambar kanan atas">
            <!-- Tambahkan gambar di kiri bawah -->
            <img src="{{ asset('css/donor2.jpg') }}" class="image-bottom-left" alt="Gambar kiri bawah">
        </div>
    </section>

    <section class="features">
        <div class="container">
            <h2>Kenapa harus donor darah untuk Thalasemia?</h2>
            <div class="feature-item">
                <h3>Menyehatkan Jantung</h3>
                <p>Donor darah membantu mengurangi risiko penyakit jantung dan stroke.</p>
            </div>
            <div class="feature-item">
                <h3>Kurangi Risiko Kanker</h3>
                <p>Menurunkan kadar zat besi berlebihan yang terkait dengan kanker.</p>
            </div>
            <div class="feature-item">
                <h3>Deteksi Dini Penyakit</h3>
                <p>Tes kesehatan sebelum donor membantu mendeteksi penyakit lebih cepat.</p>
            </div>
        </div>
    </section>
    <div class="whatsapp-container">
        <a href="https://wa.me/6287866885151?text=Halo, saya ingin bertanya" class="whatsapp-float" target="_blank">
            <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp" style="width:50px;height:50px;">
        </a>
        <div class="whatsapp-tooltip">Chat Sekarang</div>
        <div class="whatsapp-window">Jika ada bantuan, chat di sini</div>
    </div>

@endsection
