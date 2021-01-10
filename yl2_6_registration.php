<?php include('config.php'); ?>

<?php

session_start();

if (isset($_SESSION['tuvastamine'])) {
    header('Location: yl2_6_admin.php');
    exit();
}
if (!empty($_GET['kasutaja']) && !empty($_GET['parool'])) {
    $kasutaja = htmlspecialchars(trim($_GET['kasutaja']));
    $parool = htmlspecialchars(trim($_GET['parool']));
    //Kontrollime, kas parool vastab nõuetele
    if(strlen($parool) != 6)
        echo 'Parool peab olema 6 sümbolit pikk. <a href="yl2_6_registration.php">Tagasi</a>';
        echo '<META HTTP-EQUIV="Refresh" Content="2; URL=yl2_6_registration.php">';
        die();

    //Kontrollime kas selline kasutajanimi on juba olemas
    $cheking = 'SELECT * FROM kasutajad WHERE kasutaja = "$kasutaja"';

    $sool = 'taiestisuvalinetekst';
    $kryp = crypt($parool, $sool);
    $new = 'INSERT INTO kasutajad(kasutaja,parool) VALUES("'.$kasutaja.'","'.$kryp.'")';

    $issue = mysqli_query($yhendus, $cheking);
    $valjund = mysqli_query($yhendus, $new);

    $tulemus = mysqli_affected_rows($yhendus);
    if (mysqli_num_rows($issue) > 0) {
        echo "Selle nimega kasutaja on juba olemas";
    } elseif ($valjund==1) {
        $_SESSION['tuvastamine'] = 'misiganes';
        header('Location: yl2_6_admin.php');
    } else {
        echo "Midagi läks valesti";
    }
    mysqli_close($yhendus);
}

?>
<h1>Registreeru</h1>
<form action="" method="get">
    Kasutaja: <input type="text" name="kasutaja"><br>
    Parool: <input type="password" name="parool"><br>
    <input type="submit" value="Registreeru" name="register">
    <p>Oled juba kasutaja? <a href="yl2_6_login.php">Logi sisse</a>.</p>

</form>