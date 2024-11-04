 <?php
session_start();
unset($_SESSION['merek']);
unset($_SESSION['tipe']); //matiin session username nya penulis
header('location:../index.php'); //direct ke index.php
?>