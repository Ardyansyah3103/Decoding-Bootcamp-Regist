<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
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

        .actions {
            display: flex;
            margin-bottom: 10px;
            gap: 8px;
        }

        .action-item {
            display: flex;
            align-items: center;
            gap: 15px;
            background-color: #ffffff;
            padding: 15px 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            flex: 1;
            min-width: 250px;
            transition: transform 0.3s ease;
        }

        .action-img {
            width: 60px;
            height: 60px;
            object-fit: contain;
        }

        .action-text {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }

        .action-title {
            font-size: 18px;
            font-weight: bold;
            color: #333;
        }

        .action-description {
            font-size: 14px;
            color: #6c757d;
        }

        .cards-container {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .card {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .card-content {
            display: flex;
            flex-direction: column;
        }

        .card-content h2 {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
            color: #333;
        }

        .card-content p {
            font-size: 14px;
            color: #6c757d;
        }

        .card button {
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
            margin-left: 10px;
        }

        .card button:hover {
            background-color: #0056b3;
        }

        a {
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="sidebar">
        <h1><img src="images/logo.png" alt="Logo"> DeCoding</h1>
        <ul>
            <li><a href="#" class="active">Dashboard</a></li>
            <li><a href="#">Pendaftaran</a></li>
            <li><a href="list_peserta.php">List Peserta</a></li>
        </ul>
    </div>

    <div class="content">
        <div class="dashboard-header">
            <div>
                <h1>Admin</h1>
                <p>Dashboard</p>
            </div>
        </div>

        <div class="actions">
            <a href="list_peserta.php" class="action-item">
                <img src="images/listpeserta.png" alt="List Peserta" class="action-img">
                <div class="action-text">
                    <p class="action-title">List Peserta</p>
                    <p class="action-description">Lihat daftar peserta saat ini</p>
                </div>
            </a>
            <a href="" class="action-item">
                <img src="images/course.png" alt="Course" class="action-img">
                <div class="action-text">
                    <p class="action-title">Course</p>
                    <p class="action-description">Pilih course yang tersedia</p>
                </div>
            </a>
        </div>

        <div class="cards-container">
            <div class="card">
                <div class="card-content">
                    <h2>Web Development</h2>
                    <p>Bootcamp Web Development adalah program pelatihan yang dirancang untuk membekali peserta dengan keterampilan dalam membangun situs web. Pelatihan mencakup dasar-dasar HTML, CSS, JavaScript, serta pengenalan kepada framework dan tools terbaru untuk pengembangan web modern.</p>
                </div>
                <button>View Details</button>
            </div>

            <div class="card">
                <div class="card-content">
                    <h2>Mobile App Development</h2>
                    <p>Bootcamp Mobile App Development memberikan pelatihan mendalam tentang pembuatan aplikasi untuk platform Android dan iOS. Peserta akan belajar menggunakan bahasa pemrograman seperti Java, Kotlin, Swift, serta framework seperti Flutter dan React Native untuk mengembangkan aplikasi mobile yang fungsional dan menarik.</p>
                </div>
                <button>View Details</button>
            </div>

            <div class="card">
                <div class="card-content">
                    <h2>UI/UX Design</h2>
                    <p>Bootcamp UI/UX Design dirancang untuk mengembangkan keterampilan desain antarmuka pengguna (UI) dan pengalaman pengguna (UX). Peserta akan belajar bagaimana merancang tampilan dan pengalaman yang intuitif dengan fokus pada riset pengguna, wireframing, prototyping, dan penggunaan alat desain seperti Figma dan Adobe XD untuk menciptakan produk digital yang user-friendly dan estetis.</p>
                </div>
                <button>View Details</button>
            </div>

            <div class="card">
                <div class="card-content">
                    <h2>Game Development</h2>
                    <p>Bootcamp Game Development memberikan pelatihan intensif untuk menciptakan game dari awal hingga akhir. Peserta akan mempelajari konsep dasar pengembangan game, termasuk desain gameplay, pengkodean menggunakan mesin seperti Unity dan Unreal Engine, serta teknik untuk menciptakan pengalaman permainan yang menarik dan interaktif. Ideal untuk mereka yang ingin memasuki industri game dan mengembangkan proyek game mereka sendiri.</p>
                </div>
                <button>View Details</button>
            </div>

            <div class="card">
                <div class="card-content">
                    <h2>Software Engineering</h2>
                    <p>Bootcamp Software Engineering mempersiapkan peserta untuk menjadi pengembang perangkat lunak profesional. Dalam program ini, peserta akan mempelajari dasar-dasar pemrograman, pengembangan aplikasi web dan mobile, pengujian perangkat lunak, serta penggunaan berbagai alat dan framework terkini. Program ini cocok untuk mereka yang ingin membangun karier di dunia teknologi dengan fokus pada pengembangan perangkat lunak yang efisien dan scalable.</p>
                </div>
                <button>View Details</button>
            </div>

            <div class="card">
                <div class="card-content">
                    <h2>Cybersecurity</h2>
                    <p>Bootcamp Cybersecurity memberikan pelatihan intensif untuk melindungi sistem informasi dari ancaman digital. Peserta akan mempelajari cara mencegah serangan siber, mengidentifikasi kerentanannya, serta mengimplementasikan strategi keamanan yang efektif. Dengan pengetahuan mendalam tentang enkripsi, analisis risiko, dan pengelolaan ancaman, bootcamp ini mempersiapkan peserta untuk menjadi profesional keamanan siber yang terampil dan siap menghadapi tantangan dunia digital.</p>
                </div>
                <button>View Details</button>
            </div>

            <div class="card">
                <div class="card-content">
                    <h2>Data Science &amp; Analytics</h2>
                    <p>Bootcamp Data Science & Analytics mengajarkan keterampilan untuk menganalisis dan menginterpretasi data untuk membuat keputusan yang berbasis bukti. Peserta akan belajar tentang statistik, pemrograman (Python, R), pembelajaran mesin, serta penggunaan alat analisis data untuk menggali wawasan dari berbagai dataset. Dengan fokus pada analisis data yang efektif dan pemecahan masalah menggunakan data, bootcamp ini mempersiapkan peserta untuk berkarir sebagai ilmuwan data atau analis data yang kompeten.</p>
                </div>
                <button>View Details</button>
            </div>

            <div class="card">
                <div class="card-content">
                    <h2>AI &amp; Machine Learning</h2>
                    <p>Bootcamp AI & Machine Learning menawarkan pelatihan mendalam tentang pengembangan kecerdasan buatan dan penerapan algoritma pembelajaran mesin. Peserta akan mempelajari konsep-konsep dasar seperti regresi, klasifikasi, pembelajaran mendalam (deep learning), serta penggunaan pustaka seperti TensorFlow dan PyTorch. Dengan fokus pada penerapan praktis, bootcamp ini mempersiapkan peserta untuk mengembangkan aplikasi AI yang canggih, termasuk pengolahan bahasa alami (NLP), visi komputer, dan sistem rekomendasi.</p>
                </div>
                <button>View Details</button>
            </div>

            <div class="card">
                <div class="card-content">
                    <h2>Digital Marketing</h2>
                    <p>Bootcamp Digital Marketing mengajarkan keterampilan praktis dalam mengelola kampanye pemasaran digital. Peserta akan mempelajari strategi pemasaran melalui media sosial, optimasi mesin pencari (SEO), iklan berbayar (PPC), pemasaran konten, dan analisis data. Dengan pendekatan yang berbasis pada hasil nyata, bootcamp ini akan membekali peserta dengan keterampilan untuk merancang, melaksanakan, dan mengoptimalkan strategi digital marketing yang efektif di berbagai platform.</p>
                </div>
                <button>View Details</button>
            </div>
        </div>
    </div>
</body>

</html>