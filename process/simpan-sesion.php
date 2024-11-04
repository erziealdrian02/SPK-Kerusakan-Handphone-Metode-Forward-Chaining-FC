<?php
include ("koneksi.php");
$merek = $_POST['merek'];
$tipe = $_POST['tipe'];
    session_start(); 
    $_SESSION['merek'] = $merek;//nyimpen session merek
    $_SESSION['tipe'] = $tipe; //nyimpen session tipe
    header('location:../question.php');

?>