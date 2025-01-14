<?php
// Database connection
$host = 'localhost';
$dbname = 'ppdb';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Koneksi gagal: " . $e->getMessage());
}

session_start();
$error = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query to check username and password
    $stmt = $pdo->prepare("SELECT * FROM users WHERE username = :username AND password = :password");
    $stmt->execute(['username' => $username, 'password' => $password]);

    if ($stmt->rowCount() > 0) {
        $user = $stmt->fetch();
        $_SESSION['username'] = $username;
        $_SESSION['name'] = $user['name'];
        $_SESSION['role'] = $user['role']; // Store user's role in session

        if ($user['role'] === 'admin') {
            echo "<script>alert('Login berhasil sebagai admin!');</script>";
            header("Location: beranda.php"); // Redirect admin to the admin page
            exit;
        } else {
            echo "<script>alert('Login berhasil sebagai user!');</script>";
            header("Location: tampilData.php"); // Redirect normal user to their page
            exit;
        }
    } else {
        $error = "Username atau password salah!";
    }
}
?>

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

        /* Login Form */ .login-container { display: flex; justify-content: center; align-items: center; flex-grow: 1; padding: 40px 20px; } .login-container form { background-color: white; padding: 30px; border-radius: 10px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); max-width: 400px; width: 100%; } .login-container h2 { margin-bottom: 20px; text-align: center; color: #1E2A3A; } .form-group { margin-bottom: 15px; } .form-group label { display: block; margin-bottom: 5px; font-weight: bold; } .form-group input { width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px; outline: none; font-size: 1em; } .form-group input:focus { border-color: #74c0fc; } .login-btn { width: 100%; padding: 10px; background-color: #1E2A3A; color: white; border: none; border-radius: 5px; font-size: 1em; cursor: pointer; transition: background-color 0.3s ease; } .login-btn:hover { background-color: #2A3E5F; } .error { color: red; margin-top: 10px; text-align: center; } /* Footer Section */ footer { background-color: #2A3E5F; color: white; padding: 40px 20px; text-align: center; }
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
    <div class="login-container">
        <form method="POST" action="">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" class="login-btn">Login</button>

            <?php if ($error): ?>
                <p class="error"><?= htmlspecialchars($error) ?></p>
            <?php endif; ?>
        </form>
    </div>
     <!-- Footer Section -->
 <footer>
     <div class="footer-container">
         <div class="footer-item">
             <h3>Alamat Sekolah</h3>
             <p>Jl. Jambu No.2, Kecamatan Jambu, Kabupaten XYZ, Jawa Tengah<
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

<?php
// Protect admin pages
function protectAdminPage() {
    if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
        header("Location: login.php");
        exit;
    }
}
?>
