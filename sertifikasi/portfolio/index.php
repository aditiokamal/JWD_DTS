<!--
    Muhammad Aditio Kamal Ibrahim
    201393
-->

<?php
require 'dbConnection.php';

if (isset($_POST["signin"])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = mysqli_query($conn, "SELECT * FROM tb_user WHERE username='$username' and password='$password' ");
    $cek = mysqli_num_rows($query);

    if ($cek) {
        echo ("BERHASIL");
        header("Location: home.php");
        exit;
    }

    $error = true;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>PT. Gudang Utama Indonesia</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS here -->
    <link rel="icon" type="image/x-icon" href="img/favicon/favicon.ico" />
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/gijgo.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <h2 class="text-center">Inventory Application</h2>
    <h3 class="text-center">PT. Gudang Utama Indonesia</h3>
    <div class="container">
        <div class="col-sm-4 bg-light mt-5 mx-auto">
            <h2 class="text-center">Sign In</h2>
            <form method="POST" action="">
                <div class="form-group">
                    <label for="formGroupExampleInput">Username</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" name="username" placeholder="Enter username" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword" name="password" placeholder="Enter password" required>
                </div>
                <button type="submit" class="btn btn-primary btn-block" name="signin">Sign In</button>
            </form>
            <br />
            <?php if (isset($error)) : ?>
                <div class="alert alert-danger">Username/Password yang Anda masukan salah</div>
            <?php endif; ?>
            <br />
        </div>
    </div>


    <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>


</html>