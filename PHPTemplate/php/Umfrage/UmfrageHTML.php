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
        <h1>Frage</h1>
    </div>
</div>
<form action="Umfrage.php" method="POST">
    <div class="form-group">
        <label class="control-label col-sm-2" for="frage">Frage:</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="frage" name="frage" placeholder="Was/Wie/Warum...?">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="option1">Option 1:</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="option1" name="option1" placeholder="...">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="option2">Option 2:</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="option2" name="option2" placeholder="...">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="option3">Option 3:</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="option3" name="option3" placeholder="...">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">Submit</button>

        </div>
    </div>
</form>
</body>
</html>
