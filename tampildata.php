<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f9f9f9;
      color: #333;
      margin: 0;
      padding: 0;
    }
    .container {
      width: 90%;
      max-width: 1200px;
      margin: 20px auto;
      background-color: #fff;
      padding: 20px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      border-radius: 5px;
    }
    h3 {
      text-align: center;
      margin-bottom: 20px;
      color: #4CAF50;
    }
    .table-wrapper {
      overflow-x: auto;
    }
    .data-table {
      width: 100%;
      border-collapse: collapse;
      table-layout: auto; /* Adjust column width automatically */
    }
    .data-table th, .data-table td {
      padding: 10px;
      border: 1px solid #ddd;
      text-align: left;
    }
    .data-table th {
      background-color: #4CAF50;
      color: white;
    }
    .data-table tr:nth-child(even) {
      background-color: #f2f2f2;
    }
    .data-table img {
      width: 80px;
      height: auto;
      border-radius: 5px;
    }
    .buttons {
      text-align: center;
      margin-top: 20px;
    }
    .btn_kembali {
      background-color: #4CAF50;
      color: white;
      padding: 10px 20px;
      text-decoration: none;
      border-radius: 5px;
      transition: background-color 0.3s;
    }
    .btn_kembali:hover {
      background-color: #45a049;
    }
    @media (max-width: 768px) {
      .data-table th, .data-table td {
        font-size: 12px;
        padding: 8px;
      }
      .data-table img {
        width: 60px;
      }
    }
  </style>
  <title>Data Pendaftar</title>
</head>
<body>
  <div class="container">
    <h3>Data Pendaftar</h3>
    <div class="table-wrapper">
      <table class="data-table">
        <tr>
          <th>No</th>
          <th>Nama Lengkap</th>
          <th>Tanggal Lahir</th>
          <th>Jenis Kelamin</th>
          <th>Alamat</th>
          <th>Nomor Telepon</th>
          <th>Nama Ayah</th>
          <th>Nama Ibu</th>
          <th>Pekerjaan Ayah</th>
          <th>Pekerjaan Ibu</th>
          <th>Pendidikan Ayah</th>
          <th>Pendidikan Ibu</th>
          <th>Alamat Orang Tua/Wali</th>
          <th>Nomor Telepon Orang Tua/Wali</th>
          <th>Nama Sekolah TK/RA</th>
          <th>Alamat Sekolah TK/RA</th>
          <th>Tahun Lulus</th>
          <th>Tanda Tangan Orang Tua/Wali</th>
          <th>Persetujuan Terhadap Aturan Sekolah</th>
          <th>Riwayat Kesehatan Anak</th>
          <th>Vaksinasi Yang Telah Dilakukan</th>
          <th>Informasi Alergi/Kondisi Kesehatan Khusus</th>
          <th>Akta Kelahiran</th>
          <th>KTP Orang Tua/Wali</th>
          <th>Kartu Keluarga</th>
          <th>Pas Foto</th>
          <th>Tanggal Daftar</th>
        </tr>
        <?php
          // Fetch the data from the database
          include "koneksi.php";
          $result = $koneksi->query("SELECT * FROM ppdb_form ORDER BY created_at DESC");
          $no = 1;

          // Loop over the data
          while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $no++ . "</td>";
            echo "<td>" . htmlspecialchars($row['full_name']) . "</td>";
            echo "<td>" . htmlspecialchars($row['dob']) . "</td>";
            echo "<td>" . htmlspecialchars($row['gender']) . "</td>";
            echo "<td>" . nl2br(htmlspecialchars($row['address'])) . "</td>";
            echo "<td>" . htmlspecialchars($row['phone_number']) . "</td>";
            echo "<td>" . htmlspecialchars($row['father_name']) . "</td>";
            echo "<td>" . htmlspecialchars($row['mother_name']) . "</td>";
            echo "<td>" . htmlspecialchars($row['father_job']) . "</td>";
            echo "<td>" . htmlspecialchars($row['mother_job']) . "</td>";
            echo "<td>" . htmlspecialchars($row['father_education']) . "</td>";
            echo "<td>" . htmlspecialchars($row['mother_education']) . "</td>";
            echo "<td>" . nl2br(htmlspecialchars($row['guardian_address'])) . "</td>";
            echo "<td>" . htmlspecialchars($row['guardian_phone']) . "</td>";
            echo "<td>" . htmlspecialchars($row['previous_school_name']) . "</td>";
            echo "<td>" . htmlspecialchars($row['previous_school_address']) . "</td>";
            echo "<td>" . htmlspecialchars($row['graduation_year']) . "</td>";
            echo "<td>" . htmlspecialchars($row['parent_signature']) . "</td>";
            echo "<td>" . htmlspecialchars($row['school_rules_agreement']) . "</td>";
            echo "<td>" . htmlspecialchars($row['health_history']) . "</td>";
            echo "<td>" . htmlspecialchars($row['vaccination']) . "</td>";
            echo "<td>" . nl2br(htmlspecialchars($row['allergies'])) . "</td>";
            echo "<td><img src='assets/images/" . htmlspecialchars($row['birth_certificate']) . "' alt='Akta Kelahiran'></td>";
            echo "<td><img src='assets/images/" . htmlspecialchars($row['ktp']) . "' alt='KTP'></td>";
            echo "<td><img src='assets/images/" . htmlspecialchars($row['family_card']) . "' alt='Kartu Keluarga'></td>";
            echo "<td><img src='assets/images/" . htmlspecialchars($row['passport_photo']) . "' alt='Pas Foto'></td>";
            echo "<td>" . htmlspecialchars($row['created_at']) . "</td>";
            echo "</tr>";
          }
        ?>
      </table>
    </div>
  </div>
  <div class="buttons">
    <a href="logout.php" class="btn_kembali">logout</a>
  </div>
</body>
</html>
