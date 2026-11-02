
<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PetCare - Beranda</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <h1>🐾 PetCare</h1>
        <p>Layanan Perawatan Hewan Peliharaan</p>
    </header>

    <main>
        <section class="welcome">
            <h2>Selamat Datang di PetCare!</h2>
            <p>
                Tempat terbaik untuk merawat dan menjaga
                hewan kesayangan Anda.
            </p>
        </section>

        <section class="menu">
            <h2>Menu Utama</h2>

            <div class="menu-container">

                <a href="users/index.php">
                    Data Pengguna
                </a>

                <a href="pets/index.php">
                    Data Hewan
                </a>

                <a href="service_categories/index.php">
                    Kategori Layanan
                </a>

                <a href="services/index.php">
                    Daftar Layanan
                </a>

                <a href="orders/index.php">
                    Pesanan
                </a>

                <a href="payments/index.php">
                    Pembayaran
                </a>

            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2026 PetCare. Semua Hak Dilindungi.</p>
    </footer>

</body>
</html>

