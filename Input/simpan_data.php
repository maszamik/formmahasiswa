<?php

$host="localhost";
$username="mikserve_1";
$password="mikserve_123456789";
$dbname = "mikserve_1";

// Membuat Koneksi
$conn = mysqli_connect($host, $username, $password, $dbname) or die("Koneksi gagal dibangun dan Database tidak dapat dibuka");

$nama          = $_POST['nama'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$alamat        = $_POST['alamat'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$jurusan       = $_POST['jurusan'];

$foto = '';
$target_dir = "uploads/";
$file_name = $_FILES["foto"]["name"];
$target_file = $target_dir . $file_name;

if($file_name){
    $uploaded = move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file);
    if($uploaded){
        $foto = $file_name;
    }
}


$tambah = mysqli_query($conn, "INSERT INTO mahasiswa VALUES ('', '$nama', '$tanggal_lahir', '$alamat', '$jenis_kelamin', '$jurusan', '$foto')")or die("Proses simpan ke database gagal");


?>