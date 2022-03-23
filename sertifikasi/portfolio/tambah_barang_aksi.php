<!--
    Muhammad Aditio Kamal Ibrahim
    201393
-->

<?php
    //koneksi db
    include 'dbConnection.php';

    //ambil data yang diinput
    $kode_barang = $_POST['kode_barang'];
    $tgl_masuk = $_POST['tgl_masuk'];
    $nama_barang = $_POST['nama_barang'];
    $spesifikasi = $_POST['spesifikasi'];
    $supplier = $_POST['supplier'];
    $harga_beli = $_POST['harga_beli'];
    $harga_jual = $_POST['harga_jual'];

    //insert data ke db
    mysqli_query($conn,"INSERT INTO data_barang VALUES(NULL,'$kode_barang','$tgl_masuk','$nama_barang','$spesifikasi','$supplier','$harga_beli','$harga_jual')");

    //kembali ke home
    header("location:data_barang_view.php");
?>