<?php include("config.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peserta Bootcamp</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
            font-family: "Inter", serif;
            font-optical-sizing: auto;
            font-weight: 400;
            font-style: normal;
        }

        body {
            display: flex;
            min-height: 100vh;
            background-color: #f8f9fa;
        }

        .sidebar {
            width: 250px;
            background-color: #007bff;
            color: #ffffff;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            overflow-y: auto;
        }

        .sidebar h1 {
            font-size: 28px;
            margin-bottom: 30px;
            color: black;
            font-weight: bold;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .sidebar h1 img {
            width: 50px;
            height: 50px;
        }

        .sidebar ul {
            list-style: none;
            width: 100%;
        }

        .sidebar ul li {
            margin-bottom: 20px;
            text-align: center;
        }

        .sidebar ul li a {
            text-decoration: none;
            color: black;
            font-size: 16px;
            padding: 10px 15px;
            display: block;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .sidebar ul li .logout-but {
            text-decoration: none;
            color: black;
            font-size: 16px;
            padding: 10px 15px;
            display: block;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .sidebar ul li a:hover {
            background-color: #3ba7ff;
        }

        .sidebar ul li a.active {
            background-color: #3ba7ff;
        }

        .sidebar ul li .logout-but:hover {
            background-color:rgb(223, 75, 75);
            color: white;
        }

        .content {
            flex: 1;
            padding: 20px;
            margin-left: 250px;
        }

        .dashboard-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            padding: 15px;
        }

        .dashboard-header h1 {
            font-weight: bold;
            font-size: 36px;
            margin-bottom: 20px;
        }

        .content h2 {
            font-size: 24px;
            margin-bottom: 20px;
            color: #333;
        }

        .content .search-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .content .search-bar input {
            padding: 10px;
            width: 300px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .content .search-bar a {
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            text-decoration: none;
        }

        .content .search-bar a:hover {
            background-color:rgb(6, 86, 172);
            color: white;
        }

        .content table {
            width: 100%;
            border-collapse: collapse;
            background: #ffffff;
            border-radius: 5px;
            overflow: hidden;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .content th, .content td {
            padding: 15px;
            text-align: left;
        }

        .content th {
            background-color: #007bff;
            color: #ffffff;
            border-bottom: 2px solid #0056b3;
        }

        .content tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .content tr:hover {
            background-color: #e9f4ff;
        }

        .content .actions button {
            padding: 8px 12px;
            border: none;
            border-radius: 5px;
            font-size: 14px;
            cursor: pointer;
        }

        .edit {
            background-color: #007bff;
            color: white;
        }

        .delete {
            background-color: #dc3545;
            color: white;
        }

        .content img {
            width: 60px;
            height: 60px;
            border-radius: 40%;
            object-fit: cover;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <h1><img src="Images/logo.png" alt="Logo"> DeCoding</h1>
        <ul>
            <li><a href="dashboard.php" >Dashboard</a></li>
            <li><a href="list_peserta.php" class="active" >List Peserta</a></li>
            <li><a href="formLogin.php" class="logout-but">Logout</a></li>
        </ul>
    </div>
    <div class="content">
        <div class="dashboard-header">
            <div>
                <h1>Selamat datang, Admin</h1>
                <p>Dashboard</p>
            </div>
        </div>
        <h2>Peserta Bootcamp</h2>
        <div class="search-bar">
            <input type="text" placeholder="Search">
            <a href="fpdf.php">Download PDF</a>
        </div>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Foto</th>
                    <th>Nama</th>
                    <th>No. Telepon</th>
                    <th>Email</th>
                    <th>Bootcamp</th>
                    <th>Tindakan</th>
                </tr>
            </thead>
            <tbody>
            <?php
                $sql = "SELECT * FROM calon_peserta_bc";
                $query = mysqli_query($koneksi, $sql);

                // Variabel untuk nomor urut
                $nomor = 1;

                while ($peserta = mysqli_fetch_array($query)) {
                    echo "<tr>";
                    echo "<td>".$nomor++."</td>"; // Penomoran manual
                    echo "<td>";
                    if (file_exists("uploads/".$peserta['foto'])) {
                        echo "<img src='uploads/".$peserta['foto']."' width='100' height='100'>";
                    } else {
                        echo "File tidak ditemukan: uploads/".$peserta['foto'];
                    }
                    echo "</td>";

                    echo "<td>".$peserta['nama']."</td>";
                    echo "<td>".$peserta['email']."</td>";
                    echo "<td>".$peserta['no_telepon']."</td>";
                    echo "<td>".$peserta['bootcamp']."</td>";
                    echo "<td>";
                    echo "<a href='edit_form_pendaftaran.php?id=".$peserta['id']."'class='btn btn-warning btn-sm' style='display: inline-block; padding: 10px 20px; text-align: center; border-radius: 5px; text-decoration: none; font-weight: bold; background-color: #ffc107; color: white; transition: background-color 0.3s;'>Edit</a> ";
                    echo " | ";
                    echo "<a href='hapus.php?id=".$peserta['id']."'class='btn btn-danger btn-sm' style='display: inline-block; padding: 10px 20px; text-align: center; border-radius: 5px; text-decoration: none; font-weight: bold; background-color: #dc3545; color: white; transition: background-color 0.3s;'>Hapus</a>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>

