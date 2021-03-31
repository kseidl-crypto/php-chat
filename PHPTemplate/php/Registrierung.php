<?php
//Zu tun: Passwort verschluesseln!
//        überprüfen
//        weiterleiten auf loggin seite
//        Captcha



//Wert von index-seite geholt und in Variablen gespeichert
$vorname = $_POST['vorname'];
$nachname = $_POST['nachname'];
$email = $_POST['email'];
$benutzer = $_POST['benutzername'];
$passwd = $_POST['passwort'];
$user = array($vorname, $nachname, $email, $benutzer, $passwd, $passwd);

//checkt, ob variablen leer sind
if( ! empty($vorname)  AND ! empty($nachname) AND ! empty($email) AND ! empty($benutzer) AND ! empty($passwd)){
    //semikolon als Trennzeichen, Variablen verbinden
    $eintrag  = implode (";", $user)."\r\n";
    //!!!!!Schaun, ob es überschrieben wird!!! Und ob Dateipfad stimmt!!!
    //Ende hinzugefügt
    file_put_contents("../Dateien/Text.txt", $eintrag, FILE_APPEND);
    echo "Registrierung abgeschlossen";
}else{
    echo "Bitte alle Felder ausfüllen";
}


?>