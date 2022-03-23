<!doctype html>
<html class="no-js" lang="zxx">

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

    <!-- header-start -->
    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-2">
                            <div class="logo">
                                <a href="home.php">
                                    <img src="img/logo/logo_dts.png" width="150" height="" alt="DTS">
                                </a>
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-7 ">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a class="active" href="home.php">Home</a></li>

                                        <li><a>Inventaris <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="data_barang_view.php">Data Barang</a></li>

                                                <li><a href="data_supplier_view.php">Data Supplier</a></li>
                                            </ul>
                                        </li>

                                        <li><a class="active" href="home.php#contact">Contact</a></li>

                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                            <div class="Appointment">
                                <div class="genric-btn danger d-none d-lg-block">
                                    <a href="index.php" onclick="return confirm('Apakah Anda yakin akan sign out ?')">Logout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>

            </div>
        </div>
        </div>
    </header>
    <!-- header-end -->

  <!-- bradcam_area  -->
  <div class="bradcam_area bradcam_bg_1">
    <div class="container">
      <div class="row">
        <div class="col-xl-12">
          <div class="bradcam_text text-center">
            <h3>PT. Gudang Utama Indonesia</h3>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /bradcam_area  -->

  <!-- aktivitas_area  -->
  <div class="service_area">
    <div class="container">
      <div class="row">
        <div class="col-xl-12">
          <div class="section_title text-center mb-65">
            <span></span>
            <h3>Data Barang</h3>
            <h4>Tambah Data</h4>
          </div>
        </div>
      </div>

      <!-- konten -->
      <div class="row justify-content-center">
        <div class="col-md-8">

              <a href="data_barang_view.php"><button class="btn btn-danger">
              << Back</button> </a> <br /><br />

              <form action="tambah_barang_aksi.php" method="POST">
                <div class="form-group">

                  <!-- kode barang -->
                  <div class="panel-group">
                    <div class="panel-heading">
                      <label for="kode_barang">Kode Barang</label>
                    </div>
                    <div class="panel-body">
                      <input type="number" class="form-control" id="kode_barang" name="kode_barang" autocomplete="on" placeholder="Input Kode Barang" required>
                    </div>
                  </div>

                  <br />

                  <!-- tanggal masuk -->
                  <div class="panel-group">
                    <div class="panel-heading">
                      <label for="tgl_masuk">Tanggal Masuk</label>
                    </div>
                    <div class="panel-body">
                      <input type="date" class="form-control" id="tgl_masuk" name="tgl_masuk" autocomplete="on" required>
                    </div>
                  </div>

                  <br />

                  <!-- nama barang -->
                  <div class="panel-group">
                    <div class="panel-heading">
                      <label for="nama_barang">Nama Barang</label>
                    </div>
                    <div class="panel-body">
                      <input type="text" class="form-control" id="nama_barang" name="nama_barang" autocomplete="on" placeholder="Input Nama Barang" required>
                    </div>
                  </div>

                  <br />

                  <!-- spesifikasi -->
                  <div class="panel-group">
                    <div class="panel-heading">
                      <label for="spesifikasi">Spesifikasi</label>
                    </div>
                    <div class="panel-body">
                      <input type="text" class="form-control" id="spesifikasi" name="spesifikasi" autocomplete="on" placeholder="Input Spesifikasi Barang" required>
                    </div>
                  </div>

                  <br />

                  <!-- supplier -->
                  <div class="panel-group">
                    <div class="panel-heading">
                      <label for="supplier">Supplier</label>
                    </div>
                    <div class="panel-body">
                      <input type="text" class="form-control" id="supplier" name="supplier" autocomplete="on" placeholder="Input Supplier Barang" required>
                    </div>
                  </div>

                  <br />

                  <!-- harga beli -->
                  <div class="panel-group">
                    <div class="panel-heading">
                      <label for="harga_beli">Harga Beli</label>
                    </div>
                    <div class="panel-body">
                      <input type="number" class="form-control" id="harga_beli" name="harga_beli" autocomplete="on" placeholder="Input Harga Beli" required>
                    </div>
                  </div>

                  <br />

                  <!-- harga jual -->
                  <div class="panel-group">
                    <div class="panel-heading">
                      <label for="harga_jual">Harga Jual</label>
                    </div>
                    <div class="panel-body">
                      <input type="number" class="form-control" id="harga_jual" name="harga_jual" autocomplete="on" placeholder="Input Harga Pokok Penjualan" required>
                    </div>
                  </div>

                  <br />

                  <button type="submit" class="btn btn-success" name="simpan">Save</button>
                  <button type="reset" class="btn btn-primary" name="reset">Reset</button>
                </div>
              </form>
        </div>
      </div>
    </div>
  </div>
  <!--/ aktivitas_area  -->

  <!-- footer start -->
  <footer class="footer">
    <div class="footer_top">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-xl-6 col-md-6">
            <div class="menu_links">
              <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="#about">About</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="copy-right_text">
      <div class="container">
        <div class="footer_border"></div>
        <div class="row">
          <div class="col-xl-12">
            <p class="copy_right text-center">
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              Copyright &copy;
              <script>
                document.write(new Date().getFullYear());
              </script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!--/ footer end  -->

  <!-- JS here -->
  <script src="js/vendor/modernizr-3.5.0.min.js"></script>
  <script src="js/vendor/jquery-1.12.4.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/isotope.pkgd.min.js"></script>
  <script src="js/ajax-form.js"></script>
  <script src="js/waypoints.min.js"></script>
  <script src="js/jquery.counterup.min.js"></script>
  <script src="js/imagesloaded.pkgd.min.js"></script>
  <script src="js/scrollIt.js"></script>
  <script src="js/jquery.scrollUp.min.js"></script>
  <script src="js/wow.min.js"></script>
  <script src="js/nice-select.min.js"></script>
  <script src="js/jquery.slicknav.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/plugins.js"></script>
  <script src="js/gijgo.min.js"></script>

  <!--contact js-->
  <script src="js/contact.js"></script>
  <script src="js/jquery.ajaxchimp.min.js"></script>
  <script src="js/jquery.form.js"></script>
  <script src="js/jquery.validate.min.js"></script>
  <script src="js/mail-script.js"></script>

  <script src="js/main.js"></script>
</body>

</html>