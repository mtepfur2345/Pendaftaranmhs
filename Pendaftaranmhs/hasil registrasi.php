<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Pendaftaran</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background: linear-gradient(to right, #0072ff, #00c6ff);
            padding: 20px;
        }
        .container {
            max-width: 700px;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
            margin-top: 50px;
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
            color: #777;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1><i class="fas fa-check-circle"></i> Hasil Registrasi</h1>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nama = htmlspecialchars($_POST['nama']);
            $nomor_hp = htmlspecialchars($_POST['nomor_hp']);
            $email = htmlspecialchars($_POST['email']);
            $alamat = htmlspecialchars($_POST['alamat']);
            $tanggal_lahir = htmlspecialchars($_POST['tanggal_lahir']);
            $jenis_kelamin = htmlspecialchars($_POST['jenis_kelamin']);
            $jurusan = htmlspecialchars($_POST['jurusan']);

            echo "<h2>Data Pendaftaran:</h2>";
            echo "<p><strong>Nama Lengkap:</strong> $nama</p>";
            echo "<p><strong>Nomor Handphone:</strong> $nomor_hp</p>";
            echo "<p><strong>Email:</strong> $email</p>";
            echo "<p><strong>Alamat:</strong> $alamat</p>";
            echo "<p><strong>Tanggal Lahir:</strong> $tanggal_lahir</p>";
            echo "<p><strong>Jenis Kelamin:</strong> $jenis_kelamin</p>";
            echo "<p><strong>Program Studi:</strong> $jurusan</p>";
        } else {
            echo "<p>Data tidak ditemukan. Silakan kembali ke <a href='formulir_pendaftaran_mahasiswa_baru.php'>formulir pendaftaran</a>.</p>";
        }
        ?>
        <div class="footer">
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>