<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Yl 4</title>
</head>
<body>
<form action="yl4.php" method="post">
    <div>
        <h1 class="col-auto m-3">Jagamine: </h1>
        <div class="col-auto m-3">
            <label class="col-form-label" >Muutuja 1:</label>
            <input type="text" class="col-form-control" name="a">
        </div>
        <div class="col-auto m-3">
            <label class="col-form-label" >Muutuja 2:</label>
            <input type="text" class="col-form-control" name="b">
        </div>
        <h1 class="col-auto m-3">Vanus: </h1>
        <div class="col-auto m-3">
            <label class="col-form-label" >Vanus 1:</label>
            <input type="text" class="col-form-control" name="c">
        </div>
        <div class="col-auto m-3">
            <label class="col-form-label" >Vanus 2:</label>
            <input type="text" class="col-form-control" name="d">
        </div>
        <h1 class="col-auto m-3">Ristküllik või ruut I: </h1>
        <div class="col-auto m-3">
            <label class="col-form-label" >Külg 1:</label>
            <input type="text" class="col-form-control" name="e">
        </div>
        <div class="col-auto m-3">
            <label class="col-form-label">Külg 2:</label>
            <input type="text" class="col-form-control" name="f">
        </div>
        <h1 class="col-auto m-3">Juubel: </h1>
        <div class="col-auto m-3">
            <label class="col-form-label">Sünniaasta:</label>
            <input type="text" class="col-form-control" name="g">
        </div>
        <h1 class="col-auto m-3">Hinne: </h1>
        <div class="col-auto m-3">
            <label class="col-form-label">Punktide arv:</label>
            <input type="text" class="col-form-control" name="h">
        </div>
    </div>
    <button type="submit" class="btn btn-primary col-auto m-3" name="submit">Submit</button>

</form>
</body>
</html>

<?php
    // Ülesanne 4. Mary-Ann Talvistu. 08/12/2020

    //lisab vormist saadud andmed muutujasse
if (isset($_POST['submit'])) {
    $a = $_POST['a'];
    $b = $_POST['b'];

    //kontrollib ega väljad pole tühjad ja seejärel arvutab kahe arvu jagatise

    if (empty($_POST['a']) or empty($_POST['b'])) {
        echo 'Sisestage mõlemad arvud <br>';
    } else {
        $jagatis = $a / $b;
        echo 'Kahe arvu jagatis on ' . $jagatis . '<br>';
    }

    //lisab vormist saadud andmed muutujasse
    $c = $_POST['c'];
    $d = $_POST['d'];

    //kontrollib ega väljad pole tühjad ja seejärel arvutab kahe arvu jagatise
    if (empty($_POST['c']) or empty($_POST['d'])) {
        echo 'Sisestage mõlemad vanused<br>';
    } else if ($c > $d) {
        echo $c . ' on vanem kui ' . $d . '<br>';
    } else if ($d > $c) {
        echo $d . ' on vanem kui ' . $c . '<br>';
    } else {
        echo 'Nad on ühe vanused<br>';
    }

    //lisab vormist saadud andmed muutujasse
    $e = $_POST['e'];
    $f = $_POST['f'];

    //kontrollib, kas tegu on ruudu või ristküllikuga
    if ($e == $f) {
        echo 'Kujund on ruut.<br>';
    } else {
        echo 'Kujund on ristküllik. <br>';
    }
    //lisab vormist saadud andmed muutujasse
    $g = $_POST['g'];
    if (empty($_POST['g'])) {
        echo 'Sisestage sünniaasta<br>';
    } else {
        $vanus = 2020 - $g;
        $jaak = $vanus % 10;
        //kontrollib, kas tegu on juubeliga
        if ($jaak == 0) {
            echo 'Juubel!<br>';
        } else {
            echo 'Ei ole juubel.<br>';
        }
    }

    //lisab vormist saadud andmed muutujasse
    $h = $_POST['h'];

    //tulemus
    switch ($h) {
        case (10 < $h):
            echo 'SUPER!<br>';
            break;
        case (4 < $h && $h < 10):
            echo 'TEHTUD!<br>';
            break;
        case (5 > $h):
            echo 'KASIN!<br>';
            break;
        default:
            echo 'SISESTA OMA PUNKTID!<br>';
    }

};
