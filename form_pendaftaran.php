<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran Bootcamp</title>
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
        }

        .form-container {
            background-color: #ffffff;
            border-radius: 0;
            box-shadow: none;
            padding: 50px;
            width: 50%;
            display: flex;
            flex-direction: column;
            justify-content: center;
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
            color: #555555;
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
            font-size: 18px;
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
                <h1>FORM PENDAFTARAN PESERTA BOOTCAMP</h1>
            </div>
            <form action="prosesDaftar.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="fullName">Nama Lengkap :</label>
                    <input type="text" id="nama" name="nama" placeholder="Nama lengkap ..." required>
                </div>
                <div class="form-group">
                    <label for="email">Email :</label>
                    <input type="email" id="email" name="email" placeholder="info@xyz.com" required>
                </div>
                <div class="form-group">
                    <label for="phone">No. Telp :</label>
                    <input type="tel" id="no_telepon" name="no_telepon" placeholder="+62xxxxxxxxxx" required>
                </div>
                <div class="form-group">
                    <label for="bootcamp">Bootcamp :</label>
                    <select id="bootcamp" name="bootcamp">
                        <option value="" disabled selected>Select</option>
                        <option value="Web Development">Web Development</option>
                        <option value="Data Science">Data Science</option>
                        <option value="UI/UX Design">UI/UX Design</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="photo">Foto :</label>
                    <input type="file" id="foto" name="foto">
                </div>
                <button type="submit" name="Daftar">Daftar</button>
            </form>
        </div>
        <div class="image-container">
            <img src="Images/kanan.png" alt="Illustration">
        </div>
    </div>
</body>

</html>