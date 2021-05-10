<?php

include '../Dateien/db_connection.php';
$conn = OpenCon();
$id = $_GET['id'];
//echo $id;
//intval($id);
//echo $id;

$um = $conn->query('Select frage, 
                            option1, 
                            option2, 
                            option3, 
                            Antwort1, 
                            Antwort2, 
                            Antwort3 
                            from umfrage.umfrage1 
                            where ID = '.$id)->fetchAll()[0];
//var_dump($um);


$frage = $um[0];
$option1 = $um[1];
$option2 = $um[2];
$option3 = $um[3];
$a1 = $um[4];
$a2 = $um[5];
$a3 = $um[6];
//var_dump($um);
if($id !=null) {
    if($id <= $conn->query('Select MAX(ID) from umfrage.umfrage1')->fetch()[0]){
        echo ' 
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Umfrage Ergebnisse</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/chat.css">
</head>
<body>
<div class="container" id="messages">
    <div class="row" id="header">
            <a href="Chat.php" class="col">Chat</a>
            <a href="./Umfrage/UmfrageHTML.php" class="col">Umfragen</a>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col">
            <h1>Umfrage - '.$frage.'</h1>
        </div>
    </div>
    <div class="row">
        <p class="col-1" >'.$option1.' - '.$a1.'</p>
    </div>
    <div class="row">
        <p class="col-1" >'.$option2.' - '.$a2.'</p>
    </div>
    <div class="row">
        <p class="col-1" >'.$option3.' - '.$a3.'</p>
    </div>
</div>
</body>
</html>
';
    }
    else{
        echo 'Pech :P';
    }
}
else{
    echo 'Pech :P';
}