<?php
require('../db/database.php');
$db = new Database();

//mengambil data NO dengan POST
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

if ($poto){
//querry update
$db->query('UPDATE books SET judul = :judul, penulis= :penulis, tahun= :tahun, penerbit= :penerbit, subjek= :subjek, poto = :poto WHERE no_induk = :no_induk');

//bindig data querry dgn variable
$db->bind(':no_induk', $no);
$db->bind(':judul', $judul);
$db->bind(':penulis', $penulis);
$db->bind(':tahun', $tahun);
$db->bind(':penerbit', $penerbit);
$db->bind(':subjek', $subject);
$db->bind(':poto', $poto);
} else {
    // buat query utk melakukan UPDATE data di tabel
    $db->query('UPDATE books SET judul = :judul, penulis= :penulis, tahun= :tahun, penerbit= :penerbit, subjek= :subjek, WHERE no_induk = :no_induk');

    //bindig data querry
$db->bind(':no_induk', $no);
$db->bind(':judul', $judul);
$db->bind(':penulis', $penulis);
$db->bind(':tahun', $tahun);
$db->bind(':penerbit', $penerbit);
$db->bind(':subjek', $subject);
}

$db->execute();


 header("Location: ../data_buku.php");
