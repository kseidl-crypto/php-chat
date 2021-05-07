<?php
//Verbindung zur Datenbank aufbauen
include '../Dateien/db_connection.php';



$frage = $_POST['frage'];
$option1 = $_POST['option1'];
$option2 = $_POST['option2'];
$option3 = $_POST['option3'];

//Wie legt man jetzt Files an? und wie kann man darauf zugreifen?

$conn = OpenCon();
$var = 'Insert Into umfrage.umfrage1 ( Frage, Option1, Option2, Option3, Antwort1, Antwort2, Antwort3) 
                        VALUE ("'.$frage.'","'.$option1.'","'.$option2.'","'.$option3.'", 0, 0, 0)';
//var_dump($var);
$conn->query($var);


//alle zeile -> Array zurück
//$benutzer = $conn->query('SELECT * from user')->fetchAll();

//Max ist letzter Eintrag

$id = $conn->query('Select MAX(ID) from umfrage.umfrage1')->fetch();


echo '<a href="UmfrageFormular.php?id='.$id[0].'">Abschicken</a>';

?>