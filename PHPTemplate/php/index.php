<!--Captcha inkludieren: https://code.tutsplus.com/tutorials/build-your-own-captcha-and-contact-form-in-php--net-5362---!>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Registrierung</title>
</head>
<body>
    <div>
        <div>
            <h1>Registrierung</h1>
        </div>

        <form action="Registrierung.php" method="POST">

            <div>
                <label>Vorname:</label>

                <div>
                    <input type="text" name="vorname" />
                </div>
            </div>


            <div>
                <label>Nachname:</label>

                <div>
                    <input type="text" name="nachname" />
                </div>
            </div>


            <div>
                <label>Email:</label>

                <div>
                    <input type="email" name="email" />
                </div>
            </div>


            <div>
                <label>Benutzername:</label>

                <div>
                    <input type="text" name="benutzername" />
                </div>
            </div>


            <div>
                <label>Passwort:</label>

                <div>
                    <input type="password" name="passwort" />
                </div>
            </div>


            <input type="submit"/>
        </form>
    </div>


</body>
</html>