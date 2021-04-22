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

echo $pw2;

$bool = false;
//foreach um alle Einträge durchzugehen
foreach($user AS $line){

    //Teilen bei Semikolon bei Line
    $userInfo = explode(";", $line);
   echo $userInfo[2].$userInfo[4];
   $upw = $userInfo[4];
   $uben = $userInfo[2];

    if(($pw2 == $upw)){

        $bool = true;

    }
    else{

       // echo 'Falsches Passwort oder Email';
    }
}


echo $bool;
?>