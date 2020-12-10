<?php
//Ülesanne 6. Mary-Ann Talvistu. 10/12/2020

for ($nr = 1; $nr <= 100; $nr++) {
    if($nr%10-1==0){
        echo '<br>';
    }
    echo $nr . '.';
}

echo '<br><br>';

for($rida=1; $rida<=10; $rida++){
        echo '*';
    }

echo '<br><br>';

for($rida=1; $rida<=10; $rida++){
    echo '*<br>';
}

echo '<br><br>';

$t2rne = $_GET['a'];

for($rida=1; $rida<=$t2rne; $rida++){
    for($veerg=1; $veerg<=$t2rne; $veerg++){
        echo ' * ';
    }
    echo '<br>';
}

echo '<br><br>';

for ($nr = 10; $nr >= 1; $nr--) {
    if($nr%2==0){
        echo $nr.'<br>';
    }
}

echo '<br><br>';

for ($nr = 1; $nr <= 100; $nr++) {
    if($nr%3==0){
        echo $nr . ' ';
    }
}

$tydrukud=array('Mari', 'Karin', 'Mall', 'Tiina');
$poisid=array('Karl', 'Mart', 'Ain', 'Villu');

