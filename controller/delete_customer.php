<?php
require('../db/database.php');
$db = new Database();

//memanggil data no dengan GET
$id_cus = $_GET['id_cus'];

//query delete
$db->query('DELETE FROM customers WHERE id_cus=:id_cus');

$db->bind(':id_cus', $id_cus);

$db->execute();

header("Location: ../data_customer.php");
