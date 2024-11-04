<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'spk_counter_fc';

$connect = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die('koneksi gagal');
