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

//$dat = str_replace(']',',',$dat);
//$dat = $dat."{\"user\":\"$benutzer\",\"date\":\"$datum\",\"text\":\"$text\"}]";

file_put_contents("./Dateien/Nachrichten.txt","$benutzer||$datum||$text\n", FILE_APPEND);
$dat = explode("\n", file_get_contents("./Dateien/Nachrichten.txt"));
echo implode("<br>",$dat);

//in einen String alle Werte gespeichert
//voherigen Werte dazugehängt
//$text = file_get_contents('./Dateien/Nachrichten.txt')."$datum\n$benutzer, $time - \"$text\"\n";

$json_arr[] = array(
    "user" => $benutzer,
    "date" => $datum,
    "text" => $text
);
//file_put_contents("./Dateien/Nachrichten.txt", json_encode($json_arr), FILE_APPEND);


//file_put_contents('./Dateien/Nachrichten.txt', "{\"benutzer\":\"$benutzer\"}",FILE_APPEND);


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
echo file_get_contents('./Dateien/Nachrichten.txt');

ob_end_flush();
*/
?>
<!DOCTYPE html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="./js/JSChat.js"></script>
</head>
<body>
</body>
</html>
