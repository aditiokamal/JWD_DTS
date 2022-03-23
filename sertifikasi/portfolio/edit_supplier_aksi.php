<!--
    Muhammad Aditio Kamal Ibrahim
    201393
-->

<?php
    //koneksi db
    include 'dbConnection.php';

    //ambil data yang diinput
    $no	= $_POST['no'];
    $kode_supplier = $_POST['kode_supplier'];
    $nama_supplier = $_POST['nama_supplier'];
    $alamat_supplier = $_POST['alamat_supplier'];
    $kontak_supplier = $_POST['kontak_supplier'];


    //insert data ke db
    mysqli_query($conn,"UPDATE data_supplier SET kode_supplier='$kode_supplier', nama_supplier='$nama_supplier', alamat_supplier='$alamat_supplier', kontak_supplier='$kontak_supplier' WHERE no='$no'");

    //kembali ke home
    header("location:data_supplier_view.php");
?>