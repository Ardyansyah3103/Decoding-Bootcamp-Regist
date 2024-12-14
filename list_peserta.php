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

        .sidebar ul li a:hover {
            background-color: #3ba7ff;
        }

        .sidebar ul li a.active {
            background-color: #3ba7ff;
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

        .content .search-bar button {
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .content .search-bar button:hover {
            background-color: #0056b3;
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
            border-radius: 50%;
            object-fit: cover;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <h1><img src="Images/logo.png" alt="Logo"> DeCoding</h1>
        <ul>
            <li><a href="#" class="active">Dashboard</a></li>
            <li><a href="#">Pendaftaran</a></li>
            <li><a href="#">List Peserta</a></li>
        </ul>
    </div>
    <div class="content">
        <div class="dashboard-header">
            <div>
                <h1>Admin</h1>
                <p>Dashboard</p>
            </div>
        </div>
        <h2>Peserta Bootcamp</h2>
        <div class="search-bar">
            <input type="text" placeholder="Search">
            <button>Download</button>
        </div>
        <table>
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Foto</th>
                    <th>No. Telepon</th>
                    <th>Email</th>
                    <th>Bootcamp</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Jane Cooper</td>
                    <td><img src="Images/jane.jpg" alt="Jane"></td>
                    <td>(225) 555-0118</td>
                    <td>jane@microsoft.com</td>
                    <td>Web Development</td>
                    <td class="actions"><button class="edit">Edit</button> <button class="delete">Hapus</button></td>
                </tr>
                <tr>
                    <td>Floyd Miles</td>
                    <td><img src="Images/Floyd.jpg" alt="Floyd"></td>
                    <td>(205) 555-0100</td>
                    <td>floyd@yahoo.com</td>
                    <td>Mobile App Development</td>
                    <td class="actions"><button class="edit">Edit</button> <button class="delete">Hapus</button></td>
                </tr>
                <tr>
                    <td>Ronald Richards</td>
                    <td><img src="Images/Ronald.jpg" alt="Ronald"></td>
                    <td>(302) 555-0107</td>
                    <td>ronald@adobe.com</td>
                    <td>UI/UX Design</td>
                    <td class="actions"><button class="edit">Edit</button> <button class="delete">Hapus</button></td>
                </tr>
                <tr>
                    <td>Marvin McKinney</td>
                    <td><img src="Images/Marvin.jpg" alt="Marvin"></td>
                    <td>(252) 555-0126</td>
                    <td>marvin@tesla.com</td>
                    <td>Data Science & Analytics</td>
                    <td class="actions"><button class="edit">Edit</button> <button class="delete">Hapus</button></td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>
