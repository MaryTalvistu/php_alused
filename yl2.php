<?php
// Ülesanne 2. Mary-Ann Talvistu. 24/11/2020

$x = 8;
$y = 2;
$liitm = $x + $y;
$lahut = $x - $y;
$korru = $x * $y;
$jagam = $x / $y;
$jaak = $x % $y;

echo "$x + $y = $liitm <br>$x - $y = $lahut <br> $x / $y = $jagam<br> $x * $y = $korru<br> $x % $y = $jaak<br>";

$mm = 333.3;
$cm = $mm / 10;
$m = $cm / 100;

printf ('%0.2f cm ja %0.2f m<br>', $cm, $m);

$a = 2;
$b = 3;
$c = 4;
$ymber = $a + $b + $c;
$pindala = $a * $b / 2;

printf ('Täisnurkse kolmnurga ümbermõõt on %d cm ja pindala on %d cm.', $ymber, $pindala);
