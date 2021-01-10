<?php include('config.php'); ?>


<?php
session_start();
if (!isset($_SESSION['tuvastamine'])) {
    header('Location: yl2_6_login.php');
    exit();
}
if(isset($_POST['logout'])){
    session_destroy();
    header('Location: yl2_6_registration.php');
    exit();
}
?>
