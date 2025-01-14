<?php
// Konfigurasi koneksi database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ppdb2";

// Buat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Tutup koneksi
$conn->close();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil SDN Sukahayu</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        /* General Styles */
        body {
            font-family: 'Poppins', sans-serif;
            color: #333;
            background: linear-gradient(135deg, #d0ebff, #74c0fc);
            margin: 0;
            padding: 0;
        }

        h1, h2, h3, h4 {
            font-family: 'Poppins', sans-serif;
            color: #2A3E5F;
            margin: 0 0 10px 0;
        }

        p {
            font-size: 1em;
            line-height: 1.8;
        }

        ul {
            list-style: none;
            padding: 0;
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

        /* Profil Section */
        .profil-container {
            background-color: #fff;
            margin: 40px auto;
            max-width: 900px;
            padding: 30px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            position: relative;
            animation: fadeIn 2s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .profil-title {
            font-size: 2.2em;
            text-align: center;
            color: #2A3E5F;
            text-transform: uppercase;
            margin-bottom: 20px;
        }

        .profil-content {
            overflow: hidden;
        }

        .profil-content h3 {
            color: #41729F;
            font-size: 1.5em;
            margin-top: 20px;
            cursor: pointer;
            transition: color 0.3s ease-in-out;
        }

        .profil-content h3:hover {
            color: #1E2A3A;
        }

        .profil-content p, .profil-content ul {
            max-height: 0;
            opacity: 0;
            overflow: hidden;
            transition: max-height 0.5s ease-in-out, opacity 0.5s ease-in-out;
        }

        .profil-content h3.active + p,
        .profil-content h3.active + ul {
            max-height: 500px;
            opacity: 1;
        }

        .profil-content ul li {
            margin-bottom: 10px;
        }

        .profil-content ul li strong {
            color: #345A7E;
        }

        /* Flexbox Gambar */
        .flex-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
            margin: 50px 0;
        }

        .flex-item {
            position: relative;
            width: 200px;
            height: 200px;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .flex-item:hover {
            transform: scale(1.05);
        }

        .flex-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 10px;
        }

        /* Footer */
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
    color: #E0F4FF; /* Light blue */
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
/* Social Media Icons */
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
    transition: background-color 0.3s, transform 0.3s; /* Added transition for animations */
}
.social-icons a:hover {
    background-color: #345A7E;
    transform: scale(1.1); /* Slightly enlarge on hover */
}
/* Footer message button */
.footer-button {
    position: fixed;
    bottom: 20px;
    right: 20px;
    background-color: #41729F; /* Semi-blue */
    color: white;
    padding: 15px;
    border-radius: 50%;
    cursor: pointer;
    font-size: 1em;
    transition: background-color 0.3s, transform 0.3s; /* Added transition for button animations */
}
.footer-button:hover {
    background-color: #345A7E;
    transform: scale(1.1); /* Slightly enlarge on hover */
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
    color: #E0F4FF; /* Light blue */
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
/* Social Media Icons */
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
    transition: background-color 0.3s, transform 0.3s; /* Added transition for animations */
}
.social-icons a:hover {
    background-color: #345A7E;
    transform: scale(1.1); /* Slightly enlarge on hover */
}
/* Footer message button */
.footer-button {
    position: fixed;
    bottom: 20px;
    right: 20px;
    background-color: #41729F; /* Semi-blue */
    color: white;
    padding: 15px;
    border-radius: 50%;
    cursor: pointer;
    font-size: 1em;
    transition: background-color 0.3s, transform 0.3s; /* Added transition for button animations */
}
.footer-button:hover {
    background-color: #345A7E;
    transform: scale(1.1); /* Slightly enlarge on hover */
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
    color: #E0F4FF; /* Light blue */
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
/* Social Media Icons */
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
    transition: background-color 0.3s, transform 0.3s; /* Added transition for animations */
}
.social-icons a:hover {
    background-color: #345A7E;
    transform: scale(1.1); /* Slightly enlarge on hover */
}
/* Footer message button */
.footer-button {
    position: fixed;
    bottom: 20px;
    right: 20px;
    background-color: #41729F; /* Semi-blue */
    color: white;
    padding: 15px;
    border-radius: 50%;
    cursor: pointer;
    font-size: 1em;
    transition: background-color 0.3s, transform 0.3s; /* Added transition for button animations */
}
.footer-button:hover {
    background-color: #345A7E;
    transform: scale(1.1); /* Slightly enlarge on hover */
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
    color: #E0F4FF; /* Light blue */
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
/* Social Media Icons */
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
    transition: background-color 0.3s, transform 0.3s; /* Added transition for animations */
}
.social-icons a:hover {
    background-color: #345A7E;
    transform: scale(1.1); /* Slightly enlarge on hover */
}
/* Footer message button */
.footer-button {
    position: fixed;
    bottom: 20px;
    right: 20px;
    background-color: #41729F; /* Semi-blue */
    color: white;
    padding: 15px;
    border-radius: 50%;
    cursor: pointer;
    font-size: 1em;
    transition: background-color 0.3s, transform 0.3s; /* Added transition for button animations */
}
.footer-button:hover {
    background-color: #345A7E;
    transform: scale(1.1); /* Slightly enlarge on hover */
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
    color: #E0F4FF; /* Light blue */
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
/* Social Media Icons */
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
    transition: background-color 0.3s, transform 0.3s; /* Added transition for animations */
}
.social-icons a:hover {
    background-color: #345A7E;
    transform: scale(1.1); /* Slightly enlarge on hover */
}
/* Footer message button */
.footer-button {
    position: fixed;
    bottom: 20px;
    right: 20px;
    background-color: #41729F; /* Semi-blue */
    color: white;
    padding: 15px;
    border-radius: 50%;
    cursor: pointer;
    font-size: 1em;
    transition: background-color 0.3s, transform 0.3s; /* Added transition for button animations */
}
.footer-button:hover {
    background-color: #345A7E;
    transform: scale(1.1); /* Slightly enlarge on hover */
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
    color: #E0F4FF; /* Light blue */
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
/* Social Media Icons */
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
    transition: background-color 0.3s, transform 0.3s; /* Added transition for animations */
}
.social-icons a:hover {
    background-color: #345A7E;
    transform: scale(1.1); /* Slightly enlarge on hover */
}
/* Footer message button */
.footer-button {
    position: fixed;
    bottom: 20px;
    right: 20px;
    background-color: #41729F; /* Semi-blue */
    color: white;
    padding: 15px;
    border-radius: 50%;
    cursor: pointer;
    font-size: 1em;
    transition: background-color 0.3s, transform 0.3s; /* Added transition for button animations */
}
.footer-button:hover {
    background-color: #345A7E;
    transform: scale(1.1); /* Slightly enlarge on hover */
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
    color: #E0F4FF; /* Light blue */
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
/* Social Media Icons */
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
    transition: background-color 0.3s, transform 0.3s; /* Added transition for animations */
}
.social-icons a:hover {
    background-color: #345A7E;
    transform: scale(1.1); /* Slightly enlarge on hover */
}
/* Footer message button */
.footer-button {
    position: fixed;
    bottom: 20px;
    right: 20px;
    background-color: #41729F; /* Semi-blue */
    color: white;
    padding: 15px;
    border-radius: 50%;
    cursor: pointer;
    font-size: 1em;
    transition: background-color 0.3s, transform 0.3s; /* Added transition for button animations */
}
.footer-button:hover {
    background-color: #345A7E;
    transform: scale(1.1); /* Slightly enlarge on hover */
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
    color: #E0F4FF; /* Light blue */
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
/* Social Media Icons */
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
    transition: background-color 0.3s, transform 0.3s; /* Added transition for animations */
}
.social-icons a:hover {
    background-color: #345A7E;
    transform: scale(1.1); /* Slightly enlarge on hover */
}
/* Footer message button */
.footer-button {
    position: fixed;
    bottom: 20px;
    right: 20px;
    background-color: #41729F; /* Semi-blue */
    color: white;
    padding: 15px;
    border-radius: 50%;
    cursor: pointer;
    font-size: 1em;
    transition: background-color 0.3s, transform 0.3s; /* Added transition for button animations */
}
.footer-button:hover {
    background-color: #345A7E;
    transform: scale(1.1); /* Slightly enlarge on hover */

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
    color: #E0F4FF; /* Light blue */
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
/* Social Media Icons */
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
    transition: background-color 0.3s, transform 0.3s; /* Added transition for animations */
}
.social-icons a:hover {
    background-color: #345A7E;
    transform: scale(1.1); /* Slightly enlarge on hover */
}
/* Footer message button */
.footer-button {
    position: fixed;
    bottom: 20px;
    right: 20px;
    background-color: #41729F; /* Semi-blue */
    color: white;
    padding: 15px;
    border-radius: 50%;
    cursor: pointer;
    font-size: 1em;
    transition: background-color 0.3s, transform 0.3s; /* Added transition for button animations */
}
.footer-button:hover {
    background-color: #345A7E;
    transform: scale(1.1); /* Slightly enlarge on hover */
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
    color: #E0F4FF; /* Light blue */
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
/* Social Media Icons */
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
    transition: background-color 0.3s, transform 0.3s; /* Added transition for animations */
}
.social-icons a:hover {
    background-color: #345A7E;
    transform: scale(1.1); /* Slightly enlarge on hover */
}
/* Footer message button */
.footer-button {
    position: fixed;
    bottom: 20px;
    right: 20px;
    background-color: #41729F; /* Semi-blue */
    color: white;
    padding: 15px;
    border-radius: 50%;
    cursor: pointer;
    font-size: 1em;
    transition: background-color 0.3s, transform 0.3s; /* Added transition for button animations */
}
.footer-button:hover {
    background-color: #345A7E;
    transform: scale(1.1); /* Slightly enlarge on hover */
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
    color: #E0F4FF; /* Light blue */
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
/* Social Media Icons */
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
    transition: background-color 0.3s, transform 0.3s; /* Added transition for animations */
}
.social-icons a:hover {
    background-color: #345A7E;
    transform: scale(1.1); /* Slightly enlarge on hover */
}
/* Footer message button */
.footer-button {
    position: fixed;
    bottom: 20px;
    right: 20px;
    background-color: #41729F; /* Semi-blue */
    color: white;
    padding: 15px;
    border-radius: 50%;
    cursor: pointer;
    font-size: 1em;
    transition: background-color 0.3s, transform 0.3s; /* Added transition for button animations */
}
.footer-button:hover {
    background-color: #345A7E;
    transform: scale(1.1); /* Slightly enlarge on hover */
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
    color: #E0F4FF; /* Light blue */
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
/* Social Media Icons */
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
    transition: background-color 0.3s, transform 0.3s; /* Added transition for animations */
}
.social-icons a:hover {
    background-color: #345A7E;
    transform: scale(1.1); /* Slightly enlarge on hover */
}
/* Footer message button */
.footer-button {
    position: fixed;
    bottom: 20px;
    right: 20px;
    background-color: #41729F; /* Semi-blue */
    color: white;
    padding: 15px;
    border-radius: 50%;
    cursor: pointer;
    font-size: 1em;
    transition: background-color 0.3s, transform 0.3s; /* Added transition for button animations */
}
.footer-button:hover {
    background-color: #345A7E;
    transform: scale(1.1); /* Slightly enlarge on hover */
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
    color: #E0F4FF; /* Light blue */
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
/* Social Media Icons */
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
    transition: background-color 0.3s, transform 0.3s; /* Added transition for animations */
}
.social-icons a:hover {
    background-color: #345A7E;
    transform: scale(1.1); /* Slightly enlarge on hover */
}
/* Footer message button */
.footer-button {
    position: fixed;
    bottom: 20px;
    right: 20px;
    background-color: #41729F; /* Semi-blue */
    color: white;
    padding: 15px;
    border-radius: 50%;
    cursor: pointer;
    font-size: 1em;
    transition: background-color 0.3s, transform 0.3s; /* Added transition for button animations */
}
.footer-button:hover {
    background-color: #345A7E;
    transform: scale(1.1); /* Slightly enlarge on hover */

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
    color: #E0F4FF; /* Light blue */
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
/* Social Media Icons */
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
    transition: background-color 0.3s, transform 0.3s; /* Added transition for animations */
}
.social-icons a:hover {
    background-color: #345A7E;
    transform: scale(1.1); /* Slightly enlarge on hover */
}
/* Footer message button */
.footer-button {
    position: fixed;
    bottom: 20px;
    right: 20px;
    background-color: #41729F; /* Semi-blue */
    color: white;
    padding: 15px;
    border-radius: 50%;
    cursor: pointer;
    font-size: 1em;
    transition: background-color 0.3s, transform 0.3s; /* Added transition for button animations */
}
.footer-button:hover {
    background-color: #345A7E;
    transform: scale(1.1); /* Slightly enlarge on hover */
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
    color: #E0F4FF; /* Light blue */
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
/* Social Media Icons */
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
    transition: background-color 0.3s, transform 0.3s; /* Added transition for animations */
}
.social-icons a:hover {
    background-color: #345A7E;
    transform: scale(1.1); /* Slightly enlarge on hover */
}
/* Footer message button */
.footer-button {
    position: fixed;
    bottom: 20px;
    right: 20px;
    background-color: #41729F; /* Semi-blue */
    color: white;
    padding: 15px;
    border-radius: 50%;
    cursor: pointer;
    font-size: 1em;
    transition: background-color 0.3s, transform 0.3s; /* Added transition for button animations */
}
.footer-button:hover {
    background-color: #345A7E;
    transform: scale(1.1); /* Slightly enlarge on hover */

            
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

    <!-- Profil Section -->
    <div class="profil-container">
        <h2 class="profil-title">PROFIL SDN SUKAHAYU</h2>
        <div class="profil-content">
            <h3 onclick="toggleContent(this)">Visi</h3>
            <p>“Terwujudnya peserta didik yang berakhlak mulia, inovatif dan berprestasi sebagai generasi pembelajar sepanjang hayat dengan Profil Pelajar Pancasila”</p>
            <h3 onclick="toggleContent(this)">Misi</h3>
            <ul>
                <li>Menanamkan akhlak mulia melalui pendidikan agama sesuai agama peserta didik.</li>
                <li>Mengembangkan program inovasi sesuai dengan perubahan.</li>
                <li>Memfasilitasi prestasi peserta didik sesuai minat dan bakat.</li>
                <li>Merancang pembelajaran menarik yang mendorong semangat belajar.</li>
                <li>Mengimplementasikan Profil Pelajar Pancasila dalam kegiatan belajar mengajar.</li>
            </ul>
        </div>
    </div>

    <!-- Flexbox Gambar -->
    <div class="flex-container">
        <div class="flex-item"><img src="ppdb.php/flex1.jpg" alt="Gambar 1"></div>
        <div class="flex-item"><img src="ppdb.php/flex2.jpg" alt="Gambar 2"></div>
        <div class="flex-item"><img src="ppdb.php/flex3.jpg" alt="Gambar 3"></div>
    </div>

    <!-- Footer -->
     <!-- Footer Section -->
<footer>
    <div class="footer-container">
        <!-- Address Section -->
        <div class="footer-item">
            <h3>Alamat Sekolah</h3>
            <p>Jl. Jambu No.2, Kecamatan Jambu, Kabupaten XYZ, Jawa Tengah</p>
        </div>
        
        <!-- Contact Information -->
        <div class="footer-item">
            <h3>Kontak Kami</h3>
            <p>Telepon: (021) 123-4567<br>Email: info@sdn2jambu.sch.id</p>
        </div>
        
        <!-- Social Media Links -->
        <div class="footer-item">
            <h3>Ikuti Kami</h3>
            <div class="social-icons">
                <a href="#" target="_blank">&#x1F426;</a> <!-- Twitter Icon -->
                <a href="#" target="_blank">&#x1F4F1;</a> <!-- Facebook Icon -->
                <a href="#" target="_blank">&#x1F4F7;</a> <!-- Instagram Icon -->
                <a href="#" target="_blank">&#x1F4F2;</a> <!-- LinkedIn Icon -->
            </div>
        </div>
    </div>
</footer>
    
    
    
    
    
    
    
    
    
    

    <script>
        function toggleContent(element) {
            element.classList.toggle("active");
        }
    </script>
</body>
</html>
