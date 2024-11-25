<?php
session_start();

// Memeriksa apakah pengguna sudah login
if (!isset($_SESSION['username'])) {
    header("Location: login.php"); // Arahkan ke halaman login jika belum login
    exit();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</body>
</html>
<?php
// Simulasi data untuk dashboard
$total_penjualan = 2000; // Total penjualan bulan ini
$total_pesanan = 1500; // Total pesanan
$total_pelanggan = 4000; // Total pelanggan
$produk_terlaris = "Mukena Silk Jaguar yura"; // Nama produk terlaris
$jumlah_terjual = 75; // Jumlah produk terlaris
$stok_rendah = "Mukena Silk Uragiri"; // Nama produk dengan stok rendah
$jumlah_stok = 5; // Jumlah stok rendah
$pesanan_terbaru = [
    ['nama' => 'adam', 'tanggal' => '01-10-2024', 'status' => 'Baru', 'total' => 'Rp.20.000'],
    ['nama' => 'raifi', 'tanggal' => '07-10-2024', 'status' => 'Dikirim', 'total' => 'Rp.20.000'],
    ['nama' => 'silvi', 'tanggal' => '09-10-2024', 'status' => 'Selesai', 'total' => 'Rp.20.000'],
];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Dashboard Toko Online</title>
</head>
<body>
    <div class="container">
        <header>
            <h1>Nooriscollection</h1>
            <nav>
                <ul>
                    <li><a href="beranda.php">beranda</a></li>
                    <li><a href="Produk.php">Produk</a></li>
                    <li><a href="Pesanan">Pesanan</a></li>
                    <li><a href="Pelanggan">Pelanggan</a></li>
                    <li><a href="Laporan.php">Laporan</a></li>
                    <li><a href="Pengaturan.php">Pengaturan</a></li>
                    </li><a href="logout.php">Logout</a>

                </ul>
            </nav>
        </header>

        <main>
            <section class="summary">
                <h2>Ringkasan Penjualan</h2>
                <p>Total Penjualan Bulan Ini: <?php echo $total_penjualan; ?></p>
                <p>Total Pesanan: <?php echo $total_pesanan; ?></p>
                <p>Total Pelanggan: <?php echo $total_pelanggan; ?></p>
            </section>

            <section class="statistics">
                <h2>Statistik Produk</h2>
                <p>Produk Terlaris: <?php echo $produk_terlaris; ?> - <?php echo $jumlah_terjual; ?> Terjual</p>
                <p>Stok Produk Rendah: <?php echo $stok_rendah; ?> - <?php echo $jumlah_stok; ?> Tersisa</p>
            </section>

            <section class="latest-orders">
                <h2>Daftar Pesanan Terbaru</h2>
                <table>
                    <tr>
                        <th>No</th>
                        <th>Nama Pelanggan</th>
                        <th>Tanggal Pesanan</th>
                        <th>Status</th>
                        <th>Total</th>
                    </tr>
                    <?php foreach ($pesanan_terbaru as $index => $pesanan): ?>
                    <tr>
                        <td><?php echo $index + 1; ?></td>
                        <td><?php echo $pesanan['nama']; ?></td>
                        <td><?php echo $pesanan['tanggal']; ?></td>
                        <td><?php echo $pesanan['status']; ?></td>
                        <td><?php echo $pesanan['total']; ?></td>
                    </tr>
                    <?php endforeach; ?>
                </table>
            </section>
        </main>

        <footer>
            <p>Informasi Kontak Toko | Kebijakan Privasi | Syarat dan Ketentuan</p>
        </footer>
    </div>
</body>
</html>
