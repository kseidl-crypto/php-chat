<?php

include '../Dateien/db_connection.php';
$conn = OpenCon();
$id = $_GET['id'];
//echo $id;
//intval($id);
//echo $id;

$um = $conn->query('Select frage, option1, option2, option3, Antwort1, Antwort2, Antwort3 from umfrage.umfrage1 where ID = '.$id)->fetchAll()[0];



$frage = $um[0];
$option1 = $um[1];
$option2 = $um[2];
$option3 = $um[3];
$a1 = $um[4];
$a2 = $um[5];
$a3 = $um[6];
var_dump($um);
if($id !=null) {
    if($id <= $conn->query('Select MAX(ID) from umfrage.umfrage1')->fetch()[0]){
        echo ' 
    <!DOCTYPE html>
<html lang="en">
<head>
    <title>Umfrage erstellen</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>

<body>
<div class="row">
    <div class="col-sm-1">
        <h1>Umfrage</h1>
    </div>
</div>

    <div class="form-group">
        <label class="control-label col-sm-2" >'.$frage.'</label>
    </div>
    
    <div class="form-group">
        <label class="control-label col-sm-2" >'.$option1.'</label>
        <div class="col-sm-10">
            <label>'.$a1.'</label>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" >'.$option2.'</label>
        <div class="col-sm-10">
            <label>'.$a2.'</label>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" >'.$option3.'</label>
        <div class="col-sm-10">
           <label>'.$a3.'</label>
        </div>
    </div>
    
   

';
    }
    else{
        echo 'Pech';
    }
}
else{
    echo 'Pech';
}

?>