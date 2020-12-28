<?php
//Ülesanne 6. Mary-Ann Talvistu. 10/12/2020


//loo arvud 1-100
//loo pärast iga 10 arvu reavahetus
//lisa iga arvu järele punkt (N: 1. 2. 3. jne…)

for ($nr = 1; $nr <= 100; $nr++) {
    if($nr%10-1==0){
        echo '<br>';
    }
    echo $nr . '.';
}

echo '<br><br>';


//koosta tärnidest horisontaalne rida
for($rida=1; $rida<=10; $rida++){
        echo '*';
    }

echo '<br><br>';


//koosta tärnidest vertikaalne rida
for($rida=1; $rida<=10; $rida++){
    echo '*<br>';
}

echo '<br><br>';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Yl 6</title>
</head>
<body>
<form action="yl6.php" method="get">
    Ühel küljel tärne <input type="text" name="a"><br>
    <input type="submit" name="submit" value="Saada">
</form>
</body>
</html>
<?php
//loo tsükli abil tärnidest ruut, mille suuruse lisab kasutaja läbi veebivormi
if (isset($_GET['submit'])) {

    $t2rne = $_GET['a'];

for($rida=1; $rida<=$t2rne; $rida++){
    for($veerg=1; $veerg<=$t2rne; $veerg++){
        echo ' * ';
    }
    echo '<br>';
}

};

echo '<br><br>';


//väljasta paarisarvud 10-1
for ($nr = 10; $nr >= 1; $nr--) {
    if($nr%2==0){
        echo $nr.'<br>';
    }
}

echo '<br><br>';


//tekita arvud 1-100, aga kuva kolmega jagunevad arvud (N: 3, 6, 9 jne.)
for ($nr = 1; $nr <= 100; $nr++) {
    if($nr%3==0){
        echo $nr . ' ';
    }
}

echo '<br><br>';


//tekita tüdrukute ja poiste massiivid (võrdsed)
//väljasta poiste ja tüdrukute paarid erinevatel ridadel
$tydrukud=array('Mari', 'Karin', 'Mall', 'Tiina');
$poisid=array('Karl', 'Mart', 'Ain', 'Villu');

for($nimi=0;$nimi<count($tydrukud);$nimi++){
    echo $tydrukud[$nimi].' ja '. $poisid[$nimi].'<br>';
}

echo '<br><br>';


//tee poiste ja tüdrukute massiividest koopiad
//tekita suvalistest tüdrukutest ja poistest koopia (nimed ei tohi korduda)
$tydrukud=array('Mari', 'Karin', 'Mall', 'Tiina');
$poisid=array('Karl', 'Mart', 'Ain', 'Villu');
shuffle($tydrukud);
shuffle($poisid);

for($nimi=0;$nimi<count($tydrukud);$nimi++){
    echo $tydrukud[$nimi].' ja '. $poisid[$nimi].'<br>';
}

?>