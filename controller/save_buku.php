<?php
require('../db/database.php');
$db = new Database();

$no = $_POST['no_induk'];
$judul = $_POST['judul'];
$penulis = $_POST['penulis'];
$tahun = $_POST['tahun'];
$penerbit = $_POST['penerbit'];
$subject = $_POST['subject'];

$poto = null;
// mengambil data gambar
// cek gambar apa sudah ada
if(isset($_FILES["image"])){

    //mengambil data dari input iage ke fariabel $file
    $file = $_FILES['image']['tmp_name'];
    if ($file){
        //merubah gambar menjadi format base64 kemudian disimpan ke fariable $poto
        $poto = @base64_encode(file_get_contents($file));
    }
}

//--cara langsung
// $db->query("INSERT INTO books (no_induk, judul, penulis, tahun, penerbit, subject) VALUES ('$no', '$judul', '$penulis', '$tahun', '$penerbit', '$subject')");

//--Menggunakan BIND
$db->query('INSERT INTO books (no_induk, judul, penulis, tahun, penerbit, subjek, poto) VALUES (:no_induk, :judul, :penulis, :tahun, :penerbit, :subjek, :poto)');

$db->bind(':no_induk', $no);
$db->bind(':judul', $judul);
$db->bind(':penulis', $penulis);
$db->bind(':tahun', $tahun);
$db->bind(':penerbit', $penerbit);
$db->bind(':subjek', $subject);
$db->bind(':poto', $poto);

$db->execute();

header("Location: ../data_buku.php");
