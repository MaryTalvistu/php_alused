<?php
    // Ülesanne 4. Mary-Ann Talvistu. 08/12/2020

    //lisab vormist saadud andmed muutujasse
    $a = $_POST['a'];
    $b = $_POST['b'];

    //kontrollib ega väljad pole tühjad ja seejärel arvutab kahe arvu jagatise

    if(empty($_POST['a']) or empty($_POST['b'])) {
        echo 'Sisestage mõlemad arvud <br>';
    } else {
        $jagatis = $a / $b;
        echo 'Kahe arvu jagatis on '.$jagatis.'<br>';
    }

    //lisab vormist saadud andmed muutujasse
    $c = $_POST['c'];
    $d = $_POST['d'];

    //kontrollib ega väljad pole tühjad ja seejärel arvutab kahe arvu jagatise
    if(empty($_POST['c']) or empty($_POST['d'])) {
        echo 'Sisestage mõlemad vanused<br>';
    } else if ($c > $d) {
            echo $c.' on vanem kui '.$d.'<br>';
        }
    else if ($d > $c) {
        echo $d.' on vanem kui '.$c.'<br>';
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
        case (10 < $h): echo 'SUPER!<br>';
            break;
        case (4 < $h && $h < 10): echo 'TEHTUD!<br>';
            break;
        case (5 > $h): echo 'KASIN!<br>';
            break;
        default: echo 'SISESTA OMA PUNKTID!<br>';
         }


