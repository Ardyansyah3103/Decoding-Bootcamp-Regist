<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            height: 100vh;
            display: flex;
        }

        .container {
            display: flex;
            width: 100%;
        }

        .left {
            flex: 1;
            background: linear-gradient(rgba(0, 0, 128, 0.7), rgba(0, 0, 128, 0.7)), url('images/cover-loginpage.jpg');
            background-size: cover;
            background-position: center;
            opacity: 0.9;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: white;
        }

        .left img {
            width: 100px;
            height: auto;
            margin-bottom: 10px;
        }

        .left .logo-name {
            font-size: 32px;
            font-weight: bold;
            text-align: center;
        }

        .right {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 20px;
            background-color: #f4f4f4;
        }

        .right h1 {
            margin-bottom: 20px;
            font-size: 24px;
            color: black;
            font-weight: bold;
        }

        .button-container {
            display: flex;
            flex-direction: column;
            gap: 15px;
            width: 100%;
            max-width: 400px;
        }

        .button-card {
            display: flex;
            align-items: center;
            padding: 15px;
            border: 2px solid #007bff;
            border-radius: 8px;
            background-color: #f8f9fa;
            transition: background-color 0.3s ease, box-shadow 0.3s ease;
            cursor: pointer;
        }

        .button-card:hover {
            background-color: #e7f1ff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .button-card img {
            width: 40px;
            height: 40px;
            margin-right: 15px;
        }

        .button-card div {
            display: flex;
            flex-direction: column;
        }

        .button-card .title {
            font-size: 18px;
            font-weight: bold;
            color: #333;
        }

        .button-card .description {
            font-size: 14px;
            color: #666;
        }

    </style>
</head>
<body>
    <div class="container">
        <div class="left">
            <img src="images/logo.png" alt="Logo">
            <div class="logo-name">DeCoding</div>
        </div>
        <div class="right">
            <h1>Masuk Akun</h1>
            <div class="button-container">
                <div class="button-card" onclick="location.href='participant_login.html'">
                    <img src="images/icon_peserta.png" alt="Peserta Icon">
                    <div>
                        <div class="title">Peserta</div>
                        <div class="description">Masuk dengan akun peserta.</div>
                    </div>
                </div>
                <div class="button-card" onclick="location.href='admin_login.html'">
                    <img src="images/icon_admin.png" alt="Admin Icon">
                    <div>
                        <div class="title">Admin</div>
                        <div class="description">Masuk dengan akun admin.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
