<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
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
<div class="row">
    <div class="col-sm-1">
        <h1>Login</h1>
    </div>
</div>
<form action="Login.php" method="POST">
    <div class="form-group">
        <label class="control-label col-sm-2" for="benutzer">Email:</label>
        <div class="col-sm-10">
            <input type="email" class="form-control" id="benutzer" name="benutzer2" placeholder="Email">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="passwort">Passwort:</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" id="passwort" name="passwort2" placeholder="Passwort">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">Submit</button>

        </div>
    </div>
</form>
</div>
</body>
</html>