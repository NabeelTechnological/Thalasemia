<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>THALASEMIA</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
<header>
    <div class="container">
        <h1>Thalasemia</h1>
        <div class="menu-toggle" id="menu-toggle">&#x2630;</div> <!-- Icon titik tiga -->
        <nav>
            <ul id="menu">
                <li><a href="{{ route('welcome') }}">Beranda</a></li>
                <li><a href="/donor">Donor Sekarang</a></li>
                <li><a href="/ulasan">Tambah Ulasan Anda</a></li>
                <li><a href="/rangking">Rangking Pendonor</a></li>
            </ul>
        </nav>
    </div>
</header>

    @yield('content')

    <footer>
        <div class="container">
            <p>&copy; Thalasemia Website 2024.</p>
        </div>
    </footer>
    <script>
    // Function untuk toggle menu
    function toggleMenu() {
        const menu = document.getElementById('menu'); // Ambil menu

        // Tambah/hapus class 'active' untuk tampilkan/sembunyikan menu
        if (menu.classList.contains('active')) {
            menu.classList.remove('active'); // Sembunyikan menu
        } else {
            menu.classList.add('active'); // Tampilkan menu
        }
    }

    // Ambil ikon toggle dan pasang event listener untuk click
    const menuToggle = document.getElementById('menu-toggle');
    menuToggle.addEventListener('click', toggleMenu);
</script>
</body>
</html>
