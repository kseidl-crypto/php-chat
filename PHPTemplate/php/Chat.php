<?php
namespace chat;
session_start();
date_default_timezone_set("Europe/Vienna");

$benutzer = $_SESSION['benutzer'];
$time = time();
$datum = date("d.m.Y",$time);
$text = $_POST['wtext'];

file_put_contents("./Dateien/Nachrichten.txt","\n$benutzer||$datum||$text", FILE_APPEND);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Chat</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="./css/chat.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="./js/JSChat.js"></script>
</head>
<body  onload="setup()">
<div class="container" id="messages">
    <div class="row" id="header">
        <a href="Chat.php" class="col">Chat</a>
        <a href="./Umfrage/UmfrageHTML.php" class="col">Umfragen</a>
    </div>
</div>
  <div class="container" id="messages">
    <div class="row mes">
      <div class="col-12">
          <h6 class="mheader">User - Date</h6>
      </div>
      <div class="col-12 mtext">
        <p class="text">Text</p>
      </div>
    </div>
  </div>

  <form action="Chat.php" method="POST">
      <div class="form-group">
          <label class="control-label col-sm-2" >Text:</label>
          <div class="col-sm-10">
              <input type="text" class="form-control" id="wtext" name="wtext" placeholder="...">
          </div>
      </div>
      <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-default">Send</button>
          </div>
      </div>
  </form>
</body>
</html>