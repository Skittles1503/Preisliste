<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="../style/login.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- Optionales Theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
        <link href="../style/saveform.css" rel="stylesheet">
</head>
    <div id="top">
        <button type="button" class="btn btn-link" href="searchform.php">zurück zur Suche</button>
    </div>
    <div id="formular">
            <link href="../style/eingabe.css" rel="stylesheet">
            <form action="save.php" method="post">
        Artikelname:<br>
            <input type="text" id="artikelname" maxlength="250" name="bezeichnung"><br><br>
        Preis:<br>
            <input type="text" id="preis" maxlength="250" name="preis"><br><br>
            <input type="submit" value="Abschicken">
    </div>