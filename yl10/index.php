<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
         <meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Yl10</title>
</head>
<body>
<menu>
    <a href="index.php">Avaleht</a>
    <a href="index.php?leht=portfoolio">Portfoolio</a>
    <a href="index.php?leht=kaart">Kaart</a>
    <a href="index.php?leht=kontakt">Kontakt</a>
</menu>

<?php
if(!empty($_GET['leht'])){
    $leht = htmlspecialchars($_GET['leht']);
    $lubatud = array('portfoolio','kaart','kontakt');
    $kontroll = in_array($leht, $lubatud);
    if($kontroll==true){
        include($leht.'.php');
    } else {
        echo 'Valitud lehte ei eksisteeri!';
    }
} else {
?>

<h2>Avaleht</h2>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin maximus sapien metus, et hendrerit nisi convallis pretium. Fusce lacinia laoreet pellentesque. Aliquam bibendum odio neque, nec faucibus elit sollicitudin quis. Sed consequat ante ac risus tincidunt, nec consectetur neque cursus. Morbi ac massa quis lacus venenatis finibus. Vivamus ornare felis at gravida dictum. Aenean eleifend dapibus erat sed tempus.</p>

</body>
</html>
<?php

}

?>

