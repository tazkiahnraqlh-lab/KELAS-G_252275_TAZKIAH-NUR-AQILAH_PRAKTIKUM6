<?php
    // $judulHalaman diisi oleh index.php sebelum berkas ini dimuat.
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $judulHalaman ?> &middot; <?= NAMA_APLIKASI ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="navbar">
        <a class="brand" href="index.php"><?= NAMA_APLIKASI ?></a>
        <nav class="menu">
            <a href="index.php">Katalog</a>
            <a href="index.php#tambah">Tambah Buku</a>
        </nav>
    </header>

    <div class="halaman">

