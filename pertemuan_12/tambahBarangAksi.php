<!--
    Muhammad Aditio Kamal Ibrahim
    201393
-->

<?php
    //koneksi db
    include 'dbConnection.php';

    //ambil data yang diinput
    $merk = $_POST['merk'];
    $warna = $_POST['warna'];
    $jumlah = $_POST['jumlah'];

    //insert data ke db
    mysqli_query($conn,"INSERT INTO maki_tb_barang VALUES('','$merk','$warna','$jumlah')");

    //kembali ke home
    header("location:home.php");
?>