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
    <div class="container p-2 d-flex justify-content-between w-100">
        <div>
            <a class="navbar-brand fw-semibold fs-4" href="#" style="color: #03829E;">NearbyU Space</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto d-flex align-items-center">
                <li class="nav-item me-4">
                    <a class="nav-link fw-medium text-black" href="index.php">Home</a>
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
                    <a class="nav-link fw-medium" aria-current="page" href="index.php" style="color: #03829E;">My Order</a>
                </li>
            </ul>
        </div>
        <div class="nav-item">
            <a class="nav-link" href="Profile User.php">
                <img src="assets/profile.png" width="50" id="navProfileImage" alt="Profile Picture">
            </a>
        </div>
    </div>
</nav>

    <!-- Navbar End -->

    <!-- Our Product Start -->
    <div class="container mt-5">
        <h2>Edit Profile</h2>
        <form id="Profile-form">
            <div class="form-group">
                <label for="profilePic">Profile Picture</label>
                <div class="mb-3">
                    <img id="profilePicPreview" src="https://via.placeholder.com/150" class="img-thumbnail" alt="Profile Picture Preview" style="max-width: 150px;">
                    <input type="file" class="form-control-file" id="profilePic" accept="image/*">
                </div>
                <div class="form-group">
                 <label for="username">Name</label>
                    <input type="text" class="form-control" id="username" placeholder="Enter username">
                </div>
                <div class="form-group">
                    <label for="mobile">mobile number</label>
                    <input type="tel" class="form-control" id="mobile" placeholder="Mobile number" required>
                 </div>
                <div class="form-group">
                    <label for="password">email</label>
                    <input type="email" class="form-control" id="email" placeholder="email">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Password">
                </div>
                <div class="py-2 g-col-6">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="submit" class="btn btn-danger">cancel</button>
                </div>
            </div>
        </form>
      </div>
    <!-- Our Product End -->

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


    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/6660ed681b.js" crossorigin="anonymous"></script>
    <script>
        document.getElementById('rofile-form').addEventListener('change', function(event) {
          var reader = new FileReader();
          reader.onload = function(){
            var output = document.getElementById('profilePicPreview');
            output.src = reader.result;
          };
          reader.readAsDataURL(event.target.files[0]);
        });
      </script>
</body>

</html>