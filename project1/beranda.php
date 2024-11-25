<?php
// Simulasi data produk
$produk = [
    ['nama' => 'Mukena silk jaguar yura', 'deskripsi' => 'mukena polos berbahan sutra adem dan lembut', 'harga' =>185000, 'gambar' => 'mukenayura.jpg'],
    ['nama' => 'Mukena katun bentol', 'deskripsi' => 'mukena berbahan katun ini sangat nyaman dan adem', 'harga' => 225000, 'gambar' => 'mukenabentol.jpg'],
    ['nama' => 'Mukena new jaguar motif', 'deskripsi' => 'mukena ini terbuat dari bahan silk uragiri yang memberikan kenyamanan saat digunakan', 'harga' => 215000, 'gambar' => 'mukenanew.jpg'],
    ['nama' => 'Mukena silk uragiri renda', 'deskripsi' => 'mukena 2in1 dengan model pinguin dan kalunng dibawahnya terbuat dari bahan silk rubia yang adem dan lembut', 'harga' => 235000, 'gambar' => 'mukenapinguin.jpg'],
];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_beranda.css"> <!-- Menghubungkan file CSS -->
    <title>Beranda Toko Online</title>
</head>
<body>
    <div class="container">
        <header>
            <h1>Selamat Datang di Nooriscollection</h1>
            <nav>
                <ul>
                    <li><a href="beranda.php">Beranda</a></li>
                    <li><a href="produk.php">produk</a></li>
                    <li><a href="#">Pesanan</a></li>
                    <li><a href="#">Pelanggan</a></li>
                    <li><a href="#">Laporan</a></li>
                    <li><a href="#">Pengaturan</a></li>
                    <li><a href="#">Logout</a></li>
                </ul>
            </nav>
        </header>

        <main>
            <section class="produk">
                <h2>Produk Terbaru</h2>
                <div class="produk-list">
                    <?php foreach ($produk as $item): ?>
                    <div class="produk-item">
                        <img src="<?php echo $item['gambar']; ?>" alt="<?php echo $item['nama']; ?>">
                        <h3><?php echo $item['nama']; ?></h3>
                        <p><?php echo $item['deskripsi']; ?></p>
                        <p>Harga: Rp <?php echo number_format($item['harga'], 0, ',', '.'); ?></p>
                        <button>Beli Sekarang</button>
                    </div>
                    <?php endforeach; ?>
                </div>
            </section>
        </main>

        <footer>
            <p>Informasi Kontak Toko | Kebijakan Privasi | Syarat dan Ketentuan</p>
        </footer>
    </div>
</body>
</html>