<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_pengaturan.css"> <!-- Menghubungkan file CSS -->
    <title>Pengaturan Toko</title>
</head>
<body>
    <div class="container">
        <header>
            <h1>Pengaturan Toko</h1>
            <nav>
                <ul>
                    <li><a href="dashboard.php">dashboard</a></li>
                    <li><a href="beranda.php">Beranda</a></li>
                    <li><a href="tambah_produk.php">Tambah Produk</a></li>
                    <li><a href="#">Pesanan</a></li>
                    <li><a href="#">Pelanggan</a></li>
                    <li><a href="#">Laporan</a></li>
                    <li><a href="pengaturan.php">Pengaturan</a></li>
                    <li><a href="#">Logout</a></li>
                </ul>
            </nav>
        </header>

        <main>
            <h2>Informasi Toko</h2>
            <form action="proses_pengaturan.php" method="POST">
                <div class="form-group">
                    <label for="nama_toko">Nama Toko:</label>
                    <input type="text" id="Nooriscollection" name="Nooriscollection" required>
                </div>
                <div class="form-group">
                    <label for="alamat_toko">Alamat Toko:</label>
                    <textarea id="Tasikmalaya" name="Tasikmalaya" required></textarea>
                </div>
                <div class="form-group">
                    <label for="nomor_telepon">Nomor Telepon:</label>
                    <input type="text" id="08522190730" name="085221920730" required>
                </div>
                <div class="form-group">
                    <label for="email_toko">Email Toko:</label>
                    <input type="email" id="Nooriscollection@gmail.com" name="Nooriscollection@gmail.com" required>
                </div>
                <button type="submit">Simpan Pengaturan</button>
            </form>

            <h2>Ubah Kata Sandi</h2>
            <form action="proses_ubah_password.php" method="POST">
                <div class="form-group">
                    <label for="password_lama">Kata Sandi Lama:</label>
                    <input type="password" id="29032002" name="29032002" required>
                </div>
                <div class="form-group">
                    <label for="password_baru">Kata Sandi Baru:</label>
                    <input type="password" id="29032002" name="29032002" required>
                </div>
                <div class="form-group">
                    <label for="konfirmasi_password">Konfirmasi Kata Sandi Baru:</label>
                    <input type="password" id="29032002" name="29032002" required>
                </div>
                <button type="submit">Ubah Kata Sandi</button>
            </form>
        </main>

        <footer>
            <p>Informasi Kontak Toko | Kebijakan Privasi | Syarat dan Ketentuan</p>
        </footer>
    </div>
</body>
</html>