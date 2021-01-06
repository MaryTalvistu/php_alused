<!-- Ülesanne 2_2 Mary-Ann Talvistu. 06/01/2021 -->
<?php include('config.php'); ?>
<?php
if(isset($_POST['id'])) {
    //muutmise päring
    if(!empty($_POST['id'])){
        $artist = htmlspecialchars(trim($_POST['artist']));
        $album = htmlspecialchars(trim($_POST['album']));
        $aasta = htmlspecialchars(trim($_POST['aasta']));
        $hind = htmlspecialchars(trim($_POST['hind']));
        $id = intval(htmlspecialchars(trim($_POST['id'])));
        $muuda = "UPDATE albumid 
		SET artist='".$artist."',
		album='$album',
		aasta='$aasta',
		hind='$hind'
		WHERE id='$id'
		";
        $muuda_db = mysqli_query($yhendus, $muuda);
        if($muuda_db){
            echo 'edukalt muudetud, suuname <a href="yl2_3.php">tagasi</a>';
            echo '<META HTTP-EQUIV="Refresh" Content="2; URL=yl2_3.php">';
            die();
        } else {
            echo "mingi jama";
        }
    }
} elseif(isset($_GET['delete'])){
    if(!empty($_GET['delete'])) {
        $id = intval($_GET['delete']);
        $kustuta = "DELETE FROM albumid WHERE id='$id'";
        $muuda_db = mysqli_query($yhendus, $kustuta);
        if ($muuda_db) {
            echo 'edukalt kustutatud, suuname <a href="yl2_3.php">tagasi</a>';
            echo '<META HTTP-EQUIV="Refresh" Content="2; URL=yl2_3.php">';
            die();
        } else {
            echo "mingi jama";
        }
    }
} elseif(isset($_GET["edit"])) {
    $id = intval($_GET['edit']);
//väljastamise päring
    $paring = "SELECT * FROM albumid WHERE id='$id'";
    $valjund = mysqli_query($yhendus, $paring);
    $rida = mysqli_fetch_assoc($valjund);
    ?>
    <h2>Albumi muutmine</h2>
    <form action="yl2_3.php" method="post">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <table>
            <tr><td>Artist: </td><td><input type="text" name="artist" required value="<?php echo $rida['artist']; ?>"></td></tr>
            <tr><td>Album:</td><td> <input type="text" name="album" required value="<?php echo $rida['album']; ?>"></td></tr>
            <tr><td>Aasta: </td><td><input type="number" name="aasta" value="<?php echo $rida['aasta']; ?>" min="1900" max="2099" required></td></tr>
            <tr><td>Hind: </td><td><input type="number" name="hind" value="<?php echo $rida['hind']; ?>" min="1" max="100" step="0.01" required></td></tr>
            <tr><td><input type="reset" value="Tühjenda"></td><td><input type="submit" value="MUUDA"></td></tr>
        </table>
    </form>
    <?php
} else {
    $paring = "SELECT * FROM albumid";
    $valjund = mysqli_query($yhendus, $paring);
    $rida = mysqli_fetch_assoc($valjund);
    echo "<table>";
     while($rida = mysqli_fetch_assoc($valjund)){
		echo '<tr>
				<td>'.$rida['artist'].'</td>
				<td>'.$rida['album'].'</td>
				<td>'.$rida['aasta'].'</td>
				<td><a href="yl2_3.php?delete='.$rida["id"].'">kustuta</a></td>
				<td><a href="yl2_3.php?edit='.$rida["id"].'">muuda</a></td>
			</tr>';
	}
    echo "</table>";
}
?>
