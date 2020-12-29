<?php
//Ülesanne 7. Mary-Ann Talvistu. 15/12/2020

//koosta funktsioon, mis tervitab. Näiteks: “Tere päiksekesekene!”

function tervita(){
return "Tere päiksekene!";
}
echo tervita();

echo '<br><br>';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Yl 7</title>
</head>
<body>

<form class="home-newsletter"  action="yl7.php" method="get">
    <div class="form-group row">
        <label for="name" class="col-sm-2 m-3 col-form-label">Kasutajanimi:</label>
        <div class="col-sm-6">
            <input type="name" class="m-3 form-control" name="name">
        </div>
    </div>
    <div class="form-group row">
        <label for="number1" class="col-sm-2 m-3 col-form-label">Esimene number:</label>
        <div class="col-sm-3">
            <input type="text" class="m-3 form-control" name="number1">
        </div>
    </div>
    <div class="form-group row">
        <label for="number2" class="m-3 col-sm-2 col-form-label">Teine number:</label>
        <div class="col-sm-3">
            <input type="text" class="m-3 form-control" name="number2">
        </div>
    </div>
    <div class="form-group row">
        <label for="number3" class="m-3 col-sm-2 col-form-label">Samm:</label>
        <div class="col-sm-3">
            <input type="text" class="m-3 form-control" name="number3">
        </div>
    </div>
    <div class="form-group row">
        <label for="number4" class="m-3 col-sm-2 col-form-label">Isikukood:</label>
        <div class="col-sm-3">
            <input type="text" class="m-3 form-control" name="number4">
        </div>
    </div>
    </div>
    <button class="btn btn-success m-5" name="submit" type="submit">Salvesta</button>
</form>
</body>
</html>

<?php

//koosta funktsioon, mis genereerib Bootstrapi uudiskirjaga liitumise vormi (vorm ja nupp)
if (isset($_GET['submit'])) {
    $name = $_GET['name'];

    //loo funktsioon, mis muudab kasutajanime väikesteks tähtedeks
    $name = strtolower($name);

    //täienda funktsiooni, et kasutajanimele luuakse “@hkhk.edu.ee” lõpuga email
    $email = $name . '@hkhk.edu.ee';

    //täienda funktsiooni nii, et kasutajale luuakse 7-kohaline kood numbrid ja tähed segamini
    $password = substr(sha1(mt_rand()), 17, 7);

    echo $name . '<br><br>';
    echo $email . '<br><br>';
    echo $password . '<br><br>';

    $nr1 = $_GET['number1'];
    $nr2 = $_GET['number2'];
    $nr3 = $_GET['number3'];

    //koosta funktsiooni, mis lubab kasutajal valida arvude vahemikku muuta genereeritud arvude sammupikkuse. Näiteks 2 kuni 8 ja samm 3, tekitavad 2, 5, 8
    foreach ($uued_arvud = range($nr1,$nr2,$nr3) as $arv) {

    echo ($arv.' ');

    };

    echo '<br><br>';

    function pindala($nr1,$nr2) {

        return ($nr1*$nr2);

    }

    //koosta funktsioon, mis leiab kasutaja antud arvudega ristkülikupindala
    echo pindala($nr1,$nr2);

    echo '<br><br>';

    $isikukood = $_GET['number4'];
    //koosta funktsioon, mis leiab, kas sisestatud isikukood on õige pikkusega
    //täienda funktsiooni, et kui isikukood on kirjas leitakse sugu ja sünniaeg
    if(strlen($isikukood)==11) {
        echo("Isikukood on õige. <br><br>");
        if($isikukood[0] == 3) {
            echo("Sugu M, sünniaasta 19".$isikukood[1].$isikukood[2].".<br><br>");
        } elseif ($isikukood[0] == 5) {
            echo("Sugu M, sünniaasta 20".$isikukood[1].$isikukood[2].".<br><br>");
        } elseif ($isikukood[0] == 4) {
            echo("Sugu N, sünniaasta 19" . $isikukood[1] . $isikukood[2].".<br><br>");
        } else {
            echo("Sugu N, sünniaasta 20".$isikukood[1].$isikukood[2].".<br><br>");
        }
    }
    else {
        echo("Isikukood ei ole õige.<br><br>");
    }

    //koosta funktsioon, mis hoiab endas kolme ühepikkust massiivi: alus, öeldis ja sihitis
    $alus=array('Mari', 'Karin', 'Ain', 'Villu');
    $oeldis=array('keetis', 'paitas', 'laulab', 'sööb');
    $sihitis=array('putru', 'koera', 'laulu', 'marju');

    //koosta kood, mis lehele laadimisel valib suvaliselt igast massiivist elemendi ja koostab lause
    echo $alus[array_rand($alus)]." ".$oeldis[array_rand($oeldis)]." ".$sihitis[array_rand($sihitis)].".<br><br>";

};
?>



