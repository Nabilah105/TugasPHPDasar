<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pesan Mahasiswa</title>
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

    .form-group {
        margin-bottom: 16px;
    }

    label {
        display: block;
        font-size: 15px;
        font-weight: bold;
        margin-bottom: 7px;
    }

    input, textarea {
        width: 100%;
        box-sizing: border-box;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-family: Arial, sans-serif;
        font-size: 15px;
    }

    textarea {
        min-height: 100px;
        resize: vertical;
    }

    .btn-detail {
        display: inline-block;
        background-color: #0d6efd;
        color: white;
        padding: 10px 16px;
        text-decoration: none;
        border: none;
        border-radius: 6px;
        font-size: 17px;
        cursor: pointer;
    }

    .btn-kembali {
        display: inline-block;
        background-color: #6c757d;
        color: white;
        padding: 10px 16px;
        text-decoration: none;
        border-radius: 6px;
        font-size: 17px;
    }

    .btn-detail:hover {
        background-color: #0b5ed7;
    }

    .btn-kembali:hover {
        background-color: #5c636a;
    }
</style>
</head>
<body>
    <div class="container">
        <h3>Form Pesan Mahasiswa</h3>
        <form action="hasil_pesan.php" method="post">
            <div class="form-group">
                <label>Nama:</label>
                <input type="text" name="nama">
            </div>
            <div class="form-group">
                <label>Kelas:</label>
                <input type="text" name="kelas">
            </div>
            <div class="form-group">
                <label>Pesan / Kesan:</label>
                <textarea name="pesan"></textarea>
            </div>
            <button type="submit" class="btn-detail">
                Kirim
            </button>
        </form>
        <br>
        <a href="halaman_daftar_mahasiswa.php"
           class="btn-kembali">
            Kembali
        </a>
    </div>
</body>
</html>