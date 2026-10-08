<?php
// ambil pesan jika ada
    if(isset($_GET["pesan"])) {
        $pesan = " <p> {$_GET["pesan"]} <p>";
    }else {
        $pesan = "";
    }

    //  ambil variabel 
    if (isset($_GET["nama"])) {
        $nilai_nama = $_GET["nama"];
    }
    else {
        $nilai_nama = "";
    }

    if (isset($_GET["email"])) {
        $nilai_email = $_GET["email"];
    }
    else {
        $nilai_email = "";
    }

    if (isset($_GET["hargamobil"])) {
        $nilai_hargamobil = $_GET["hargamobil"];
    }
    else {
        $nilai_hargamobil = "";
    }

    if (isset($_GET["dp"])) {
        $nilai_dp = $_GET["dp"];
    }
    else {
        $nilai_dp = "";
    }

    if (isset($_GET["tenor"])) {
        $nilai_tenor = $_GET["tenor"];
    }
    else {
        $nilai_tenor = "";
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Angsuran Mobil</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
     <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&family=Orbitron:wght@400..900&family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="savaran.css">
</head>
<body>
    <nav class="navbar bg-body-secondary">
        <div class="container-fluid">
            <a class="navbar-brand d-flex align-items-center gap-4 " href="#">
                <img class="mobil" src="gambar/logomobil.jpeg" alt="logo">
                <div class="lh-sm">
                    <span class="logo fw-bold tracking-wide text-dark">SAVARAN</span>
                    <br><small class="text-1 text-dark">LOGISTICS SOLUTIONS</small>
                </div>
            </a>
        </div>
    </nav>
    <nav class="navbar navbar-expand-lg bg-white shadow-lg">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-st text-dark" id="navbarNav">
                <ul class="navbar-nav gap-3">
                    <li class="nav-item"><a class="nav-link" href="savaran.php">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" href="#tentangperusahaan">Tentang  Perusahaan</a></li>
                    <li class="nav-item"><a class="nav-link" href="#koleksi">Koleksi  Mobil</a></li>
                    <li class="nav-item"><a class="nav-link" href="#kontak">Kontak</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-1">
        <section class="hero-section shadow-sm">
            <div id="heroCarousel" class="carousel slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row align-items-center g-0">
                            <div class="col-lg-5 px-5 py-5">
                                <span class="savaran text-uppercase text-muted fw-semibold">SAVARAN</span>
                                <h1 class="judol fw-bold display-5 text-dark mt-2 mb-3">
                                    Mobil Impian Lebih Dekat
                                </h1>
                                <p class="text-muted mb-4">
                                    Dapatkan kendaraan terbaik dengan solusi pembiayaan yang mudah, cepat, dan terpercaya.
                                </p>
                                <a href="" class="btn btn-dark rounded-pill px-4 py-2">Lihat Koleksi Mobil<i class="fa-solid fa-arrow-right ms-2 text-white"></i></a>
                            </div>
                            <div class="col-lg-7">
                        <img src="gambar/background-1.jpg"class="img-fluid w-100 hero-img" alt="mobil-1">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class=" row align-items-center g-0">
                            <div class="col-lg-5 px-5 py-5">
                                <span class="savaran text-uppercase text-muted fw-semibold">SAVARAN</span>
                                <h1 class="judol fw-bold display-5 text-dark mt-2 mb-3">Solusi Kendaraan Keluarga</h1>
                                <p class="text-muted mb-4">Pilihan mobil keluarga berkualitas tinggi dengan cicilan ringan dan proses transparan</p>
                                <a href="#" class="btn btn-dark rounded-pill px-4 py-2">
                                    Lihat Koleksi Mobil <i class="fa-solid fa-arrow-right ms-2 text-white"></i>
                                </a>
                            </div>
                            <div class="col-lg-7">
                                <img src="gambar/background-2.jpg" class="img-fluid w-100 hero-img" alt="mobil-2">
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class=" row align-items-center g-0">
                            <div class="col-lg-5 px-5 py-5">
                                <span class="savaran text-uppercase text-muted fw-semibold">SAVARAN</span>
                                <h1 class="judol fw-bold display-5 text-dark mt-2 mb-3">Temukan Mobil Pilihanmu</h1>
                                <p class="text-muted mb-4">Berbagai pilihan kendaraan untuk kebutuhan pribadi maupun keluarga.</p>
                                <a href="#" class="btn btn-dark rounded-pill px-4 py-2 text-white">
                                    Lihat Koleksi Mobil <i class="fa-solid fa-arrow-right ms-2 text-white"></i>
                                </a>
                            </div>
                            <div class="col-lg-7">
                                <img src="gambar/background-3.jpeg" class="img-fluid w-100 hero-img" alt="mobil-3">
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev carousel-arrow" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next carousel-arrow" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>
    </div>
    <div class="container-2 my-5" id="tentangperusahaan">
        <section class="kentang p-4 md-5 shadow-sm">
            <div class="d-flex align-items-center gap-3 mb-4">
                <h2 class="subjudul fw-semibold text-dark fs-3 mb-0">Tentang Perusahaan</h2>
            </div>
            <div class="row align-items-center g-4">
                <div class="col-lg-6">
                    <p class="josjiss text-muted">
                         SAVARAN adalah perusahaan yang bergerak di bidang penjualan mobil baru dan bekas dengan layanan pembiayaan kendaraan yang mudah, cepat, dan terpercaya. Kami hadir untuk membantu Anda mewujudkan mobil impian dengan solusi pembayaan yang sesuai kebutuhan.
                    </p>
                    <div class="row text-center g-3 mt-3">
                        <div class="col-4">
                            <div class="feature-box p-3">
                                <span class="fw-semibold small text-dark">Aman</span>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="feature-box p-3">
                                <span class="fw-semibold small text-dark">Otomotif</span>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="feature-box p-3">
                                <span class="fw-semibold small text-dark">Profesional</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="gambar/dealer.jpg" class="img-fluid rounded-2 shadow-sm w-100 object-fit-cover" style="height:350px;" alt="dealer">
                </div>
            </div>
        </section>
    </div>
    <div class="container-fluid my-5 mb-5" id="koleksi">
        <section class="p-4 p-md-5">
            <div class="d-flex align-items-center gap-3 mb-2">
                  <h2 class="subjudul fs-3 mb-0">Koleksi Mobil</h2> 
            </div>
            <p class="text-muted mb-4">Pilihlah Mobil Sesuai Kebutuhan dan Anggaran Anda</p>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
                <div class="col">
                    <div class="card h-100 shadow-sm rounded-3 overflow-hidden w-100">
                        <img src="https://i.pinimg.com/736x/6c/18/bb/6c18bbffeee8638988cd41c88ed0db7c.jpg" class="card-img card-img-top" alt="fortuner">
                        <div class="card-body p-3">
                            <h5 class="card-title fw-semibold fs-6 mb-1 ">Toyota Fortuner</h5>
                            <p class="card-text text-secondary mb-0">Rp. 550.000.000</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 shadow-sm rounded-3 overflow-hidden w-100">
                        <img src="https://i.pinimg.com/1200x/a2/52/e8/a252e8b30ce423785b5bced85fe2dd46.jpg" class="card-img card-img-top" alt="Civic">
                        <div class="card-body p-3">
                            <h5 class="card-title fw-semibold fs-6 mb-1 ">Honda Civic</h5>
                            <p class="card-text text-secondary mb-0">Rp. 440.000.000</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 shadow-sm rounded-3 overflow-hidden w-100">
                        <img src="https://i.pinimg.com/736x/cd/42/ad/cd42adce1877b609ee5309a0d1da360e.jpg" class="card-img card-img-top" alt="wuling">
                        <div class="card-body p-3">
                            <h5 class="card-title fw-semibold fs-6 mb-1 ">Wuling Air EV</h5>
                            <p class="card-text text-secondary mb-0">Rp. 214.000.000</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 shadow-sm rounded-3 overflow-hidden w-100">
                        <img src="https://i.pinimg.com/736x/e2/e3/2b/e2e32b85fddaaa60dbbc64143bc8fab2.jpg" class="card-img card-img-top" alt="HR-V">
                        <div class="card-body p-3">
                            <h5 class="card-title fw-semibold fs-6 mb-1 ">Honda HR-V</h5>
                            <p class="card-text text-secondary mb-0">Rp. 410.000.000</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <section class="container-fluid bg-white p-5 p-md-5 rounded-3 shadow-sm mb-10">
        <div class="d-flex align-items-center gap-3 mb-4">
                <h2 class="subjudul fw-semibold text-dark fs-3 mb-0">Kalkulator Penghitungan Angsuran Mobil</h2>
        </div>
        <br>
        <div class="row g-4">
            <div class="container">
                <form action="prosesdata.php" method="POST">
                     <?php echo $pesan; ?>
                    <div class="mb-3 row align-items-center">
                        <label for="" class="col-sm-4">Nama :</label>
                        <div class="col-sm-8">
                            <input type="text" name="nama" placeholder="Masukkan Nama" class="w-100" value="<?php echo $nilai_nama; ?>">
                        </div>
                    </div>
                    <div class="mb-3 row align-items-center">
                        <label for="" class="col-sm-4">Email :</label>
                        <div class="col-sm-8">
                            <input type="text" name="email" placeholder="Masukkan Email" class="w-100" value="<?php echo $nilai_email; ?>">
                        </div>
                    </div>
                    <div class="mb-3 row align-items-center">
                        <label for="" class="col-sm-4">Harga Mabil :</label>
                        <div class="col-sm-8">
                            <input type="number" name="hargamobil" placeholder="Contoh: 300000000" class="w-100" value="<?php echo $nilai_hargamobil; ?>">
                        </div>
                    </div>
                    <div class="mb-3 row align-items-center">
                        <label for="" class="col-sm-4">DP:</label>
                        <div class="col-sm-8">
                            <select name="dp" class="form-select" id="">
                                <option value="10"  <?php if($nilai_dp == 10) echo "selected"; ?>>10%</option>
                                <option value="20"  <?php if($nilai_dp == 20) echo "selected";?>>20%</option>
                                <option value="30"  <?php if($nilai_dp == 30) echo "selected";?>>30%</option>
                                <option value="40"   <?php if($nilai_dp == 40) echo "selected";?>>40%</option>
                                <option value="50"  <?php if($nilai_dp == 50) echo "selected";?>>50%</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 align-items-center">
                        <label for=""class="col-sm-4">Tenor:</label>
                        <div class="container">
                            <input type="radio" name="tenor" value="1" id="tenor1
                             <?php if($nilai_tenor == 1) echo "checked"; ?>">
                            <label for="">1 Tahun</label>
                            <input type="radio" name="tenor" value="2" id="tenor2
                             <?php if($nilai_tenor == 2) echo "checked"; ?>">
                            <label for="">2 Tahun</label>
                            <input type="radio" name="tenor" value="3" id="tenor3
                             <?php if($nilai_tenor == 3) echo "checked"; ?>">
                            <label for="">3 Tahun</label>
                            <input type="radio" name="tenor" value="4" id="tenor4
                             <?php if($nilai_tenor == 4) echo "checked"; ?>">
                            <label for="">4 Tahun</label>
                            <input type="radio" name="tenor" value="5" id="tenor5
                             <?php if($nilai_tenor == 5) echo "checked"; ?>">
                            <label for="">5 Tahun</label>
                        </div>
                    </div>
                    <input type="submit" name="submit" class="btn btn-dark w-100" value="Hitung Angsuran"></input>
                </form>
            </div>
        </div>
    </section>
     <footer class="footer bg-dark py-4 mt-5" id="kontak">
        <div class="container">
            <div class="row align-items-center gy-3">
                <div class="col-md-3">
                    <div class="d-flex align-items-center gap-2 mb-2">
                        <i class="fa-solid fa-truck-fast fs-4 text-white"></i>
                        <span class="fw-bold fs-6 tracking-wide text-white">SAVARAN</span>
                    </div>
                    <p class="small mb-0 text-white">Solusi Pembiayaan Mobil Impian</p>
                </div>
                <div class="col-md-3 small">
                    <h6 class="text-white">Explore</h6>
                    <ul class="text-white">
                        <li>
                            <a class="footer-ul" href="savaran.php">Beranda</a>
                        </li>
                        <li>
                            <a class="footer-ul" href="#tentangperusahaan">Tentang Perusahaan</a>
                        </li>
                        <li>
                            <a class="footer-ul" href="#koleksi">Koleksi Mobil</a>
                        </li>
                        <li><a class="footer-ul" href="#kontak">Kontak</a></li>
                    </ul>
                </div>
                <div class="col-md-3 small">
                    <h6 class="text-white">Kontak</h6>
                   <ul class="text-white">
                        <li>Email: savaran@gmail.com</li>
                        <li>No. HP: 083456782910</li>
                        <li>Alamat: Jl. Peltu Soebowo Soepangat, Klero, Kab. Semarang, Jawa Tengah</li>
                    </ul>
                </div>
                <div class="col-md-3 text-md-end">
                    <span class="small d-block mb-2 text-white">Ikuti Kami</span>
                    <div class="d-flex gap-2 justify-content-md-end">
                        <a href="#" class="btn btn-dark btn-sm rounded-circle border border-secondary"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#" class="btn btn-dark btn-sm rounded-circle border border-secondary"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#" class="btn btn-dark btn-sm rounded-circle border border-secondary"><i class="fa-brands fa-youtube"></i></a>
                    </div>
                </div>
            </div>
            <hr class="border-secondary my-3">
            <div class="text-center text-white small">
                © 2025 SAVARAN. Semua hak dilindungi.
            </div>
        </div>
    </footer>
</body>
</html>