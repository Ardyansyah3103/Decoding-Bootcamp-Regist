<?php
include("config.php");

// Jika tidak ada id di query string
if( !isset($_GET['id']) ){
    header('Location: list_peserta.php');
}

// Ambil id dari query string
$id = $_GET['id'];

// Buat query untuk ambil data dari database
$sql = "SELECT * FROM calon_peserta_bc WHERE id=$id";
$query = mysqli_query($koneksi, $sql);
$calon_peserta_bc = mysqli_fetch_assoc($query);

// Jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Form Edit Pendaftaran Bootcamp</title>
    <style>
        * {
        font-family: "Inter", serif;
        font-optical-sizing: auto;
        font-weight: 400;
        font-style: normal;
        }

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
        }

        .container {
            display: flex;
            flex-direction: row;
            height: 100vh;
            padding: 20px;
        }

        .form-container {
            background-color: #ffffff;
            border-radius: 0;
            box-shadow: none;
            padding: 50px 50px 70px;
            width: 50%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            margin-bottom: 20px;
        }

        .form-container h1 {
            text-align: center;
            font-size: 20px;
            margin-bottom: 30px;
            color: #333333;
        }

        .form-container .form-group {
            margin-bottom: 15px;
        }

        .form-container label {
            display: block;
            margin-bottom: 5px;
            font-size: 14px;
            font-weight: bold;
            color: black;
        }

        .form-container input,
        .form-container select {
            width: 100%;
            padding: 10px;
            border: 1px solid #cccccc;
            border-radius: 5px;
            font-size: 14px;
        }

        .form-container input::placeholder {
            color: #aaaaaa;
        }

        .form-container input[type="file"] {
            border: none;
        }

        .form-container button {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #007bff;
            color: #ffffff;
            font-size: 16px;
            cursor: pointer;
        }

        .form-container button:hover {
            background-color: #0056b3;
        }

        .image-container {
            width: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #f0f0f0;
        }

        .image-container img {
            width: 80%;
            height: auto;
        }

        .form-header {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-bottom: 20px;
        }

        .form-header img {
            width: 100px;
            height: auto;
            margin-bottom: 10px;
        }

        .form-header h1 {
            font-size: 24px;
            font-weight: bold;
            color: #333333;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="form-container">
            <div class="form-header">
                <img src="Images/logo.png" alt="Logo">
                <h1>Form Edit Pendaftaran Peserta Bootcamp</h1>
            </div>
        <form action="prosesEdit.php" method="post" enctype="multipart/form-data">
            <input type="hidden" id="id" name="id" value="<?php echo $id; ?>">
            <div class="form-group">
                <label for="nama">Nama Lengkap :</label>
                <input type="text" id="nama" name="nama" placeholder="Enter your full name.." value="<?php echo $calon_peserta_bc['nama'] ?>" required>
            </div>
            <div class="form-group">
                <label for="email">Email :</label>
                <input type="email" id="email" name="email" placeholder="info@xyz.com" value="<?php echo $calon_peserta_bc['email'] ?>" required>
            </div>
            <div class="form-group">
                <label for="no_telepon">No. Telp :</label>
                <input type="tel" id="no_telepon" name="no_telepon" placeholder="+62XXXXXXXXXXX" value="<?php echo $calon_peserta_bc['no_telepon'] ?>" required>
            </div>
            <div class="form-group">
                <label for="bootcamp">Bootcamp :</label>
                <select id="bootcamp" name="bootcamp" required>
                    <option value="">Pilih Bootcamp</option>
                    <option <?php echo ($calon_peserta_bc['bootcamp'] == 'Web Development') ? "selected" : "" ?>>Web Development</option>
                    <option <?php echo ($calon_peserta_bc['bootcamp'] == 'Data Science & Analytics') ? "selected" : "" ?>>Data Science & Analytics</option>
                    <option <?php echo ($calon_peserta_bc['bootcamp'] == 'UI/UX Design') ? "selected" : "" ?>>UI/UX Design</option>
                    <option <?php echo ($calon_peserta_bc['bootcamp'] == 'Mobile App Development') ? "selected" : "" ?>>Mobile App Development</option>
                    <option <?php echo ($calon_peserta_bc['bootcamp'] == 'Game Development') ? "selected" : "" ?>>Game Development</option>
                    <option <?php echo ($calon_peserta_bc['bootcamp'] == 'Software Engineering') ? "selected" : "" ?>>Software Engineering</option>
                    <option <?php echo ($calon_peserta_bc['bootcamp'] == 'Cybersecurity') ? "selected" : "" ?>>Cybersecurity</option>
                    <option <?php echo ($calon_peserta_bc['bootcamp'] == 'AI & Machine Learning') ? "selected" : "" ?>>AI & Machine Learning</option>
                    <option <?php echo ($calon_peserta_bc['bootcamp'] == 'Digital Marketing') ? "selected" : "" ?>>Digital Marketing</option>
                </select>
            </div>
            <div class="form-group">
                <?php echo "<td><img src='uploads/".$calon_peserta_bc['foto']."' width='150' height='150'></td>"; ?>
                <label for="foto">Foto (1:1) :</label>
                <input type="file" id="foto" name="foto">
            </div>
            <button type="submit" name="simpan">Simpan</button>
        </form>

        </div>
        <div class="image-container">
            <img src="Images/kanan.png" alt="Illustration">
        </div>
    </div>
</body>

</html>