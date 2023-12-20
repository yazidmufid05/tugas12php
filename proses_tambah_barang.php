<?php
require_once 'dbkoneksi.php';
require_once 'class_produk.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = $_POST['nama'];
    $qty = $_POST['qty'];
    $harga = $_POST['harga'];
    $jenis_produk_id = $_POST['jenis_produk_id'];

    $objProduk = new Produk($dbh);

    // Panggil method untuk menambahkan barang
    $result = $objProduk->addProduk($nama, $qty, $harga, $jenis_produk_id);

    // Periksa hasilnya dan redirect atau tampilkan pesan sesuai kebutuhan
    if ($result) {
        // Redirect ke halaman daftar produk jika penambahan berhasil
        header('Location: list_produk.php');
        exit;
    } else {
        // Tampilkan pesan kesalahan jika penambahan gagal
        echo 'Gagal menambahkan barang.';
    }
}
?>