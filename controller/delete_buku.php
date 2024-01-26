<?php
require('../db/database.php');
$db = new Database();

//memanggil data no dengan GET
$no = $_GET['no'];

//query delete
$db->query('DELETE FROM books WHERE no_induk=:no_induk');

$db->bind(':no_induk', $no);

$db->execute();

header("Location: ../data_buku.php");
