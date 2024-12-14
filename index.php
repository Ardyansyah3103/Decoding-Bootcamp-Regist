<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>DeCoding</title>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <style>
        /* atas */
        * {
        font-family: "Inter", serif;
        font-optical-sizing: auto;
        font-weight: 400;
        font-style: normal;
        }

        body {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 50px;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        header img {
            height: 50px;
        }

        nav a {
            margin: 0 15px;
            text-decoration: none;
            color: #333;
            font-weight: 500;
            position: relative;
            padding: 5px 0;
            transition: color 0.3s, transform 0.3s;
        }

        nav a:hover {
            color: #007bff; /* Warna saat hover */
            transform: scale(1.1); /* Membesarkan sedikit saat hover */
        }

        nav a::after {
            content: '';
            position: absolute;
            width: 100%;
            height: 2px;
            background-color: #007bff;
            left: 0;
            bottom: 0;
            transform: scaleX(0);
            transition: transform 0.3s ease;
        }

        .auth-links a {
            margin-left: 15px;
            text-decoration: none;
            color: #007bff;
            font-weight: 500;
        }

        .auth-links a:last-child {
            background-color: #007bff;
            color: #fff;
            padding: 8px 15px;
            border-radius: 5px;
        }

        .hero {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 100px 20px;
            background-color: #DEEBFF;
        }

        .hero-text {
            max-width: 50%;
            text-align: left;
        }

        .hero h1 {
            font-size: 48px;
            font-weight: 700;
            margin-bottom: 20px;
        }

        .hero h1 span {
            color: #007bff;
            font-weight: bold;
        }

        .hero p {
            font-size: 18px;
            color: #666;
            margin-bottom: 30px;
        }

        .hero button {
            background-color: #007bff;
            color: #fff;
            padding: 15px 30px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        .hero img {
            max-width: 50%;
            margin-left: 30px;
        }
        /* atas */

        /* tengah */
        .languages h2, .benefits h2, .bootcamp h2 {
            font-weight: bold;
            font-size: 36px;
        }

        .languages {
            text-align: center;
            padding: 50px 20px;
        }

        .benefits {
            text-align: center;
            padding: 50px 20px;
        }

        .bootcamp {
            text-align: center;
            padding: 50px 20px;
        }

        .contact {
            text-align: center;
            padding: 50px 20px;
        }

        .languages img {
            height: 75px;
            margin: 50px;
        }

        .benefits img {
            height: 50px;
            margin: 20px;
        }

        .benefits .benefit-item {
            display: inline-block;
            width: 30%;
            padding: 20px;
            box-shadow: 4px 4px 4px 4px rgba(0, 0, 0, 0.2);
            margin: 20px;
            border-radius: 10px;
            background-color: #fff;
        }

        .benefits .benefit-item img {
            height: 40px;
            margin-bottom: 20px;
        }

        .benefit-item h3 {
            font-weight: bold;
            font-size: 20px;
        }

        .bootcamp .bootcamp-item {
            display: inline-block;
            width: 22%;
            margin: 20px;
            font-weight: 500;
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: #fff;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .bootcamp .bootcamp-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            background-color: #f9f9f9;
        }
        /* tengah */

        /* bawah */
        .contact {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #DEEBFF;
            padding: 50px;
        }

        .contact .contact-info {
            width: 40%;
        }

        .contact .contact-info h3 {
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 20px;
        }

        .contact .contact-info p {
            font-size: 16px;
            color: #666;
            margin-bottom: 10px;
        }

        .contact .contact-info a {
            display: block;
            margin-bottom: 10px;
            color: #007bff;
            text-decoration: none;
        }

        .contact img {
            width: 55%;
            border-radius: 10px;
        }
        /* bawah */

        /* responsive */
        @media (max-width: 768px) {
            header {
                flex-direction: column;
                padding: 20px;
            }

            .hero {
                flex-direction: column;
                text-align: center;
            }

            .hero-text,
            .hero img {
                max-width: 100%;
                margin: 0;
            }

            .hero h1 {
                font-size: 36px;
            }

            .benefits .benefit-item,
            .bootcamp .bootcamp-item {
                width: 100%;
                margin: 10px 0;
            }

            .contact {
                flex-direction: column;
                text-align: center;
            }

            .contact .contact-info,
            .contact img {
                width: 100%;
            }
        /* responsive */
        }
    </style>
</head>

<body>
    <header>
        <img src="images/decoding-logo.png" alt="DeCoding logo" />
        <nav>
            <a href="#home">Home</a>
            <a href="#info">Info</a>
            <a href="#program">Program</a>
            <a href="#contact">Contact</a>
        </nav>
        <div class="auth-links">
            <a href="#">Masuk</a>
            <a href="#">Daftar</a>
        </div>
    </header>

    <section id="home" class="hero">
        <div class="hero-text">
            <h1>Unlock Your Coding <span>Potential!</span></h1>
            <p>Mulai langkahmu dan asah keterampilan coding-mu bersama DeCoding!</p>
            <button>Sekarang juga!</button>
        </div>
        <img src="images/illustration.png" alt="Hero image" />
    </section>

    <section id="info" class="languages">
        <h2>Banyak Bahasa Pemrograman</h2>
        <p>Kami menyediakan banyak bahasa pemrograman untuk dipelajari</p>
        <img src="images/c.png"/>
        <img src="images/cpp.png"/>
        <img src="images/php.png"/>
        <img src="images/python.png"/>
        <img src="images/html.png"/>
        <img src="images/css.png"/>
        <img src="images/javascript.png"/>
        <img src="images/typescript.png"/>
        <img src="images/sql.png"/>
        <img src="images/java.png"/>
        <img src="images/csharp.png"/>
        <img src="images/powershell.png"/>
    </section>

    <section class="benefits">
        <h2>Benefit Program</h2>
        <p>Banyak benefit yang kami janjikan kepada Anda</p>
        <div class="benefit-item">
            <img src="images/people.png" alt="Membership icon" />
            <h3>Membership Organisations</h3>
            <p>Membership kami menyediakan otomatisasi penuh untuk pembaruan dan pembayaran keanggotaan.</p>
        </div>
        <div class="benefit-item">
            <img src="images/building.png" alt="Internship icon" />
            <h3>Internship</h3>
            <p>Berkesempatan untuk internship di perusahaan ternama dan bersertifikat nasional hingga internasional.</p>
        </div>
        <div class="benefit-item">
            <img src="images/groups.png" alt="Clubs and Groups icon" />
            <h3>Clubs And Groups</h3>
            <p>Memberikan pengalaman belajar yang lebih interaktif dan mendalam. Mendapatkan relasi dengan rekan-rekan sesama dan membuat proyek kolaboratif.</p>
        </div>
    </section>

    <section id="program" class="bootcamp">
        <h2>Program Bootcamp</h2>
        <p>Dibimbing oleh para ahli di masing-masing bidangnya</p>
        <div class="bootcamp-item">Web Development</div>
        <div class="bootcamp-item">Mobile App Development</div>
        <div class="bootcamp-item">UI/UX Design</div>
        <div class="bootcamp-item">Data Science &amp; Analytics</div>
        <div class="bootcamp-item">AI &amp; Machine Learning</div>
        <div class="bootcamp-item">Cybersecurity</div>
        <div class="bootcamp-item">Game Development</div>
        <div class="bootcamp-item">Digital Marketing</div>
        <div class="bootcamp-item">Software Engineering</div>
    </section>

    <section id="contact" class="contact">
        <div class="contact-info">
            <h3>DeCoding</h3>
            <p>DeCoding Center</p>
            <p>Jl. Wusyaname No. 1, Keputih, Kec. Sukolilo, Kota Surabaya</p>
            <a href="tel:+6289612345678"><i class="fas fa-phone"></i> +62 896 1234 5678</a>
            <a href="https://instagram.com/decoding.id"><i class="fab fa-instagram"></i> @decoding.id</a>
            <a href="mailto:decoding@gmail.com"><i class="fas fa-envelope"></i> decoding@gmail.com</a>
        </div>
        <img src="images/bootcamp.jpg" alt="Code editor screenshot" class="contact-image" />
    </section>    
</body>

</html>