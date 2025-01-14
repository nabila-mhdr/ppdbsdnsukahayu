<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SDN SUKAHAYU</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        /* Reset and General Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            color: #333;
            background: linear-gradient(135deg, #d0ebff, #74c0fc);
        }

        h1, h2, h3, p {
            margin: 0;
        }

        /* Header */
        header {
            background-color: #1E2A3A;
            color: white;
            padding: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border-bottom: 4px solid #41729F;
        }
        header .logo {
            display: flex;
            align-items: center;
        }
        header .logo img {
            height: 60px;
            margin-right: 15px;
        }
        header .logo h1 {
            font-size: 2em;
            text-transform: uppercase;
            font-weight: bold;
        }

        /* Navigation */
        nav {
            background-color: #1E2A3A;
            display: flex;
            justify-content: center;
            padding: 15px 0;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        nav a {
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            font-weight: bold;
            text-transform: uppercase;
            transition: background-color 0.3s ease;
        }
        nav a:hover {
            background-color: #2A3E5F;
            border-radius: 5px;
        }

        /* Banner Section */
        .banner {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 60px;
            background: url('ppdb.php/pexels-tima-miroshnichenko-5428267.jpg') no-repeat center center/cover;
            position: relative;
            overflow: hidden;
        }

        .banner::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.5);
            z-index: 1;
        }

        .banner .welcome-text {
            max-width: 50%;
            color: white;
            z-index: 2;
            animation: slideIn 1s ease-in-out;
        }

        @keyframes slideIn {
            from { transform: translateX(-50px); opacity: 0; }
            to { transform: translateX(0); opacity: 1; }
        }

        .banner .welcome-text h2 {
            font-size: 3em;
            margin-bottom: 20px;
        }

        .banner .welcome-text p {
            font-size: 1.2em;
            line-height: 1.8;
            margin-bottom: 20px;
        }

        .banner .welcome-text button {
            padding: 10px 30px;
            border: none;
            background-color: #F3F3E0;
            color: #2A3E5F;
            font-size: 1.2em;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .banner .welcome-text button:hover {
            background-color: #2A3E5F;
            color: white;
            transform: scale(1.1);
        }

        .banner .image {
            max-width: 50%;
            z-index: 2;
            animation: fadeIn 1.5s ease-in-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        .banner .image img {
            width: 100%;
            border-radius: 10px;
            transition: transform 0.3s ease;
        }

        .banner .image img:hover {
            transform: scale(1.05);
        }

        /* Footer Section */
        footer {
            background-color: #2A3E5F;
            color: white;
            padding: 40px 20px;
        }

        .footer-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            text-align: left;
            max-width: 1200px;
            margin: 0 auto;
        }

        .footer-item {
            flex: 1 1 300px;
            margin: 10px;
        }

        .footer-item h3 {
            font-size: 1.2em;
            margin-bottom: 15px;
            color: #E0F4FF;
        }

        .footer-item p,
        .footer-item a {
            color: #D0E3F0;
            font-size: 0.95em;
            line-height: 1.6;
            text-decoration: none;
        }

        .footer-item a:hover {
            color: #FFF;
        }

        .social-icons {
            display: flex;
            gap: 10px;
            margin-top: 15px;
        }

        .social-icons a {
            width: 35px;
            height: 35px;
            background-color: #41729F;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            font-size: 1.2em;
            transition: background-color 0.3s, transform 0.3s;
        }

        .social-icons a:hover {
            background-color: #345A7E;
            transform: scale(1.1);
        }

        .footer-button {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #41729F;
            color: white;
            padding: 15px;
            border-radius: 50%;
            cursor: pointer;
            font-size: 1em;
            transition: background-color 0.3s, transform 0.3s;
        }

        .footer-button:hover {
            background-color: #345A7E;
            transform: scale(1.1);
        }
    </style>
</head>
<body>
     <!-- Header -->
     <header>
         <div class="logo">
             <img src="ppdb.php/logo.jpg" alt="Logo Sekolah">
             <h1>SDN Sukahayu</h1>
         </div>
     </header>

     <!-- Navigation Bar -->
     <nav>
         <a href="beranda.php">HOME</a>
         <a href="profil.php">PROFIL</a>
         <a href="formulir.php">PPDB</a>
         <a href="informasi.php">INFORMASI</a>
         <a href="galeri.php">GALERI</a>
         <a href="login.php">LOGIN/DAFTAR</a>
     </nav>

    <!-- Banner Section -->
    <section class="banner">
        <div class="welcome-text">
            <h2>Selamat Datang di Website</h2>
            <h2>SDN SUKAHAYU</h2>
            <p>Kami menyediakan pendidikan berkualitas untuk mencetak generasi yang cerdas dan berakhlak mulia.</p>
            <button onclick="window.location.href='profil.php';">SELENGKAPNYA</button>
        </div>
        <div class="image">
            <img src="ppdb.php/pexels-tima-miroshnichenko-5428267.jpg" alt="Student Image">
        </div>
    </section>

    <!-- Footer Section -->
    <footer>
        <div class="footer-container">
            <div class="footer-item">
                <h3>Alamat Sekolah</h3>
                <p>Jl. Jambu No.2, Kecamatan Jambu, Kabupaten XYZ, Jawa Tengah</p>
            </div>
            
            <div class="footer-item">
                <h3>Kontak Kami</h3>
                <p>Telepon: (021) 123-4567<br>Email: info@sdn2jambu.sch.id</p>
            </div>
            
            <div class="footer-item">
                <h3>Ikuti Kami</h3>
                <div class="social-icons">
                    <a href="#" target="_blank">&#x1F426;</a>
                    <a href="#" target="_blank">&#x1F4F1;</a>
                    <a href="#" target="_blank">&#x1F4F7;</a>
                    <a href="#" target="_blank">&#x1F4F2;</a>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
