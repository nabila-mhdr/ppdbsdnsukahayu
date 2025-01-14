CREATE DATABASE formulir;

USE formulir;

CREATE TABLE data (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100),
    nisn VARCHAR(15),
    kartu_keluarga LONGBLOB,
    ktp_ortu LONGBLOB,
    pas_foto LONGBLOB,
    kia LONGBLOB,
    buku_imunisasi LONGBLOB,
    surat_domisili LONGBLOB,
    surat_rekomendasi LONGBLOB
);
