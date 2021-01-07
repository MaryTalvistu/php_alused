<!-- Ülesanne 2_4 Mary-Ann Talvistu. 07/01/2021 -->
<?php include('config.php'); ?>
<?php
$paring = "SELECT kliendid.eesnimi, kliendid.perenimi, arved.arve_nr, albumid.artist, albumid.album
			FROM arved
			JOIN albumid ON arved.albumid_id=albumid.id JOIN kliendid ON arved.kliendid_id=kliendid.id";
$valjund = mysqli_query($yhendus, $paring);
while($rida = mysqli_fetch_assoc($valjund)){
    echo 'Arve number: '.$rida['arve_nr'].'<br>';
    echo 'Nimi: '.$rida['eesnimi'].' '.$rida['perenimi'].'<br>';
    echo 'Toote nimetus: '.$rida['artist'].'-'.$rida['album'].'<br><br>';
}
mysqli_free_result($valjund);
mysqli_close($yhendus);
?>