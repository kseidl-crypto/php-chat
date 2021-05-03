<?php





$json = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=6LeIxAcTAAAAAGG-vFI1TnRWxMZNFuojJ4WifJWe&response='.$_POST['g-recaptcha-response']);
$data = json_decode($json);

//var_dump($data);

//Wert von index-seite geholt und in Variablen gespeichert
$vorname = $_POST['vorname'];
$nachname = $_POST['nachname'];
$email = $_POST['email'];
$benutzer = $_POST['benutzer'];
$pass= $_POST['passwort'];
$passwd = password_hash($pass, PASSWORD_DEFAULT);
$user = array($vorname, $nachname, $email, $benutzer, $passwd);


//semikolon als Trennzeichen, Variablen verbinden
$eintrag = implode(";", $user) . "\r\n";
//!!!!!Schaun, ob es überschrieben wird!!! Und ob Dateipfad stimmt!!!
//Ende hinzugefügt

file_put_contents("./Dateien/Text.txt", $eintrag, FILE_APPEND);
echo "Registrierung abgeschlossen";
echo '<a href="LoginHTML.php">Login</a>';

?>