<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Laporan</title>
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
                    <a class="nav-link fw-medium text-black" aria-current="page" href="Dashboard.php">Dashboard</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link fw-medium text-black" href="Produk.php">Produk</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link fw-medium text-black" href="Pemesanan.php">Pemesanan</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link fw-medium"  aria-current="page" style="color: #03829E;" href="laporan">Laporan</a>
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
<body>
<div class="container mt-5">
    <div class="row">
      <div class="col-md-6">
        <div class="card">
          <div class="card-body text-justify">
            <h5 class="card-title">Pesanan Detail</h5>
            <img src="../assets/image 2.png" class="img-fluid" alt="Pesanan Detail">
            <a href="#" class="btn btn-primary mt-3" onclick="downloadFile('pesanan_detail.xlsx')">Download xlsx</a>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card">
          <div class="card-body text-justify">
            <h5 class="card-title">Pendapatan Detail</h5>
            <img src="../assets/image 2.png" class="img-fluid" alt="Pendapatan Detail">
            <a href="#" class="btn btn-primary mt-3" onclick="downloadFile('pendapatan_detail.xlsx')">Download xlsx</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS and dependencies -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <!-- Custom JS -->
  <script>
    function downloadFile(filename) {
      const link = document.createElement('a');
      link.href = 'path/to/your/xlsx/files/' + filename;
      link.download = filename;
      document.body.appendChild(link);
      link.click();
      document.body.removeChild(link);
    }
  </script>
</body>
</html>