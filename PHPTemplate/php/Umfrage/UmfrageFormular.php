<?php
//Umfrage für andere anzeigen lassen
include '../Dateien/db_connection.php';
$conn = OpenCon();
$id = $_GET['id'];
echo $id;
intval($id);
echo $id;

$um = $conn->query('Select * from umfrage.umfrage1 where ID = '.$id)->fetchAll();
var_dump($um);

?>