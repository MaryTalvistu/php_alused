<!-- Ülesanne 2_2 Mary-Ann Talvistu. 05/01/2021 -->

<?php

//Koosta php dokument, mis poogib ennast andmebaasi ‘muusikapood’ külge. NB! Andmebaasi ühendus hoia eraldifailis config.php
include('config.php'); //andmebaasi paroolid ja ühendus on teises failis

//Väljasta kogu ‘albumid’ sisu ridade kaupa
$paring = 'SELECT * FROM albumid';
$valjund = mysqli_query($yhendus, $paring);
while($rida = mysqli_fetch_array($valjund)){
    echo '<strong>Album: '.$rida[1].' - '.$rida[2].'</strong><br>';
    echo 'Aasta: '.$rida[3].'<br>';
    echo 'Žanr: '.$rida[4].'<br>';
}
echo '<br><br>';


//Väljasta tabelist ainult artist ja album read, kusjuures sorteeri kasvavalt artisti järgi
$paring = 'SELECT artist, album FROM albumid ORDER BY artist';
$valjund = mysqli_query($yhendus, $paring);
while($rida = mysqli_fetch_array($valjund)){
    echo 'Artist: '.$rida[0].'. Album: '.$rida[1].'<br>';
}
echo '<br><br>';


//Väljasta tabelist ainult artist ja album read, mille aasta on 2010 ja uuemad
$paring = 'SELECT artist, album FROM albumid WHERE aasta >= "2010"';
$valjund = mysqli_query($yhendus, $paring);
while($rida = mysqli_fetch_array($valjund)){
    echo 'Artist: '.$rida[0].'<br>';
    echo 'Album: '.$rida[1].'<br>';
}
echo '<br><br>';


//Väljasta kui palju erinevaid albumeid on andmebaasis, mis on nende keskmine hind ja koguväärtus (summa)
$paring = 'SELECT COUNT(*) AS "Albumeid kokku", SUM(hind) AS "Hind kokku", AVG(hind) AS "Keskmine hind" FROM albumid';
$valjund = mysqli_query($yhendus, $paring);
while($rida = mysqli_fetch_array($valjund)){
    printf("Albumeid kokku: %d tk<br>", $rida['Albumeid kokku']);
    printf("Keskmine hind: %0.2f eur<br>", $rida['Keskmine hind']);
    printf("Keskmine hind: %0.2f eur<br>", $rida['Hind kokku']);
}
echo '<br><br>';

//Väljasta kõige vanema albumi nimed
$paring = 'SELECT album FROM albumid WHERE  aasta = (select min(aasta) from albumid)';
$valjund = mysqli_query($yhendus, $paring);
while($rida = mysqli_fetch_array($valjund)) {
    echo 'Album: '.$rida[0].'<br>';
}
echo '<br><br>';


// Väljasta albumid, mille hind on kogu keskmisest suurem
$paring = 'SELECT album FROM albumid WHERE hind>(SELECT AVG(hind) FROM albumid)';
$valjund = mysqli_query($yhendus, $paring);
    while($rida = mysqli_fetch_array($valjund)) {
        echo 'Album: '.$rida[0].'<br>';

}
echo '<br><br>';

if (!empty($_GET['otsi'])) {
    //kasutaja tekst vormist
    $otsi = $_GET['otsi'];
    $valik = $_GET['valik'];
    //päring
    if(intval($valik)==1) {
        $paring = 'SELECT * FROM albumid WHERE artist LIKE "%' . $otsi . '%"';
    } else {
        $paring = 'SELECT * FROM albumid WHERE album LIKE "%' . $otsi . '%"';
    }

    $valjund = mysqli_query($yhendus, $paring);
    echo 'Otsingusõna: '.$otsi.'<br>';
    echo 'Vastused: <br>';
    while($rida = mysqli_fetch_assoc($valjund)){
        echo $rida['artist'].' - '.$rida['album'].' - '.$rida['aasta'].'<br>';
    }
    echo '<br><br>';

}
mysqli_free_result($valjund);
mysqli_close($yhendus);

?>

<!-- Loo otsingukast, mis lubab valida, kas otsing toimub artistide või albumite veerust. -->

<form method="get" action="yl2_2.php">
    <label for="valik">Vali artist või album:</label>
    <select id="valik" name="valik">
        <option value="1">Artist</option>
        <option value="2">Album</option>
    </select>
    <br>
    <br>
    Otsing <input type="text" name="otsi">
    <input type="submit" value="otsi...">
</form>


