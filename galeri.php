<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeri - SDN Sukahayu</title>
    <style>

        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f7f7f7;
            color: #333;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: #003366;
            margin-bottom: 50px;
            font-size: 2.5em;
            border-bottom: 2px solid #003366;
            display: inline-block;
            padding-bottom: 10px;
        }

        .flex-gallery {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }

        .flex-item {
            flex-basis: calc(33.333% - 20px);
            background-color: #ffffff;
            border-radius: 15px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            margin-bottom: 20px;
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .flex-item img {
            width: 100%;
            height: auto;
        }

        .flex-item:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
        }

        .caption {
            padding: 15px;
            font-size: 1.1em;
            color: #003366;
        }

        @media (max-width: 768px) {
            .flex-item {
                flex-basis: calc(50% - 20px);
            }
        }

        @media (max-width: 480px) {
            .flex-item {
                flex-basis: 100%;
            }
        }

         /* Header */
 header {
     background-color: #1E2A3A;
     color: white;
     padding: 5px;
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

    <div class="container">
        <h1>Galeri Kegiatan SDN Sukahayu</h1>
        <div class="flex-gallery">
            <div class="flex-item">
                <img src="ppdb.php/sd.jpg" alt="Kegiatan A">
                <div class="caption">Upacara Bendera</div>
            </div>
            <div class="flex-item">
                <img src="ppdb.php/kebersihan.jpg" alt="Kegiatan B">
                <div class="caption">Lomba Kebersihan</div>
            </div>
            <div class="flex-item">
                <img src="ppdb.php/olahraga.jpg" alt="Kegiatan C">
                <div class="caption">Kegiatan Olahraga</div>
            </div>
            <div class="flex-item">
                <img src="ppdb.php/pramuka.jpg" alt="Kegiatan D">
                <div class="caption">Kegiatan Pramuka</div>
            </div>
            <div class="flex-item">
                <img src="ppdb.php/seni.jpg" alt="Kegiatan E">
                <div class="caption">Kegiatan Seni</div>
            </div>
            <div class="flex-item">
                <img src="ppdb.php/sains.jpg" alt="Kegiatan F">
                <div class="caption">Eksperimen Sains</div>
            </div>
            <div class="flex-item">
                <img src="ppdb.php/tarii.jpg" alt="Kegiatan G">
                <div class="caption">Festival Tari</div>
            </div>
            <div class="flex-item">
                <img src="ppdb.php/kartini.jpg" alt="Kegiatan H">
                <div class="caption">Hari Kartini</div>
            </div>
            <div class="flex-item">
                <img src="ppdb.php/baca.jpg" alt="Kegiatan I">
                <div class="caption">Kegiatan Baca Buku</div>
            </div>
            <div class="flex-item">
                <img src="ppdb.php/gotong.jpg" alt="Kegiatan J">
                <div class="caption">Kegiatan Gotong Royong</div>
            </div>
            <div class="flex-item">
                <img src="ppdb.php/kunjungan.jpg" alt="Kegiatan K">
                <div class="caption">Kunjungan Industri</div>
            </div>
            <div class="flex-item">
                <img src="ppdb.php/lomba.jpg" alt="Kegiatan L">
                <div class="caption">Lomba Mewarnai</div>
            </div>
        </div>
    </div>

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
