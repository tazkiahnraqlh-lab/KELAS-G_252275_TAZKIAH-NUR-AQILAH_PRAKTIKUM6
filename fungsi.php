<?php
const NAMA_APLIKASI = "Perpus Mini";

function labelStok(int $stok): string
{
    if ($stok === 0) {
        return "Habis";
    }

    if ($stok <= 2) {
        return "Menipis";
    }

    return "Tersedia";
}

function labelTahun(int $tahun): string
{
    $dekade = intdiv($tahun, 10) * 10;

    return $dekade . "-an";
}

function cariBuku(array $daftar, string $kata): array
{
    $kata = strtolower(trim($kata));

    if ($kata === "") {
        return $daftar;
    }

    return array_filter($daftar, function (array $b) use ($kata): bool {
        $judul = strtolower($b["judul"]);
        $penulis = strtolower($b["penulis"]);

        return str_contains($judul, $kata)
            || str_contains($penulis, $kata);
    });
}

function tanggalServer(): string
{
    date_default_timezone_set("Asia/Makassar");

    return date("d-m-Y");
}

