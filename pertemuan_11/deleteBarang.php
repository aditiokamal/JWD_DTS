<?php
    // koneksi database
    include 'dbConnection.php';

    // menangkap data id yang di kirim dari url
    $no = $_GET['no'];


    // menghapus data dari database
    mysqli_query($conn,"delete from maki_tb_barang where no='$no'");

    // mengalihkan halaman kembali ke home.php
    header("location:home.php");
?>