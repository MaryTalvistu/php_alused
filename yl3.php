<?php
// Ülesanne 3. Mary-Ann Talvistu. 08/12/2020


//lisab vormist saadud andmed muutujasse
$a = $_GET['a'];
$b = $_GET['b'];
$h = $_GET['h'];
$c = $_GET['c'];

$pindala = ($a + $b) / 2 * $h;
$ymbermoot = 4 * $c;

printf ('Trapetsi pindala on %0.1f ja rombi ümbermõõt %0.1f.', $pindala, $ymbermoot);
