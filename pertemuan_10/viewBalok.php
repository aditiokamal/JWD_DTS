<!Doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <title>Muhammad Aditio Kamal</title>
</head>

<body style="color:#fff; background-color: #1d2124;">
  <div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand mr-5" href="index.html">
        <img src="img/logo_dts.png" width="30" height="30" class="d-inline-block align-top" alt="">
        Digital Talent Scholarship 2020
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- navigation bar -->
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="home.php">Home</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="viewBalok.php">1. Balok</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="viewKubus.php">2. Kubus</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="viewSilinder.php">3. Silinder</a>
          </li>
        </ul>
      </div>
    </nav>
  </div>

  <br />
  <h3 class="d-flex justify-content-center">VOLUME BALOK</h3><br />

  <div class="container-fluid">
    <div class="row justify-content-center">

      <!-- Input -->
      <div class="col-md-4">
        <form action="" method="POST">
          <div class="form-group">

            <!-- Panjang -->
            <div class="panel-group">
              <div class="panel-heading">
                <label for="panjang">Input Panjang</label>
              </div>
              <div class="panel-body">
                <input type="number" class="form-control" id="panjang" name="panjang" autocomplete="on" required>
              </div>
            </div>

            <br />

            <!-- Lebar -->
            <div class="panel-group">
              <div class="panel-heading">
                <label for="lebar">Input Lebar</label>
              </div>
              <div class="panel-body">
                <input type="number" class="form-control" id="lebar" name="lebar" autocomplete="on" required>
              </div>
            </div>

            <br />

            <!-- Tinggi -->
            <div class="panel-group">
              <div class="panel-heading">
                <label for="tinggi">Input Tinggi</label>
              </div>
              <div class="panel-body">
                <input type="number" class="form-control" id="tinggi" name="tinggi" autocomplete="on" required>
              </div>
            </div>

            <!-- Aksi -->
            <br />
            <button type="submit" class="btn btn-success" name="hitung">Hitung</button>
            <button type="reset" class="btn btn-primary" name="reset">Reset</button>
          </div>
        </form>
      </div>
    </div>

    <!-- Output -->
    <div class="row justify-content-center">
      <div class="col-md-4">
        <div class="panel-group">
          <div class="panel-heading">
            Output
          </div>
          <div class="panel-body">
            <?php
            include 'prosedurBalok.php';

            //output setelah tombol hitung diklik
            if (isset($_POST['hitung'])) {
              $input1 = $_POST['panjang'];
              $input2 = $_POST['lebar'];
              $input3 = $_POST['tinggi'];

              echo "Panjang : $input1<br>";
              echo "Lebar : $input2<br>";
              echo "Tinggi : $input3<br>";

              echo "<hr>";
              echo "Volume Balok : " . volumeBalok($input1, $input2, $input3) . "<br>";
            }
            ?>
          </div>

          <script src="js/bootstrap.js"></script>
          <script src="js/bootstrap.min.js"></script>
          <script src="js/bootstrap.bundle.js"></script>
        </div>
      </div>
    </div>
  </div>
</body>

</html>