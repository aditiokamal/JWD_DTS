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
          <li class="nav-item active">
            <a class="nav-link" href="home.php">Home</a>
          </li>
        </ul>
      </div>
    </nav>
    <br />
    <h3 class="d-flex justify-content-center">Data Barang</h3>
    <br />
    <a href="inputBarang.php"><button class="btn btn-primary">Tambah Data</button></a>
    <!-- konten -->
    <div class="row justify-content-center">
      <div class="col-md-12">
      <br />
        <table class="table">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Nama Merk</th>
              <th scope="col">Warna</th>
              <th scope="col">Jumlah</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
          <?php
            include 'dbConnection.php';
            $no = 1;
            $data = mysqli_query($conn,"select * from maki_tb_barang");
            while($d = mysqli_fetch_array($data)){
          ?>
            <tr>
              <td><?php echo $no++; ?></td>
              <td><?php echo $d['nama_merek']; ?></td>
              <td><?php echo $d['warna']; ?></td>
              <td><?php echo $d['jumlah']; ?></td>
              <td>
                <a href="editBarang.php?no=<?php echo $d['no']; ?>"><button class="btn btn-success">Edit</button></a>
                <a href="deleteBarang.php?no=<?php echo $d['no']; ?>"><button class="btn btn-danger">Delete</button></a>
              <td>
            </tr>

          </tbody>

        <?php
          }
        ?>

        </table>

      </div>
    </div>
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
  </div>
</body>

</html>