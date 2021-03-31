<?php

//Wert von index-seite geholt und in Variablen gespeichert
$vorname = $_POST['vorname'];
$nachname = $_POST['nachname'];
$email = $_POST['email'];
$benutzer = $_POST['benutzername'];
$passwd = $_POST['passwort'];



$user = new Benutzer();
$user ->nachname="Herbert";
echo "". $user -> getNachname() ;
?>