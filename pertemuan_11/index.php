<!--
    Muhammad Aditio Kamal Ibrahim
    201393
-->

<?php
require 'dbConnection.php';

if (isset($_POST["signin"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $query = mysqli_query($conn, "SELECT * FROM maki_tb_user WHERE username='$username' and password='$password' ");
    $cek = mysqli_num_rows($query);

    if ($cek) {
        echo("BERHASIL");
        header("Location: home.php");
        exit;
    }

    $error = true;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DTS Project #02 | Sign In</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>

    <div class="container">
        <div class="col-sm-4 bg-light mt-5 mx-auto">
            <h2 class="text-center ">Sign In</h2>
            <?php if (isset($error)) : ?>
                <div class="alert alert-danger">Username/Password yang Anda masukan salah</div>
            <?php endif; ?>
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
        </div>
    </div>


    <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>


</html>