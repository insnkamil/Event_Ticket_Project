<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CDN Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- CDN Bootstrap Icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <!-- CDN Boxicons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="../assets/css/navbar.css">
    <!-- Icon -->
    <link rel="shortcun icon" href="../assets/img/depan.png">
    <title>Tempat Tujuan</title>
</head>
<body>
    <!-- Navbar (Navigasi Bar) -->
    <nav class="shadow">
        <a href="#" class="logo">Tiket Kereta Api</a>
        <div class="bx bx-menu" id="menu-icon"></div>
        <ul class="navbar">
            <li><a href="../index.html">Home</a></li>
            <li><a href="tempat_tujuan.php">Tempat Tujuan</a></li>
            <li><a href="pesan_tiket.php">Pesan Tiket</a></li>
            <li><a href="invoice.php">Invoice</a></li>
        </ul>
        <div class="user">
            <a href="#">
                <i class="bx bxs-user-account"></i> Halo!
            </a>
        </div>
    </nav>
    <br><br>
    <!-- Container -->
    <div class="container-md mt-5">
        <h2 class="mb-5" style="text-align: center;">Tempat Tujuan</h2>
        <div class="row">
            <!-- Card jenis Tujuan Jakarta-->
            <div class="col-12 col-md-6 col-lg-4 mt-3">
                <div class="card" style="height: 25rem;">
                    <img src="../assets/img/bandung.jpg" class="img-thumbnail" alt="bandung" style="object-fit: cover; height: 225px;">
                    <div class="card-body py-2">
                        <h4 class="card-title mb-2">Bandung (BD)</h4>
                        <hr>
                        <p class="card-text mb-0">
                            Tujuan : Bandung
                        </p>
                        <p class="card-text mb-0">
                            Pengunjung : 50
                        </p>
                        <p class="card-text mb-1">
                            Fasilitas : snack
                        </p>
                        <a class="btn btn-md btn-primary btn-outline-info" data-bs-toggle="modal" data-bs-target="#bandung">
                            <i class="bi bi-info-circle text-white"> Cek Harga</i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Card jenis Tujuan Semarang (SMG-A)
  -->
            <div class="col-12 col-md-6 col-lg-4 mt-3">
                <!-- Tinggi card 25rem -->
                <div class="card" style="height: 25rem;">
                    <img src="../assets/img/semarang.jpg" class="img-thumbnail" alt="semarang" style="object-fit: cover; height: 225px;">
                    <div class="card-body py-2">
                        <h4 class="card-title mb-2">Semarang (SMG-A)</h4>
                        <hr>
                        <p class="card-text mb-0">
                             Tujuan : Semarang (SMG-A)
                        </p>
                        <p class="card-text mb-0">
                            Pengunjung : 35
                        </p>
                        <p class="card-text mb-1">
                            Fasilitas : Makan
                        </p>
                        <a class="btn btn-md btn-primary btn-outline-info" href="daftar_harga.php" data-bs-toggle="modal" data-bs-target="#semarang">
                            <i class="bi bi-info-circle text-white"> Cek Harga</i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Card jenis Tujuan Yogyakarta (YOG-A)
 -->
            <div class="col-12 col-md-6 col-lg-4 mt-3">
                <!-- Tinggi card 25rem -->
                <div class="card" style="height: 25rem;">
                    <img src="../assets/img/jogja.jpg" class="img-thumbnail" alt="jogja" style="object-fit: cover; height: 225px;">
                    <div class="card-body py-2">
                        <h4 class="card-title mb-2">Yogyakarta (YOG-A)</h4>
                        <hr>
                        <p class="card-text mb-0">
                            Tujuan : Yogyakarta (YOG-A)
                        </p>
                        <p class="card-text mb-0">
                            Pengunjung : 20
                        </p>
                        <p class="card-text mb-1">
                            Fasilitas : Makan dan Minum
                        </p>
                        <a class="btn btn-md btn-primary btn-outline-info" href="daftar_harga.php" data-bs-toggle="modal" data-bs-target="#jogja">
                            <i class="bi bi-info-circle text-white"> Cek Harga</i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Harga bandung-->
    <div class="modal fade mt-4" id="bandung" data-bs-backdrop="static" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Harga Tiket</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="table-responsive">
                        <table class="table table-primary table-striped table-bordered border-primary" style="text-align: center; vertical-align: middle;">
                        <tr>
                            <th>Tempat</th>
                            <th>Tujuan</th>
                            <th>Harga</th>
                        </tr>
                        <tr>
                            <td>Bandung</td>
                            <td>Jakarta(GMR)-Bandung(BD)</td>
                            <td>Rp. 50.000</td>
                        </tr>
                        </table>
                    </div>
                </div>
                <div class="modal-footer" style="margin-top: -10px;">
                    <a class="btn btn-secondary" data-bs-dismiss="modal">Batal</a>
                    <a href="pesan_tiket.php" class="btn btn-primary btn-outline-info text-white">Pesan Tiket</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Harga Semarang (SMG-A)-->
    <div class="modal fade mt-4" id="semarang" data-bs-backdrop="static" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Harga Tiket</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="table-responsive">
                        <table class="table table-primary table-striped table-bordered border-primary" style="text-align: center; vertical-align: middle;">
                        <tr>
                            <th>Tempat</th>
                            <th>Tujuan</th>
                            <th>Harga</th>
                        </tr>
                        <tr>
                            <td>Semarang</td>
                            <td>Jakarta(GMR)-Semarang (SMG-A)</td>
                            <td>Rp. 100.000</td>
                        </tr>
                        </table>
                    </div>
                </div>
                <div class="modal-footer" style="margin-top: -10px;">
                    <a class="btn btn-secondary" data-bs-dismiss="modal">Batal</a>
                    <a href="pesan_tiket.php" class="btn btn-primary btn-outline-info text-white">Pesan Tiket</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Harga Yogyakarta (YOG-A)-->
    <div class="modal fade mt-4" id="jogja" data-bs-backdrop="static" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Harga Tiket</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="table-responsive">
                        <table class="table table-primary table-striped table-bordered border-primary" style="text-align: center; vertical-align: middle;">
                        <tr>
                            <th>Tempat</th>
                            <th>Tujuan</th>
                            <th>Harga</th>
                        </tr>
                        <tr>
                            <td>Yogyakarta</td>
                            <td>Jakarta(GMR)-Yogyakarta(YOG-A)</td>
                            <td>Rp. 150.000</td>
                        </tr>
                        </table>
                    </div>
                </div>
                <div class="modal-footer" style="margin-top: -10px;">
                    <a class="btn btn-secondary" data-bs-dismiss="modal">Batal</a>
                    <a href="pesan_tiket.php" class="btn btn-primary btn-outline-info text-white">Pesan Tiket</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Script Javascript untuk menu responsive -->
    <script src="../assets/js/menu.js"></script>
    <!-- CDN Javascript Bootstrap  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>