<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registrierung</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/chat.css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<body>
<div class="container" id="messages">
    <div class="row" id="header">
        <a href="Chat.php" class="col">Chat</a>
        <a href="./Umfrage/UmfrageHTML.php" class="col">Umfragen</a>
    </div>
<div class="row">
    <div class="col-sm-1">
        <h1>Registrierung</h1>
    </div>
</div>
<form action="Registrierung.php" method="POST" id="registrierung">
    <div class="form-group">
        <label class="control-label col-sm-2" for="vorname">Vorname:</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="vorname" name="vorname" placeholder="Vorname">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="nachname">Nachname:</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="nachname" name="nachname" placeholder="Nachname">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="email">Email:</label>
        <div class="col-sm-10">
            <input type="email" class="form-control" id="email" name="email" placeholder="Email">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="benutzer">Benutzername:</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="benutzer" name="benutzer" placeholder="Benutzername">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="passwort">Passwort:</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" id="passwort" name="passwort" placeholder="Passwort">
        </div>
    </div>
    <input type="submit" value="Submit">

    <!-- Button für Login -->
    <a href="LoginHTML.php">login</a>
    <div class="form-group">
        <script>
            function onSubmit(token) {
                document.getElementById("registrierung").submit();
            }
        </script>
        <!-- Captcha -->
        <!-- <div class="col-sm-offset-2 col-sm-10">
            <button class="g-recaptcha btn btn-default"
                    data-sitekey="6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI"
                    data-callback='onSubmit'
                    data-action='submit'>Submit</button>
        </div> -->

        <div class="g-recaptcha" data-sitekey="6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI"></div>



    </div>
</form>
</div>
</body>
</html>