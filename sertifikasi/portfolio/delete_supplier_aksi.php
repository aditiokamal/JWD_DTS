<?php
    // koneksi database
    include 'dbConnection.php';

    // menangkap data id yang di kirim dari url
    $no = $_GET['no'];


    // menghapus data dari database
    mysqli_query($conn,"DELETE FROM data_supplier WHERE no='$no';");

    //reset auto increment
    mysqli_query($conn,"ALTER TABLE data_supplier DROP no;");
    mysqli_query($conn,"ALTER TABLE data_supplier ADD no INT NOT NULL AUTO_INCREMENT PRIMARY KEY FIRST;");

    // mengalihkan halaman kembali ke home.php
    header("location:data_supplier_view.php");
?>