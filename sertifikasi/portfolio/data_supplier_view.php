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
                        <h3>Data Supplier</h3>

                    </div>
                </div>
            </div>

            <!-- konten -->
            <a href="tambah_supplier.php"><button class="btn btn-primary">Tambah Data</button></a>
            <a href="export_supplier.php"><button class="btn btn-success">Export Excel</button></a>
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <br />
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Kode Supplier</th>
                                <th scope="col">Nama Supplier</th>
                                <th scope="col">Alamat Supplier</th>
                                <th scope="col">Kontak Supplier</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include 'dbConnection.php';
                            //$no = 1;<?php echo $no++
                            $data = mysqli_query($conn, "select * from data_supplier");
                            while ($d = mysqli_fetch_array($data)) {
                            ?>
                                <tr>
                                    <td><?php echo $d['no']; ?></td>
                                    <td><?php echo $d['kode_supplier']; ?></td>
                                    <td><?php echo $d['nama_supplier']; ?></td>
                                    <td><?php echo $d['alamat_supplier']; ?></td>
                                    <td><?php echo $d['kontak_supplier']; ?></td>

                                    <td>
                                        <a class="btn btn-success" href="edit_supplier.php?no=<?php echo $d['no']; ?>">Edit</a>
                                        <a class="btn btn-danger" onclick="return confirm('Apakah Anda yakin akan hapus menghapus data ?')" href="delete_supplier_aksi.php?no=<?php echo $d['no']; ?>">Delete</a>
                                    <td>
                                </tr>
                        </tbody>
                    <?php } ?>
                    </table>
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