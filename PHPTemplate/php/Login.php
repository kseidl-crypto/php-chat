<?php

//Zu tun: Session
//        passwort entschluesseln
//        zu Chat weiterleiten
//


session_start();

//überprüfung durch benutzernamen und passwort

$benutzer = $_POST('benutzer');
$pw = $_POST('passwort');

//laden alle Zeilen von text.txt
//!!!Dateipfad überprüfen!!!
$user = file("/Dateien/Text.txt");

//foreach um alle Einträge durchzugehen
foreach($user AS $line){
    //Teilen bei Semikolon bei Line
    $userInfo = explode(";", $line);
    if($userInfo[0] == $benutzer AND $userInfo[1] == $pw){
        //weiterleiten
    }
}

?>