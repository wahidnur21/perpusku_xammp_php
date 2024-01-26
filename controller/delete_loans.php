<?php
require('../db/database.php');
$db = new Database();

//memanggil data no dengan GET
$id = $_GET['id'];

//query delete
$db->query('DELETE FROM loans WHERE id=:id');

$db->bind(':id', $id);

$db->execute();

header("Location: ../data_pinjam.php");
