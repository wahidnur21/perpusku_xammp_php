<?php
require('../db/database.php');
$db = new Database();

//memanggil data no dengan GET
$username = $_GET['username'];

//query delete
$db->query('DELETE FROM admins WHERE username=:username');

$db->bind(':username', $username);

$db->execute();

header("Location: ../data_admin.php");
