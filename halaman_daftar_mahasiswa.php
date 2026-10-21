<?php

$mahasiswa = [
[
"nim" => "2508920",
"nama" => "Putri Ayu Nabilah",
"jurusan" => "Pendidikan Sistem dan Teknologi Informasi",
"email" => "Bila@upi.edu",
"nilai" => 88
],

[
"nim" => "2577801",
"nama" => "Muhammad Salman Alfarizie",
"jurusan" => "Sistem Telekomunikasi",
"email" => "salman@upi.edu",
"nilai" => 76
],

[
"nim" => "2511256",
"nama" => "Wulan Dwi Maharani",
"jurusan" => "Mekatronika dan Kecerdasan Buatan",
"email" => "ulan@upi.edu",
"nilai" => 67
],

[
"nim" => "2545629",
"nama" => "Naysilla Putri Aisa",
"jurusan" => "Pendidikan Sistem dan Teknologi Informasi",
"email" => "naysilla.24@upi.edu",
"nilai" => 92
],

[
"nim" => "2505348",
"nama" => "Nayla Putri",
"jurusan" => "Sistem Telekomunikasi",
"email" => "nayla@upi.edu",
"nilai" => 58
],

];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
<style>
      
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f6fa;
        margin: 0;
        padding: 40px;
        color: #111;
    }

    .container {
        max-width: 1350px;
        margin: 0 auto;
        padding: 24px;
        background-color: white;
        border-radius: 15px;
        box-shadow: 0 4px 18px rgba(0, 0, 0, 0.08);
    }

    .header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 28px;
    }

    h3 {
        font-size: 28px;
        margin: 0 0 20px;
    }

    p {
        font-size: 18px;
        margin: 0;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        background-color: white;
    }

    th, td {
    padding: 10px;
    text-align: left;
    font-size: 16px;
    }

    th {
        background-color: #edf3ff;
    }

    tr:nth-child(even) {
        background-color: #fafbfe;
    }

    .btn-detail {
        display: inline-block;
        background-color: #0d6efd;
        color: white;
        padding: 10px 16px;
        text-decoration: none;
        border-radius: 6px;
        font-size: 17px;
        border: none;
        cursor: pointer;
    }

    .lulus {
        color: green;
        font-weight: bold;
    }

    .tidak-lulus {
        color: red;
        font-weight: bold;
    }

</style>
</head>
<body>

<div class="container">
    <div class="header">
        <div>
            <h3>Daftar Mahasiswa</h3>
            <p>Mini Website PHP Dasar</p>
        </div>

        <a href="form_pesan.php" class="btn-detail">
            Isi Form Pesan
        </a>
    </div>

<table>
        <thead>
            <tr>
                <th>No.</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Jurusan</th>
                <th>Nilai</th>
                <th>Grade</th>
                <th>Status</th>
                <th>Detail</th>
            </tr>
        </thead>
        <tbody>
         <?php $no = 1; ?>
            <?php foreach($mahasiswa as $data): ?>
            <?php 

            $nilai= $data["nilai"];
                if ($nilai >=80) {
                    $grade = "A";
                } elseif ($nilai >=70) {
                    $grade = "B";
                } elseif ($nilai >=60) {
                    $grade = "C";
                } else {
                    $grade = "D";
                }
            ?>

            <?php 
                if ($nilai >=70) {
                    $status = "Lulus";
                } else {
                    $status = "Tidak Lulus";
                }
            ?>

            <tr>
                <td><?= $no++; ?></td>
                <td><?= $data["nim"]; ?></td>
                <td><?= $data["nama"]; ?></td>
                <td><?= $data["jurusan"]; ?></td>
                <td><?= $data["nilai"]; ?></td>
                <td><?= $grade ?></td> 
                <td class="<?= $status == 'Lulus' ? 'lulus' : 'tidak-lulus' ?>"><?= $status ?></td>  
                <td>
                    <a class="btn-detail" href="detail.php?nim=<?= $data['nim'] ?>&nama=<?= $data['nama'] ?>&jurusan=<?= $data['jurusan'] ?>&email=<?= $data['email'] ?>&nilai=<?= $nilai ?>&grade=<?= $grade ?>&status=<?= $status ?>">
                        Lihat Detail
                    </a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    
</body>
</html>