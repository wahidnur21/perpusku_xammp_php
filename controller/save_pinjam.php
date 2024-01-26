<?php
require('../db/database.php');
$db = new Database();

$no = $_POST['no_induk'];
$id_cus = $_POST['id_cus'];

//--cara langsung
// $db->query("INSERT INTO books (no_induk, judul, penulis, tahun, penerbit, subject) VALUES ('$no', '$judul', '$penulis', '$tahun', '$penerbit', '$subject')");

//--Menggunakan BIND
$db->query('INSERT INTO loans (id_cus, no_induk, start_date) VALUES (:id_cus, :no_induk, now())');

$db->bind(':id_cus', $id_cus);
$db->bind(':no_induk', $no);



$db->execute();

header("Location: ../data_pinjam.php");
