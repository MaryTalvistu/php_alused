<!-- Ülesanne 9. Mary-Ann Talvistu. 29/12/2020 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Yl 7</title>
</head>
<body>

<form class="home-newsletter"  action="yl9.php" method="get">
    <div class="form-group row">
        <label for="name" class="col-sm-2 m-3 col-form-label">Kasutajanimi:</label>
        <div class="col-sm-6">
            <input type="name" class="m-3 form-control" name="name">
        </div>
    </div>
    <div class="form-group row">
        <label for="name" class="col-sm-2 m-3 col-form-label">Eesnimi:</label>
        <div class="col-sm-6">
            <input type="name" class="m-3 form-control" name="firstName">
        </div>
    </div>
    <div class="form-group row">
        <label for="name" class="col-sm-2 m-3 col-form-label">Perenimi:</label>
        <div class="col-sm-6">
            <input type="name" class="m-3 form-control" name="lastName">
        </div>
    </div>
    <button class="btn btn-success m-5" name="submit" type="submit">Salvesta</button>
</form>
</body>
</html>

<?php

    //kood tervitab teda kenasti nimepidi, kus nimi algab suure algustähega.
if (isset($_GET['submit'])) {
    $name = $_GET['name'];
    echo "Tere, ".ucfirst(strtolower($name))."!<br><br>";

    //sisend–>stalker; väljund–>S.T.A.L.K.E.R.
    $punktid = trim(chunk_split($name, 1, '.') );
    echo $punktid."<br><br>";

    //sisend–>Sa oled täielik noob; väljund–>Sa oled täielik ***
    $tekst = 'Sa oled täielik jobu!';
    $asendus = '***';
    $otsitav = 'jobu';
    echo str_replace($otsitav, $asendus, $tekst)."<br><br>";

    //sisend–>Ülle ja Doos; väljund–>ylle.doos@hkhk.edu.ee
    $firstName = $_GET['firstName'];
    $lastName = $_GET['lastName'];
    $eesnimi = strtolower($firstName);
    $perenimi= strtolower($lastName);
    echo $eesnimi.".".$perenimi."@hkhk.edu.ee";

}

