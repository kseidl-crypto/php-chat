<?php
//Verbindung zur Datenbank aufbauen
include '../Dateien/db_connection.php';



$frage = $_POST['frage'];
$option1 = $_POST['option1'];
$option2 = $_POST['option2'];
$option3 = $_POST['option3'];

//Wie legt man jetzt Files an? und wie kann man darauf zugreifen?

$conn = OpenCon();


$conn->query('Insert Into umfrage.umfrage1(ID, Frage, Option1, Option2, Option3, Antwort1, Antwort2, Antwort3) 
                        VALUE (1,'.$frage.','.$option1.','.$option2.','.$option3.', 0, 0, 0)');



?>