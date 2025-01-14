<?php
// Konfigurasi koneksi database
$servername = "localhost"; // atau alamat server Anda
$username = "root"; // ganti dengan username database Anda
$password = ""; // ganti dengan password database Anda
$dbname = "ppdb2";

// Buat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$successMessage = "";
$errorMessage = "";

// Cek jika form disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $nama = $_POST['nama'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];
    $no_telepon = $_POST['no_telepon'];

    // SQL untuk memasukkan data
    $sql = "INSERT INTO siswa (nama, tanggal_lahir, alamat, email, no_telepon) VALUES ('$nama', '$tanggal_lahir', '$alamat', '$email', '$no_telepon')";

    if ($conn->query($sql) === TRUE) {
        $successMessage = "Data berhasil disimpan! Anda akan diarahkan ke formulir.";
        // Redirect to formulir.php after a few seconds using JavaScript
        echo "<script>
            setTimeout(function() {
                window.location.href = 'formulir.php'; // Redirect to formulir.php
            }, 3000); // Wait 3 seconds before redirecting
        </script>";
    } else {
        $errorMessage = "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Tutup koneksi
$conn->close();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form PPDB</title>
    <style>
    /* Reset and General Styles */ * { margin: 0; padding: 0; box-sizing: border-box; } body { font-family: 'Poppins', sans-serif; color: #333; background: linear-gradient(135deg, #d0ebff, #74c0fc); } h1, h2, h3, p { margin: 0; } /* Header */ header { background-color: #1E2A3A; color: white; padding: 20px; display: flex; align-items: center; justify-content: center; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); border-bottom: 4px solid #41729F; } header .logo { display: flex; align-items: center; } header .logo img { height: 60px; margin-right: 15px; } header .logo h1 { font-size: 2em; text-transform: uppercase; font-weight: bold; } /* Navigation */ nav { background-color: #1E2A3A; display: flex; justify-content: center; padding: 15px 0; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); } nav a { color: white; padding: 10px 20px; text-decoration: none; font-weight: bold; text-transform: uppercase; transition: background-color 0.3s ease; } nav a:hover { background-color: #2A3E5F; border-radius: 5px; } /* Flexbox Container */ .flex-container { display: flex; justify-content: space-between; flex-wrap: wrap; padding: 20px; gap: 20px; } .flex-item { background: #fff; border-radius: 8px; padding: 20px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); flex: 1 1 calc(50% - 20px); } .flex-item h3 { font-weight: 600; color: #1E2A3A; margin-bottom: 10px; } .flex-item ul { list-style-type: disc; padding-left: 20px; } .flex-item p, .flex-item li { font-weight: 400; color: #555; } /* Form Section */ form { background: #fff; border-radius: 8px; padding: 20px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); max-width: 600px; margin: 20px auto; } form h3 { font-weight: 600; color: #1E2A3A; margin-bottom: 15px; } form label { display: block; font-weight: 600; color: #555; margin: 10px 0 5px; } form input[type="text"], form input[type="date"], form input[type="email"], form textarea { width: 100%; padding: 10px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 4px; font-family: 'Poppins', sans-serif; color: #333; } form input[type="submit"] { background: #1E2A3A; color: white; padding: 10px 15px; border: none; border-radius: 4px; cursor: pointer; font-weight: 600; transition: background-color 0.3s ease; } form input[type="submit"]:hover { background: #2A3E5F; } /* Messages */ .message { text-align: center; font-weight: 600; margin: 10px 0; } .message.success { color: green; } .message.error { color: red; } /* Footer Section */ footer { background-color: #2A3E5F; color: white; padding: 40px 20px; } .footer-container { display: flex; flex-wrap: wrap; justify-content: space-between; text-align: left; max-width: 1200px; margin: 0 auto; } .footer-item { flex: 1 1 300px; margin: 10px; } .footer-item h3 { font-size: 1.2em; margin-bottom: 15px; color: #E0F4FF; } .footer-item p, .footer-item a { color: #D0E3F0; font-size: 0.95em; line-height: 1.6; text-decoration: none; } .footer-item a:hover { color: #FFF; } .social-icons { display: flex; gap: 10px; margin-top: 15px; } .social-icons a { width: 35px; height: 35px; background-color: #41729F; color: white; display: flex; align-items: center; justify-content: center; border-radius: 50%; font-size: 1.2em; transition: background-color 0.3s, transform 0.3s; } .social-icons a:hover { background-color: #345A7E; transform: scale(1.1); } .footer-button { position: fixed; bottom: 20px; right: 20px; background-color: #41729F; color: white; padding: 15px; border-radius: 50%; cursor: pointer; font-size: 1em; transition: background-color 0.3s, transform 0.3s; } .footer-button:hover { background-color: #345A7E; transform: scale(1.1); } </style>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="logo">
            <img src="ppdb.php/logo.jpg" alt="Logo Sekolah">
            <h1>SDN SUKAHAYU</h1>
        </div>
    </header>

    <!-- Navigation Bar -->
    <nav>
        <a href="beranda.php">HOME</a>
        <a href="profil.php">PROFIL</a>
        <a href="formulir.php#">PPDB</a>
        <a href="informasi.php">INFORMASI</a>
        <a href="galeri.php">GALERI</a>
        <a href="login.php">LOGIN/DAFTAR</a>
    </nav>

    <!-- Flexbox Section for Syarat Pendaftaran and Panduan Pendaftaran -->
    <div class="flex-container">
        <div class="flex-item">
            <h3>Syarat Pendaftaran</h3>
            <ul>
                <li>Usia minimal 6 tahun pada 1 Juli tahun ajaran baru.</li>
                <li>Mempunyai ijazah atau surat keterangan lulus dari TK/PAUD.</li>
                <li>Melampirkan fotokopi akta kelahiran.</li>
                <li>Melampirkan pas foto terbaru ukuran 3x4 (2 lembar).</li>
                <li>Melampirkan fotokopi Kartu Keluarga (KK).</li>
            </ul>
        </div>
        <div class="flex-item">
            <h3>Panduan Pendaftaran</h3>
            <p>Ikuti langkah-langkah berikut untuk mendaftar:</p>
            <ul>
                <li>Isi formulir pendaftaran dengan lengkap.</li>
                <li>Upload dokumen yang diperlukan seperti fotokopi akta kelahiran dan Kartu Keluarga.</li>
                <li>Periksa kembali data yang Anda masukkan sebelum mengirimkan formulir.</li>
                <li>Klik tombol 'Submit' untuk mengirimkan pendaftaran Anda.</li>
                <li>Anda akan menerima konfirmasi pendaftaran melalui email atau SMS.</li>
            </ul>
        </div>
    </div>

    <!-- Form Section -->
    <div>
       <h3> Form Pendaftaran Awal </h3>
        <form action="" method="post">
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" required>

            <label for="tanggal_lahir">Tanggal Lahir:</label>
            <input type="date" id="tanggal_lahir" name="tanggal_lahir" required>

            <label for="alamat">Alamat:</label>
            <textarea id="alamat" name="alamat" required></textarea>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="no_telepon">No Telepon:</label>
            <input type="text" id="no_telepon" name="no_telepon" required>

            <input type="submit" value="Submit">
        </form>

        <?php if ($successMessage): ?>
            <div class="message success"><?= $successMessage ?></div>
        <?php endif; ?>

        <?php if ($errorMessage): ?>
            <div class="message error"><?= $errorMessage ?></div>
        <?php endif; ?>
    </div>

    <!-- Footer Section -->
    <footer>
        <div class="footer-container">
            <div class="footer-item">
                <h3>Alamat Sekolah</h3>
                <p>Jl. Raya Sukahayu No. 45, Sukahayu, Indonesia</p>
            </div>
            <div class="footer-item">
                <h3>Kontak</h3>
                <p>Email: info@sdnsukahayu.sch.id</p>
                <p>Telepon: (021) 555-1234</p>
            </div>
            <div class="footer-item">
                <h3>Sosial Media</h3>
                <div class="social-icons">
                    <a href="#">FB</a>
                    <a href="#">IG</a>
                    <a href="#">TW</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Footer Button -->
    <button class="footer-button">TOP</button>
</body>
</html>
