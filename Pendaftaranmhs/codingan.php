<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi Mahasiswa Baru</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #0072ff, #00c6ff);
            margin: 0;
            padding: 0;
        }
        .container {
            width: 50%;
            margin: 50px auto;
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
        }
        h2 {
            margin-top: 20px;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        label { 
            margin: 10px 0 5px;
        }
        input, select {
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 4px;
            border: 1px solid #ccc;
        }
        button {
            padding: 10px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Formulir Registrasi Mahasiswa Baru</h1><br>
    <h2>Informasi Pribadi</h2>
    <form action="hasil registrasi.php" method="post">
        <label for="nama">Nama Lengkap:</label>
        <input type="text" id="nama" name="nama" required>

        <label for="nomor_hp">Nomor Handphone:</label>
        <input type="text" id="nomor_hp" name="nomor_hp" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="alamat">Alamat:</label>
        <input type="text" id="alamat" name="alamat" required>

        <label for="tanggal_lahir">Tanggal Lahir:</label>
        <input type="date" id="tanggal_lahir" name="tanggal_lahir" required>

        <label for="jenis_kelamin">Jenis Kelamin:</label>
        <select id="jenis_kelamin" name="jenis_kelamin" required>
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
        </select>

        <label for="jurusan">Jurusan:</label>
		<select id="jurusan" name="jurusan" required>
		    <option value="Teknik Informatika">Teknik Informatika</option>
			<option value="Teknik Mesin">Teknik Mesin</option>
			</select> <br>

        <button type="submit">Daftar</button>
    </form><br><br>
</div>
</body>
</html>