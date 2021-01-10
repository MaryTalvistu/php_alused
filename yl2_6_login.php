<?php include('config.php'); ?>
<?php
session_start();
if (isset($_SESSION['tuvastamine'])) {
    header('Location: yl2_6_admin.php');
    exit();
}
//kontrollime kas väljad on täidetud
if (!empty($_POST['kasutaja']) && !empty($_POST['parool'])) {
    //eemaldame kasutaja sisestusest kahtlase pahna
    $kasutaja = htmlspecialchars(trim($_POST['kasutaja']));
    $parool = htmlspecialchars(trim($_POST['parool']));
    //SIIA UUS KONTROLL
    $sool = 'taiestisuvalinetekst';
    $kryp = crypt($parool, $sool);
    //kontrollime kas andmebaasis on selline kasutaja ja parool
    $paring = "SELECT * FROM kasutajad WHERE kasutaja='$kasutaja' AND parool='$kryp'";
    $valjund = mysqli_query($yhendus, $paring);
    //kui on, siis loome sessiooni ja suuname
    if (mysqli_num_rows($valjund)==1) {
        $_SESSION['tuvastamine'] = 'misiganes';
        header('Location: yl2_6_admin.php');
    } else {
        echo "Kasutajanimi või parool on vale";
    }
}
?>
<h1>Sisene</h1>
<form action="" method="post">
    Kasutaja: <input type="text" name="kasutaja"><br>
    Parool: <input type="password" name="parool"><br>
    <input type="submit" value="Logi sisse">
</form>
