<?php include('config.php'); ?>
<?php
session_start();
if (!isset($_SESSION['tuvastamine'])) {
    header('Location: yl2_6_login.php');
    exit();
}
?>
<h1>Salajane info</h1>
<p>Salainfo</p>
<form action="yl2_6_logout.php" method="post">
    <input type="submit" value="Logi välja" name="logout">
</form>
