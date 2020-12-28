<!-- Ülesanne 3. Mary-Ann Talvistu. 08/12/2020 -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Yl 3</title>
</head>
<body>

<form action="yl3.php" method="get">

    <h1>Trapetsi mõõdud: </h1>
    Alus 1 <input type="text" name="a"><br>
    Alus 2 <input type="text" name="b"><br>
    Kõrgus <input type="text" name="h"><br>

    <h1>Rombi mõõdud: </h1>
    Külg <input type="text" name="c"><br><br>

    <input type="submit" name="submit" value="Saada">
</form>

</body>
</html>

<?php


if (isset($_GET['submit'])) {
//lisab vormist saadud andmed muutujasse
    $a = $_GET['a'];
    $b = $_GET['b'];
    $h = $_GET['h'];
    $c = $_GET['c'];

    $pindala = ($a + $b) / 2 * $h;
    $ymbermoot = 4 * $c;

    printf('Trapetsi pindala on %0.1f ja rombi ümbermõõt %0.1f.', $pindala, $ymbermoot);
}