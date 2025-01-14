<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pendaftaran Peserta Didik Baru</title>
    <style>
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

        body {
            font-family: Arial, sans-serif;
            background-color: #eef4fb;
            color: #34495e;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h3, h4 {
            text-align: center;
            color: #3d7cf7;
            margin-bottom: 20px;
        }

        .forms {
            margin-bottom: 15px;
        }

        .forms label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        .forms input,
        .forms select,
        .forms textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #d3d3d3;
            border-radius: 5px;
            font-size: 14px;
            transition: border-color 0.3s ease;
        }

        .forms input:focus,
        .forms select:focus,
        .forms textarea:focus {
            outline: none;
            border-color: #3d7cf7;
        }

        .buttons {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-top: 20px;
        }

        .btn_tambah {
            background-color: #3d7cf7;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn_tambah:hover {
            background-color: #2859c4;
        }

        .btn_kembali {
            background-color: #ec4545;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            font-weight: bold;
            text-decoration: none;
            display: inline-block;
            text-align: center;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn_kembali:hover {
            background-color: #c93232;
        }

    </style>
</head>

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
    <h3>Formulir Pendaftaran Peserta Didik Baru</h3>
    
    <form method="post" enctype="multipart/form-data">
        <!-- General Information -->
        <h4>Formulir Pendaftaran Peserta Didik Baru</h4>
        
        <div class="forms">
            <label for="full_name">Nama Lengkap</label>
            <input type="text" name="full_name" id="full_name" required>
        </div>
        <div class="forms">
            <label for="dob">Tanggal Lahir</label>
            <input type="date" name="dob" id="dob" required>
        </div>
        <div class="forms">
            <label for="gender">Jenis Kelamin</label>
            <select name="gender" id="gender" required>
                <option value="Laki-Laki">Laki-Laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </div>
        <div class="forms">
            <label for="address">Alamat</label>
            <textarea name="address" id="address" required></textarea>
        </div>
        <div class="forms">
            <label for="phone_number">Nomor Telepon</label>
            <input type="text" name="phone_number" id="phone_number" required>
        </div>

        <!-- Parent/Guardian Information -->
        <h4>Formulir Data Orang Tua/Wali</h4>

        <div class="forms">
            <label for="father_name">Nama Ayah</label>
            <input type="text" name="father_name" id="father_name" required>
        </div>
        <div class="forms">
            <label for="mother_name">Nama Ibu</label>
            <input type="text" name="mother_name" id="mother_name" required>
        </div>
        <div class="forms">
            <label for="father_job">Pekerjaan Ayah</label>
            <input type="text" name="father_job" id="father_job" required>
        </div>
        <div class="forms">
            <label for="mother_job">Pekerjaan Ibu</label>
            <input type="text" name="mother_job" id="mother_job" required>
        </div>
        <div class="forms">
            <label for="father_education">Pendidikan Terakhir Ayah</label>
            <input type="text" name="father_education" id="father_education" required>
        </div>
        <div class="forms">
            <label for="mother_education">Pendidikan Terakhir Ibu</label>
            <input type="text" name="mother_education" id="mother_education" required>
        </div>
        <div class="forms">
            <label for="guardian_address">Alamat Orang Tua/Wali</label>
            <textarea name="guardian_address" id="guardian_address" required></textarea>
        </div>
        <div class="forms">
            <label for="guardian_phone">Nomor Telepon Orang Tua/Wali</label>
            <input type="text" name="guardian_phone" id="guardian_phone" required>
        </div>

        <!-- Previous School Information -->
        <h4>Formulir Data Sekolah Sebelumnya</h4>

        <div class="forms">
            <label for="previous_school_name">Nama Sekolah TK/RA</label>
            <input type="text" name="previous_school_name" id="previous_school_name" required>
        </div>
        <div class="forms">
            <label for="previous_school_address">Alamat Sekolah TK/RA</label>
            <input type="text" name="previous_school_address" id="previous_school_address" required>
        </div>
        <div class="forms">
            <label for="graduation_year">Tahun Lulus</label>
            <input type="text" name="graduation_year" id="graduation_year" required>
        </div>

        <!-- Parent/Guardian Consent -->
        <h4>Formulir Persetujuan Orang Tua/Wali</h4>

        <div class="forms">
            <label for="parent_signature">Tanda Tangan Orang Tua/Wali</label>
            <input type="text" name="parent_signature" id="parent_signature" required>
        </div>
        <div class="forms">
            <label for="school_rules_agreement">Pernyataan Setuju Terhadap Aturan Sekolah</label>
            <select name="school_rules_agreement" id="school_rules_agreement" required>
                <option value="Setuju">Setuju</option>
                <option value="Tidak Setuju">Tidak Setuju</option>
            </select>
        </div>

        <!-- Health Form -->
        <h4>Formulir Kesehatan</h4>

        <div class="forms">
            <label for="health_history">Riwayat Kesehatan Anak</label>
            <textarea name="health_history" id="health_history" required></textarea>
        </div>
        <div class="forms">
            <label for="vaccination">Vaksinasi Yang Telah Dilakukan</label>
            <input type="text" name="vaccination" id="vaccination" required>
        </div>
        <div class="forms">
            <label for="allergies">Informasi Alergi/Kondisi Kesehatan Khusus</label>
            <textarea name="allergies" id="allergies" required></textarea>
        </div>

        <!-- Document Attachments -->
        <h4>Lampiran Dokumen</h4>

        <div class="forms">
            <label for="birth_certificate">Fotokopi Akta Kelahiran</label>
            <input type="file" name="birth_certificate" accept="image/*" required>
        </div>
        <div class="forms">
            <label for="ktp">Fotokopi KTP Orang Tua/Wali</label>
            <input type="file" name="ktp" accept="image/*" required>
        </div>
        <div class="forms">
            <label for="family_card">Fotokopi Kartu Keluarga</label>
            <input type="file" name="family_card" accept="image/*" required>
        </div>
        <div class="forms">
            <label for="passport_photo">Pas Foto Ukuran 3x4 atau 4x6</label>
            <input type="file" name="passport_photo" accept="image/*" required>
        </div>

        <!-- Submit Button -->
        <div class="buttons">
            <button class="btn_tambah" type="submit" name="submit">Daftar</button>
            <a href="beranda.php" class="btn_kembali">Kembali</a>
        </div>
    </form>
</div>

<script src="assets/script.js"></script>

<?php
include "koneksi.php";

// Insert data into the database when form is submitted
if (isset($_POST['submit'])) {
    // Retrieve form data
    $full_name = $_POST['full_name'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $phone_number = $_POST['phone_number'];
    $father_name = $_POST['father_name'];
    $mother_name = $_POST['mother_name'];
    $father_job = $_POST['father_job'];
    $mother_job = $_POST['mother_job'];
    $father_education = $_POST['father_education'];
    $mother_education = $_POST['mother_education'];
    $guardian_address = $_POST['guardian_address'];
    $guardian_phone = $_POST['guardian_phone'];
    $previous_school_name = $_POST['previous_school_name'];
    $previous_school_address = $_POST['previous_school_address'];
    $graduation_year = $_POST['graduation_year'];
    $parent_signature = $_POST['parent_signature'];
    $school_rules_agreement = $_POST['school_rules_agreement'];
    $health_history = $_POST['health_history'];
    $vaccination = $_POST['vaccination'];
    $allergies = $_POST['allergies'];

    // Handle file uploads
    $birth_certificate = $_FILES['birth_certificate']['name'];
    $ktp = $_FILES['ktp']['name'];
    $family_card = $_FILES['family_card']['name'];
    $passport_photo = $_FILES['passport_photo']['name'];

    // File upload paths
    $tmp_birth_certificate = $_FILES['birth_certificate']['tmp_name'];
    $tmp_ktp = $_FILES['ktp']['tmp_name'];
    $tmp_family_card = $_FILES['family_card']['tmp_name'];
    $tmp_passport_photo = $_FILES['passport_photo']['tmp_name'];

    $timestamp = time();
    $newNameBirth = $timestamp . $birth_certificate;
    $newNameKTP = $timestamp . $ktp;
    $newNameFamily = $timestamp . $family_card;
    $newNamePhoto = $timestamp . $passport_photo;

    // Insert data into the ppdb table
    $koneksi->query("INSERT INTO ppdb_form(full_name, dob, gender, address, phone_number, father_name, mother_name, father_job, mother_job, father_education, mother_education, guardian_address, guardian_phone, previous_school_name, previous_school_address, graduation_year, parent_signature, school_rules_agreement, health_history, vaccination, allergies, birth_certificate, ktp, family_card, passport_photo) 
    VALUES('$full_name', '$dob', '$gender', '$address', '$phone_number', '$father_name', '$mother_name', '$father_job', '$mother_job', '$father_education', '$mother_education', '$guardian_address', '$guardian_phone', '$previous_school_name', '$previous_school_address', '$graduation_year', '$parent_signature', '$school_rules_agreement', '$health_history', '$vaccination', '$allergies', '$newNameBirth', '$newNameKTP', '$newNameFamily', '$newNamePhoto')");
    
    // Move uploaded files to the proper directory
    move_uploaded_file($tmp_birth_certificate, 'assets/images/' . $newNameBirth);
    move_uploaded_file($tmp_ktp, 'assets/images/' . $newNameKTP);
    move_uploaded_file($tmp_family_card, 'assets/images/' . $newNameFamily);
    move_uploaded_file($tmp_passport_photo, 'assets/images/' . $newNamePhoto);

    echo "<script>alert('Pendaftaran berhasil!');window.location.replace('index.php');</script>";
}
?>
