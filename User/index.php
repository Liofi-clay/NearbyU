<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NearbyU Space</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <!-- Navbar Start -->

    <nav class="navbar navbar-expand-lg border sticky-top bg-white">
        <div class="container-fluid mx-5 p-2">
            <a class="navbar-brand fw-semibold fs-4" href="#" style="color: #03829E;">NearbyU Space</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item me-4">
                        <a class="nav-link fw-medium" aria-current="page" href="index.php" style="color: #03829E;">Home</a>
                    </li>
                    <li class="nav-item me-4">
                        <a class="nav-link fw-medium text-black" href="detail Individual desk.php">Our Space</a>
                    </li>
                    <li class="nav-item me-4">
                        <a class="nav-link fw-medium text-black" href="about.php">About</a>
                    </li>
                    <li class="nav-item me-4">
                        <a class="nav-link fw-medium text-black" href="Location.php">Location</a>
                    </li>
                    <li class="nav-item me-4">
                        <a class="nav-link fw-medium text-black" href="contact.php">Contact</a>
                    </li>
                    <li class="nav-item me-4">
                        <a class="btn btn-dark fw-medium" href="Sign in.php" role="button">Sign In</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Carousel Start -->
    <div id="carouselExampleAutoplaying" class="carousel slide mx-5 p-2" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/desk1.jpg" class="d-block w-100 object-fit-cover" style="max-height: 500px" alt="...">
                <div class="carousel-caption d-md-block" style="position:absolute; top: 30%">
                    <h1 class="fw-bold pb-3" style="color: #03829E;">NearbyU Space</h1>
                    <p class="text-dark pb-3">Tingkatkan produktivitasmu bersama NearbyU Coworking space</p>
                    <a href="Book Now.html" class="btn btn-dark px-3 py-2" role="button">Book Now</a>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- Carousel End -->

    <!-- Our Space Start -->
    <div class="container mx-5 mt-5">
        <div class="container-fluid">
            <h3>Our Space</h3>
            <div class="row">
                <div class="col p-2">
                    <div class="card">
                        <img src="assets/desk3.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Individual Desk</h5>
                            <p class="card-text">Sendirian Tapi Nyaman </p>
                            <p class="fw-medium">1 Orang</p>
                            <p class="fs-5 fw-semibold">IDR 6000 <br><span class="fs-6 fw-normal">Jam/Desk</span></p>
                        </div>
                    </div>
                </div>
                <div class="col p-2">
                    <div class="card">
                        <img src="assets/desk4.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Group Desk</h5>
                            <p class="card-text">Bareng Temen Biar Asik </p>
                            <p class="fw-medium">5 Orang</p>
                            <p class="fs-5 fw-semibold">IDR 25000 <br><span class="fs-6 fw-normal">Jam/Desk</span></p>
                        </div>
                    </div>
                </div>
                <div class="col p-2">
                    <div class="card">
                        <img src="assets/desk5.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Collaborative Room</h5>
                            <p class="card-text">Ruangan Privat Untuk Kegiatan Skala Besar </p>
                            <p class="fw-medium">30 orang</p>
                            <p class="fs-5 fw-semibold">IDR 700000 <br><span class="fs-6 fw-normal">/4 Jam</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Our Space End -->

    <!-- About Start -->
    <div class="container mx-5 mt-5">
        <div class="container-fluid">
            <h3>About</h3>
            <div class="row justify-content-between">
                <div class="col-4 d-flex flex-column">
                    <h4>Come On! Working here! NearbyU Space</h4>
                    <p>Kami menyediakan suasana yang terkurasi dan nyaman untuk mendorong mood anda bekerja, berkolaborasi, berkreasi dan berkembang bersama</p>
                    <div class="text-center p-3 align-self-center" style="background-color: #F7F7F7;">
                        <p class="fs-5 fw-semibold">Senin-Minggu</p>
                        <p>07.00 AM - 10.00 PM</p>
                    </div>
                </div>
                <div class="col-7">
                    <img class="img-fluid" src="assets/desk4.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Footer Start -->
    <div class="footer bg-white border mt-5 pt-3">
        <div class="container-fluid px-5">
            <div class="row">
                <div class="col-md-6 d-flex flex-column">
                    <a class="navbar-brand fw-semibold fs-4" href="#" style="color: #03829E;">NearbyU Space</a>
                    <div class="d-flex gap-3 mt-auto">
                        <i class="fa-brands fa-facebook" style="color: #005eff;"></i>
                        <i class="fa-brands fa-tiktok"></i>
                        <i class="fa-brands fa-youtube" style="color: #ff0000;"></i>
                        <i class="fa-brands fa-instagram" style="color: #b0039c;"></i>
                        <i class="fa-brands fa-whatsapp" style="color: #2e9e05;"></i>
                    </div>
                </div>
                <div class="col-md-2">
                    <a class="nav-link fw-medium text-black" style="font-size: 16px;" href="#">Our Space</a>
                    <div class="row pt-3 gap-3">
                        <div class="row-md-4">Individual Desk</div>
                        <div class="row-md-4">Group Desk</div>
                        <div class="row-md-4">Collaborative Room</div>
                    </div>
                </div>
                <div class="col-md-2">
                    <a class="nav-link fw-medium text-black" style="font-size: 16px;" href="#">Our Hours</a>
                    <div class="row pt-3 gap-3">
                        <div class="row-md-4">Senin - Minggu</div>
                        <div class="row-md-4">07.00 AM - 10.00 PM</div>
                        <div class="row-md-4">IDR 6.000/Jam</div>
                    </div>
                </div>
                <div class="col-md-2">
                    <a class="nav-link fw-medium text-black" style="font-size: 16px;" href="#">Kontak</a>
                    <div class="row pt-3 gap-3">
                        <div class="row-md-4">Jl. Margonda No.430, Pondok Cina, Kecamatan Beji, Kota Depok, Jawa Barat 16431</div>
                        <div class="row-md-4">+6281239483676</div>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col text-center">
                    <p>&copy; 2024 NearbyU Space. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/6660ed681b.js" crossorigin="anonymous"></script>
</body>

</html>