@extends('layouts.layout')

@section('content')

<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/donor.css') }}">
</head>

<div class="container1">
    <h1>Donor Sekarang untuk Pasien Thalassemia</h1>
    <p>
        Thalassemia adalah kondisi medis yang membutuhkan transfusi darah secara rutin bagi sebagian pasien. 
        Dengan mendonorkan darah, kamu dapat membantu pasien thalassemia untuk menjalani hidup yang lebih baik.
    </p>

    <h2>Mengapa Donasi Darah Penting?</h2>
    <p>
        Pasien thalassemia sering mengalami anemia berat karena tubuh mereka tidak mampu memproduksi cukup sel darah merah sehat. 
        Transfusi darah rutin membantu menggantikan sel darah merah yang hilang dan memastikan tubuh mereka mendapatkan oksigen yang cukup.
    </p>

    <h3>Kriteria Donor Darah</h3>
    <p>Berikut adalah kriteria umum untuk menjadi donor darah:</p>
    <ul>
        <li><b>Usia:</b> Pendonor harus berusia antara 17 hingga 65 tahun.</li>
        <li><b>Berat badan:</b> Minimal berat badan adalah 45 kg.</li>
        <li><b>Kesehatan:</b> Harus dalam kondisi sehat secara fisik dan mental, tidak sedang demam, batuk, pilek, atau memiliki penyakit serius.</li>
        <li><b>Tekanan darah:</b> Tekanan darah normal saat diperiksa, umumnya di kisaran 100-160 mmHg (sistolik) dan 60-100 mmHg (diastolik).</li>
        <li><b>Hemoglobin (Hb):</b> Kadar hemoglobin harus sesuai dengan standar, biasanya minimal 12,5 g/dL untuk perempuan dan 13,0 g/dL untuk laki-laki.</li>
        <li><b>Jarak donor:</b> Ada jeda minimal 12 minggu (3 bulan) antara donor darah penuh satu dengan yang berikutnya.</li>
        <li><b>Tidak sedang hamil atau menyusui:</b> Untuk perempuan, tidak boleh mendonorkan darah selama hamil atau dalam periode menyusui.</li>
        <li><b>Tidak mengonsumsi obat-obatan tertentu:</b> Beberapa obat dapat memengaruhi kualitas darah yang didonorkan.</li>
    </ul>

    <h3>Bagaimana Cara Berdonasi?</h3>
    <p>
        Kamu bisa melakukan donor darah di rumah sakit atau pusat donor darah terdekat. 
        Pastikan kamu membawa kartu identitas dan dalam kondisi sehat saat datang ke tempat donor.
    </p>

    <h2>Lokasi Donor Darah</h2>
    <p>Berikut adalah beberapa lokasi donor darah yang dapat kamu kunjungi:</p>
    <ul>
        <li>RSUP Dr Kariadi - Jl. DR. Sutomo No.16, Randusari, Kec. Semarang Sel., Kota Semarang, Jawa Tengah 50244</li>
        <li>SMK Negeri 9 Semarang - Jl. Peterongansari No.2, Peterongan, Kec. Semarang Sel., Kota Semarang, Jawa Tengah 50242</li>
    </ul>

    <h2>Daftar Sebagai Donor</h2>
    <p>
        Jika kamu memenuhi kriteria di atas dan ingin membantu pasien thalassemia, kamu dapat mendaftar sebagai donor darah. 
        Isi formulir di bawah ini untuk mendaftar.
    </p>

    <!-- Form Pendaftaran Donor -->
    <form action="{{ route('welcome') }}" method="POST">
        @csrf
        <h2>Isi Formulir Langsung</h2>
        <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSf_OiGd8W9mLzQLQ9sXrDMyrD1MFfCzR-yMcDZGTDMS8aAe7A/viewform?embedded=true" 
                width="100%" 
                height="1000" 
                frameborder="0" 
                marginheight="0" 
                marginwidth="0">
            Loading…
        </iframe>
    </form>
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
