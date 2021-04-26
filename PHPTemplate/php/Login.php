<?php

//Zu tun: Session
//        passwort entschluesseln
//        zu Chat weiterleiten
//



//überprüfung durch benutzernamen und passwort
session_start();

$benutzer2 = $_POST['benutzer2'];
$pw2 = $_POST['passwort2'];

//laden alle Zeilen von text.txt
//!!!Dateipfad überprüfen!!!
$user = file("Dateien/Text.txt");


$bool = false;
//foreach um alle Einträge durchzugehen
foreach($user AS $line){

    //Teilen bei Semikolon bei Line
    $userInfo = explode(";", $line);

   $upw = str_replace(array("\r","\n"), "", $userInfo[4]);
   $uben = str_replace(array("\r","\n"), "", $userInfo[2]);

    if(($pw2 == $upw)&&($uben == $benutzer2)){
        $bool =true;
    }


}
if($bool){
    echo '<a href="ChatHTML.php">Chat</a>';
}
else{
    echo 'Falsches Passwort oder falsche Email';
}
?>