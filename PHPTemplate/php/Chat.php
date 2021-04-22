<?php
//Zu tun: mit JS aktualisierung des Clientens

date_default_timezone_set("Europe/Vienna");

$benutzer = $_POST('benutzer2');
$time = time();
$datum = date("d.m.Y",$time);
$uhrzeit = date("H:i",$time);
$text = $_POST('text');

//in einen String alle Werte gespeichert
//voherigen Werte dazugehängt
$text = file_get_contents('../Dateien/Nachrichten.txt')."$datum\n$benutzer, $time - \"$text\"\n";


$handle = fopen('test.txt',"r+" );
//in File text geschrieben
fwrite($handle, $text);


fclose($handle);


//Text ausgegeben
echo file_get_contents('test.txt');


?>