<?php
session_start();
//Zu tun: Session
//        passwort entschluesseln
//        zu Chat weiterleiten
//



//überprüfung durch benutzernamen und passwort

$benutzer2 = $_POST['benutzer2'];
$pw2 = $_POST['passwort2'];

//laden alle Zeilen von text.txt
//!!!Dateipfad überprüfen!!!
$user = file("Dateien/Text.txt");


$bool = false;

if($benutzer2 != null && $pw2 != null){
    //Session
    $_SESSION['benutzer']= $_POST['benutzer2'];

//foreach um alle Einträge durchzugehen
    foreach($user AS $line){

        //Teilen bei Semikolon bei Line
        $userInfo = explode(";", $line);

        $upw = str_replace(array("\r","\n"), "", $userInfo[4]);

        $uben = str_replace(array("\r","\n"), "", $userInfo[2]);

        if((password_verify($pw2,$upw))&&($uben == $benutzer2)){
            $bool =true;
        }


    }
    if($bool){

        //!!!Variablen übergeben
        echo '<a href="Chat.php">Chat</a>';
        echo '<br>';
        echo ' <a href="Umfrage/UmfrageHTML.php">Umfrage erstellen</a>';
    }
    else{
        echo 'Falsches Passwort oder falsche Email';
    }
}
else{
    echo "nicht ausgefüllt";
}
?>