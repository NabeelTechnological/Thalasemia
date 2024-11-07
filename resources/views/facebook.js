function adjustImagePosition() {
    // Mendapatkan ukuran jendela saat ini
    const windowWidth = window.innerWidth;
    const windowHeight = window.innerHeight;

    // Elemen gambar
    const imageTopRight = document.querySelector('.image-top-right');
    const imageBottomLeft = document.querySelector('.image-bottom-left');

    // Menyesuaikan posisi berdasarkan ukuran jendela
    if (imageTopRight) {
        imageTopRight.style.left = (windowWidth * 0.17) + 'px'; // 17% dari lebar viewport
        imageTopRight.style.top = (windowHeight * 0.15) + 'px'; // 15% dari tinggi viewport
    }

    if (imageBottomLeft) {
        imageBottomLeft.style.left = (windowWidth * 0.52) + 'px'; // 52% dari lebar viewport
        imageBottomLeft.style.bottom = (windowHeight * 0.10) + 'px'; // 10% dari tinggi viewport
    }
}

// Memanggil fungsi saat halaman dimuat pertama kali
window.onload = adjustImagePosition;

// Memanggil fungsi saat ukuran jendela berubah
window.onresize = adjustImagePosition;