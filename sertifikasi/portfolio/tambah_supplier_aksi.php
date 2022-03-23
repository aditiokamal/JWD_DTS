<!--
    Muhammad Aditio Kamal Ibrahim
    201393
-->

<?php
    //koneksi db
    include 'dbConnection.php';

    //ambil data yang diinput

    $kode_supplier = $_POST['kode_supplier'];
    $nama_supplier = $_POST['nama_supplier'];
    $alamat_supplier = $_POST['alamat_supplier'];
    $kontak_supplier = $_POST['kontak_supplier'];

    //insert data ke db
    mysqli_query($conn,"INSERT INTO data_supplier VALUES(NULL,'$kode_supplier','$nama_supplier','$alamat_supplier','$kontak_supplier')");

    //kembali ke home
    header("location:data_supplier_view.php");
?>