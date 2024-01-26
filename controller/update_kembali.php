<?php
require('../db/database.php');
$db = new Database();

//mengambil data NO dengan POST
$id = $_POST['id'];
$denda = $_POST['denda'];
$ket = $_POST['ket'];


    // buat query utk melakukan UPDATE data di tabel
    $db->query('UPDATE loans SET end_date = now(), denda= :denda, ket= :ket WHERE id = :id');

    //bindig data querry
$db->bind(':id', $id);
$db->bind(':denda', $denda);
$db->bind(':ket', $ket);


$db->execute();


 header("Location: ../data_pinjam.php");
