<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard.php</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container p-1">
         <a class="navbar-brand fw-semibold fs-4" href="#" style="color: #03829E;">NearbyU Space</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link fw-medium"  aria-current="page" href="Dashboard.php" style="color: #03829E;">Dashboard</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link fw-medium text-black" href="Produk.php">Produk</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link fw-medium text-black" href="Pemesanan.php">Pemesanan</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link fw-medium text-black" href="Laporan.php">Laporan</a>
                    </li>
                </ul>
            </div>
                <div class="nav-item ms-auto">
                <a class="nav-link fw-medium text-black" href="Profile User.php">
                   Admin <img src="../assets/profile.png" width="30" id="navProfileImage" alt="Profile Picture">
                 </a>
                </div>
        </div>
    </div>
</nav>
<!-- Navbar end -->

<!-- Product start -->
    <div class="container mt-4">
        <h5>Welcome back Admin!</h5>
        <h5 class="business-insight mt-4">My Sales</h5>
        <div class="row w-100 d-flex justify-content-between">
            <div class="col-md-4">
                <div class="card text p-3  text-white" style="background: #03829E;">
                <h5 class="card-title">Booking</h5>
                    <h2>10</h2>
                </div>
            </div>
            <div class="col-md-4">
            <div class="card text p-3  text-white" style="background: #009688">
                    <h5 class="card-title">Payment</h5>
                    <h2>5</h2>
                </div>
            </div>
            <div class="col-md-4">
            <div class="card text p-3 text-white" style="background: #4caf50;" >
                    <h5 class="card-title">Active</h5>
                    <h2>15</h2>
                </div>
            </div>
        </div>
        <h5 class="business-insight mt-4">Business Insight</h5>
        <div class="row mt-3">
            <div class="col-md-6">
                <div class="card p-3">
                    <h5 class="card-title text-center">Pengunjung Detail</h5>
                    <img src="../assets/image 2.png" alt="Pengunjung Detail" class="img-fluid">
                </div>
            </div>
            <div class="col-md-6">
                <div class="card p-3">
                    <h5 class="card-title text-center">Pendapatan Detail</h5>
                    <img src="../assets/image 2.png" alt="Pendapatan Detail" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
<!-- Produk end -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.3/font/bootstrap-icons.min.js"></script>
    <script src="https://kit.fontawesome.com/6660ed681b.js" crossorigin="anonymous"></script>
</body>
</html>