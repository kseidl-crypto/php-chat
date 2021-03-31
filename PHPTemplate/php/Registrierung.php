<?php
//Zu tun: Passwort verschluesseln!
//        überprüfen
//        weiterleiten auf loggin seite
//        Button mit "bereits account vorhanden" oder so





//Wert von index-seite geholt und in Variablen gespeichert
$vorname = $_POST['vorname'];
$nachname = $_POST['nachname'];
$email = $_POST['email'];
$benutzer = $_POST['benutzername'];
$passwd = $_POST['passwort'];
$user = array($vorname, $nachname, $email, $benutzer, $passwd, $passwd);

//Schaut, ob captcha ausgefüllt wurde
if(isset($_POST['captcha_challenge']) && $_POST['captcha_challenge'] == $_SESSION['captcha_text']) {
    //checkt, ob variablen leer sind
    if (!empty($vorname) and !empty($nachname) and !empty($email) and !empty($benutzer) and !empty($passwd)) {
        //semikolon als Trennzeichen, Variablen verbinden
        $eintrag = implode(";", $user) . "\r\n";
        //!!!!!Schaun, ob es überschrieben wird!!! Und ob Dateipfad stimmt!!!
        //Ende hinzugefügt
        file_put_contents("../Dateien/Text.txt", $eintrag, FILE_APPEND);
        echo "Registrierung abgeschlossen";
    } else {
        echo "Bitte alle Felder ausfüllen";
    }
} else{
    echo "Captcha false";
}

?>