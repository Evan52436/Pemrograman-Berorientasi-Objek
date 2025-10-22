<?php
if(isset($_POST["submit"])){
    $nama_lengkap = $_POST["nama"];
    $tempat_tanggal_lahir = $_POST["ttl"];
    $jenis_kelamin = $_POST["jk"];
    $agama = $_POST["agama"];
    $alamat_Lengkap = $_POST["alamat"];
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form PHP</title>
    <link href="style.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <h2>FORM BIODATA</h2>
    <hr>
    <form method="post" action="">
        <label>Nama Lengkap:</label>
        <input type="text" name="nama" required>

        <label>Tempat,Tanggal Lahir:</label>
        <input type="date" name="ttl" required>

        <label>Jenis Kelamin:</label>
        <input type="radio" name="jk" value="Laki-laki" required> Laki-laki
        <input type="radio" name="jk" value="Perempuan" required> Perempuan

        <label>Alamat Lengkap:</label>
        <textarea name="alamat" rows="3" required></textarea>

        <button type="submit" name="submit">Tampilkan Hasil</button>
    </form>

    <div>
        <?php
        if(isset($_POST["submit"])){
            echo "<p>Nama Lengkap :".htmlspecialchars($nama_lengkap)."</p>";
            echo "<p>Tempat & Tanggal Lahir :".htmlspecialchars($tempat_tanggal_lahir)."</p>";
            echo "<p>Jenis Kelamin :".htmlspecialchars($jenis_kelamin)."</p>";
            echo "<p>Alamat Lengkap :".htmlspecialchars($alamat_Lengkap)."</p>";
        }

        ?>
    </div>
</div>
</body>
</html>