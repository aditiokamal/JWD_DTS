<!Doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <title>Muhammad Aditio Kamal</title>
</head>

<body>
  <div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <a class="navbar-brand mr-5" href="home.php">
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
        </ul>
      </div>
    </nav>
    <br />
    <h3 class="d-flex justify-content-center">Input Data Barang</h3>
    <!-- Input -->
    <div class="row justify-content-center">
      <div class="col-md-4">

        <br /><a href="home.php"><button class="btn btn-danger">
            << Back</button> </a> <br /><br />

            <form action="simpanData.php" method="POST">
              <div class="form-group">

                <!-- merk -->
                <div class="panel-group">
                  <div class="panel-heading">
                    <label for="merk">Nama Merk</label>
                  </div>
                  <div class="panel-body">
                    <input type="text" class="form-control" id="merk" name="merk" autocomplete="on" placeholder="Masukan Merk" required>
                  </div>
                </div>

                <br />

                <!-- warna -->
                <div class="panel-group">
                  <div class="panel-heading">
                    <label for="warna">Warna</label>
                  </div>
                  <div class="panel-body">
                    <input type="text" class="form-control" id="warna" name="warna" autocomplete="on" placeholder="Masukan Warna" required>
                  </div>
                </div>

                <br />

                <!-- jumlah -->
                <div class="panel-group">
                  <div class="panel-heading">
                    <label for="jumlah">Jumlah</label>
                  </div>
                  <div class="panel-body">
                    <input type="number" class="form-control" id="jumlah" name="jumlah" autocomplete="on" placeholder="Masukan Jumlah" required>
                  </div>
                </div>

                <br />

                <button type="submit" class="btn btn-success" name="simpan">Save</button>
                <button type="reset" class="btn btn-primary" name="reset">Reset</button>
              </div>
            </form>
      </div>
    </div>

    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
  </div>
</body>

</html>