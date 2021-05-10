<?php
function OpenCon()
{
    $dbhost = "10.0.105.148";   //Deine IP-Adresse statt dbhost
    $dbuser = "umfrage";
    $dbpass = "umfrage";
    $db = "umfrage";
    $conn = new PDO('mysql:host=' . $dbhost . ';port=3306;dbname=' . $db, $dbuser, $dbpass);
    return $conn;
}
?>
