<?php
namespace chat;
session_start();
//Zu tun: mit JS aktualisierung des Clientens
//        Benutzer von der anderen Seite holen

date_default_timezone_set("Europe/Vienna");

$benutzer = $_SESSION['benutzer'];
$time = time();
$datum = date("d.m.Y",$time);
$uhrzeit = date("H:i",$time);
$text = $_POST['text'];

$dat = file_get_contents("./Dateien/Nachrichten.json");
$dat = str_replace(']',',',$dat);
$dat = $dat."{\"user\":\"$benutzer\",\"date\":\"$datum\",\"text\":\"$text\"}]";

file_put_contents("./Dateien/Nachrichten.json",$dat);


//in einen String alle Werte gespeichert
//voherigen Werte dazugehängt
//$text = file_get_contents('./Dateien/Nachrichten.json')."$datum\n$benutzer, $time - \"$text\"\n";

$json_arr[] = array(
    "user" => $benutzer,
    "date" => $datum,
    "text" => $text
);
//file_put_contents("./Dateien/Nachrichten.json", json_encode($json_arr), FILE_APPEND);


//file_put_contents('./Dateien/Nachrichten.json', "{\"benutzer\":\"$benutzer\"}",FILE_APPEND);


//Text ausgegeben
//function nachrichten(){
//    ob_end_clean();
 //   echo file_get_contents('./Dateien/Nachrichten.txt');
//}
/*
ob_start();
ob_flush();
ob_end_clean();
flush();
echo file_get_contents('./Dateien/Nachrichten.json');

ob_end_flush();
*/
