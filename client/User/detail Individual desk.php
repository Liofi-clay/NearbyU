<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NearbyU Space</title>
    <link rel="stylesheet" href="booking.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <!-- Navbar Start -->

    <nav class="navbar navbar-expand-lg border sticky-top bg-white">
        <div class="container p-2">
            <a class="navbar-brand fw-semibold fs-4" href="#" style="color: #03829E;">NearbyU Space</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item me-4">
                        <a class="nav-link fw-medium text-black" href="index.php">Home</a>
                    </li>
                    <li class="nav-item me-4">
                        <a class="nav-link fw-medium" aria-current="page" href="detail Individual desk.php" style="color: #03829E;">Our Space</a>
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

    <!-- Our Product Start -->
    <div class="container pt-5">
        <div class="row">
            <div class="col-md-6">
                <img src="../assets/desk3.jpg" class="img-fluid rounded" alt="...">
            </div>
            <div class="col-md-6 ps-5">
                <h4 class="fw-semibold">Individual Desk</h4>
                <p class="card-text">Sendirian tapi nyaman!</p>
                <p class="fw-medium">1 Orang</p>
                <p class="fs-5 fw-semibold">IDR 6000/Jam/Desk</p>
                <p>Desain meja individu yang lebih memberikan privasi untuk meningkatkan fokus dan konsentrasi saat bekerja sendiri</p>
                <h5>Our Facility</h5>
                    <div class="row">
                        <div class="col-md-3 col-sm-6 text-align mb-4">
                            <i class="fa-solid fa-snowflake" style="color:#03829E" ></i>
                            <span class="feature-text">Fresh Ac</span>
                        </div>
                        <div class="col-md-3 col-sm-6 text-align mb-4">
                            <i class="fa-solid fa-wifi" style= "color:#03829E"></i>
                            <span class="feature-text">Free Wifi</span>
                        </div>
                        <div class="col-md-3 col-sm-6 text-align mb-4">
                            <i class="fa-solid fa-print" style="color:#03829E"></i>
                            <span class="feature-text">Free Printer</span>
                        </div>
                        <a id="openModalBtn" class="btn btn-dark px-3 py-2" role="button">Book Now</a>
                        
                    </div>
            </div>
        </div>
    </div>
    <!-- Our Product End -->

<!-- Facility Start -->
    <div class="container pt-5">
        <h4>Our Space</h4>
        <div class="row pt-3">
            <div class="col-sm-4">
                <div class="card">
                    <img src="../assets/desk1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Group Desk</h5>
                        <p class="card-text">Bareng Temen Asik!</p>
                        <a href="detail group desk.html" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                  <img src="../assets/desk2.jpg" class="card-img-top" alt="Collaborative Room">
                  <div class="card-body">
                    <h5 class="card-title">Collaborative Room</h5>
                    <p class="card-text">Ruangan Privat Untuk Kegiatan Skala Besar</p>
                    <a href="detail collaborative desk.html" class="btn btn-primary">Learn More</a>
                  </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Facility End -->

    <!-- Footer Start -->
    <div class="footer bg-white border mt-5 pt-3">
        <div class="container">
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

    <!-- Modal -->
<div id="myModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <div class="container d-flex justify-content-center align-items-center min-vh-600">
            <div class="mb-3 row">
                <h2 class="text-center mb-4" style="color:  #03829E;" >BOOKING FORM</h2>
                <form id="booking-form">
                    <div class="mb-3">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Your Name" required>
                    </div>
                    <div class="mb-3">
                        <label for="coworking-type">Select Coworking Type</label>
                        <select class="form-select" id="coworking-type" aria-label="Default select example">
                            <option value="" disabled selected>Select a type</option>
                            <option value="Individual Desk">Individual Desk</option>
                            <option value="Group Desk">Group Desk</option>
                            <option value="Collaborative Room">Collaborative Room</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="day">Select Day</label>
                        <input type="date" class="form-control" id="day" required>
                    </div>
                    <div class="mb-3">
                        <label for="time-checkin">Select Time Check-in</label>
                        <input type="time" class="form-control" id="time-checkin" required>
                    </div>
                    <div class="mb-3">
                        <label for="time-checkout">Select Time Check-out</label>
                        <input type="time" class="form-control" id="time-checkout" required>
                    </div>
                    <div class="mb-3">
                        <label for="payment-method">Select Payment Method</label>
                        <select class="form-select" id="payment-method" aria-label="Select a payment method">
                            <option value="" disabled selected>Select a payment method</option>
                            <option value="QRIS">QRIS</option>
                            <option value="bank-transfer">Bank Transfer</option>
                        </select>
                    </div>
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary btn-block">Book Now</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

    <script src="./js/booking.js"></script>
    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/6660ed681b.js" crossorigin="anonymous"></script>
</body>

</html>