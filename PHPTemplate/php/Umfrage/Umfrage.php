<?php
$frage = $_POST['frage'];
$option1 = $_POST['option1'];
$option2 = $_POST['option2'];
$option3 = $_POST['option3'];

//Wie legt man jetzt Files an? und wie kann man darauf zugreifen?

echo '<!DOCTYPE html>
<html lang="en">
<head>
    <title>Umfrage</title>
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
<form action="UmfrageAusfüllen.php.php" method="POST">
<div class="form-group">
        <label class="control-label col-sm-2" for="frage">$frage:</label>
   </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="option1">Option 1:</label>
        <div class="col-sm-10">
            <input type="radio" class="form-control" id="option1" name="option1" value="$option1">
        </div>
   
</form>
</body>
</html>';
?>