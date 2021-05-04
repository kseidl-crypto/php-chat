<?php
//Zu tun: mit JS aktualisierung des Clientens
//        Benutzer von der anderen Seite holen

date_default_timezone_set("Europe/Vienna");

$benutzer = $_SESSION['benutzer'];
echo $benutzer;
$time = time();
$datum = date("d.m.Y",$time);
$uhrzeit = date("H:i",$time);
$text = $_POST['text'];

//in einen String alle Werte gespeichert
//voherigen Werte dazugehängt
$text = file_get_contents('./Dateien/Nachrichten.txt')."$datum\n$benutzer, $time - \"$text\"\n";


file_put_contents('./Dateien/Nachrichten.txt', "$datum\n$benutzer, $time - \"$text\"\n",
    FILE_APPEND);


//Text ausgegeben
function nachrichten(){
    ob_end_clean();
    echo file_get_contents('./Dateien/Nachrichten.txt');
}



?>