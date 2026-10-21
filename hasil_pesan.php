<?php
$nama = $_POST["nama"];
$kelas = $_POST["kelas"];
$pesan = $_POST["pesan"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Pesan</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f6fa;
        margin: 0;
        padding: 30px;
        color: #111;
    }

    .container {
        max-width: 700px;
        margin: 0 auto;
        padding: 24px;
        background-color: white;
        border-radius: 12px;
        box-shadow: 0 4px 18px rgba(0, 0, 0, 0.08);
    }

    h3 {
        font-size: 25px;
        margin: 15px 0 20px;
    }

    .ucapan {
        font-size: 16px;
        margin-bottom: 20px;
        color: #333;
    }

    .detail-item {
        background-color: #f7f9fe;
        padding: 12px;
        margin-bottom: 12px;
        font-size: 16px;
        line-height: 1.5;
        overflow-wrap: anywhere;
    }

    .btn-detail {
        display: inline-block;
        background-color: #0d6efd;
        color: white;
        padding: 8px 13px;
        text-decoration: none;
        border-radius: 6px;
        font-size: 15px;
    }
</style>
</head>
<body>
<div class="container">
    <h3>Hasil Pesan Mahasiswa</h3>
        <p class="ucapan">Terima kasih, <strong><?= $nama; ?></strong>!</p>
    <div class="detail-item">
        <strong>Nama:</strong> <?= $nama; ?>
    </div>
        <div class="detail-item">
            <strong>Kelas:</strong> <?= $kelas; ?>
        </div>
        <div class="detail-item">
            <strong>Pesan / Kesan:</strong> <?= $pesan; ?>
        </div>
        <br>
        <a href="halaman_daftar_mahasiswa.php"
           class="btn-detail">
            Kembali ke Data Mahasiswa
        </a>
    </div>
</body>
</html>