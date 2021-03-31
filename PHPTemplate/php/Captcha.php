<?php
//Captcha generieren
$permitted_chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';

//generiert ein Wort mit 5 Buchstaben als default
function generate_string($input, $strength = 5) {
    $input_length = strlen($input);
    $random_string = '';
    for($i = 0; $i < $strength; $i++) {
        //solange die max anzahl an buchstaben nicht erreicht ist, erstellt es einen random String aus den gegebenen Buchstaben
        $random_character = $input[mt_rand(0, $input_length - 1)];
        $random_string .= $random_character;
    }

    //returnt diesen String
    return $random_string;
}

$string_length = 6;
$captcha_string = generate_string($permitted_chars, $string_length);

//Bild für Captcha erstellen
//mit 200 x 50 px
$image = imagecreatetruecolor(200, 50);

imageantialias($image, true);

$colors = [];

//random farben für red, green und blue
$red = rand(125, 175);
$green = rand(125, 175);
$blue = rand(125, 175);

//Farben, die neu generiert werden, werden in ein array gepackt
//hellste farbe zuerst, dünkleste zuletzt
for($i = 0; $i < 5; $i++) {
    $colors[] = imagecolorallocate($image, $red - 20*$i, $green - 20*$i, $blue - 20*$i);
}

imagefill($image, 0, 0, $colors[0]);

//Vierecke zeichnen mit dicke von 2 bis 10
//Farben je nach random color
for($i = 0; $i < 10; $i++) {
    imagesetthickness($image, rand(2, 10));
    $rect_color = $colors[rand(1, 4)];
    imagerectangle($image, rand(-10, 190), rand(-10, 10), rand(-10, 190), rand(40, 60), $rect_color);
}



?>