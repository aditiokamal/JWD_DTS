<!--
    Muhammad Aditio Kamal Ibrahim
    201393
-->

<?php
    //koneksi db
    include 'dbConnection.php';

    //ambil data yang diinput
    $no	= $_POST['no'];
    $merk = $_POST['merk'];
    $warna = $_POST['warna'];
    $jumlah = $_POST['jumlah'];

    //insert data ke db
    mysqli_query($conn,"UPDATE maki_tb_barang SET merk='$merk', warna='$warna', jumlah='$jumlah' WHERE no=$no)");

    //kembali ke home
    header("location:home.php");
?>