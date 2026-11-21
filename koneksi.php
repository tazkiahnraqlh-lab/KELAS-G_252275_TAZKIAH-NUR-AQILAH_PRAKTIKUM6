<?php

$host = "localhost";
$user = "root";
$paswoard = "";
$database = "db_pertemuan6";

$com = mysqli_connect(
    $host,
    $user,
    $paswoard,
    $database
);

if (!$com) {
    die("koneksi gagal: " . mysqli_connect_error());
}

?>
