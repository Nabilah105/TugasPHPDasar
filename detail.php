<?php
$nim = $_GET["nim"];
$nama = $_GET["nama"];
$jurusan = $_GET["jurusan"];
$email = $_GET["email"];
$nilai = $_GET["nilai"];
$grade = $_GET["grade"];
$status = $_GET["status"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f6fa;
        margin: 0;
        padding: 40px;
        color: #111;
    }

    .container {
    max-width: 650px;
    margin: 0 auto;
    padding: 22px;
    background-color: white;
    border-radius: 12px;
    box-shadow: 0 4px 18px rgba(0, 0, 0, 0.08);
    }

    h3 {
    font-size: 24px;
    margin: 15px 0 20px;
    }

    .detail-item {
    background-color: #f7f9fe;
    padding: 11px;
    margin-bottom: 12px;
    font-size: 16px;
    }

    .btn-detail {
        display: inline-block;
        background-color: #0d6efd;
        color: white;
        padding: 10px 16px;
        text-decoration: none;
        border-radius: 6px;
        font-size: 17px;
    }

    .btn-detail:hover {
        background-color: #0b5ed7;
    }
</style>
</head>
<body>
    <div class="container">
        <h3>Detail Mahasiswa</h3>
        <div class="detail-item">
            <strong>NIM:</strong> <?= $nim; ?>
        </div>
        <div class="detail-item">
            <strong>Nama:</strong> <?= $nama; ?>
        </div>
        <div class="detail-item">
            <strong>Jurusan:</strong> <?= $jurusan; ?>
        </div>
        <div class="detail-item">
            <strong>Email:</strong> <?= $email; ?>
        </div>
        <div class="detail-item">
            <strong>Nilai:</strong> <?= $nilai; ?>
        </div>
        <div class="detail-item">
            <strong>Grade:</strong> <?= $grade; ?>
        </div>
        <div class="detail-item">
            <strong>Status:</strong> <?= $status; ?>
        </div>

        <br>
        <a href="halaman_daftar_mahasiswa.php"
           class="btn-detail">
            Kembali
        </a>
    </div>
</body>
</html>
