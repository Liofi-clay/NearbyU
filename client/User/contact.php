<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NearbyU Space</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .navbar {
            padding: 1rem 2rem;
        }
        .navbar-brand {
            color: #03829E !important;
            font-weight: 600;
            font-size: 1.5rem;
        }
        .nav-link {
            font-weight: 500;
            color: black;
            margin-right: 1.5rem;
        }
        .nav-link.active {
            color: #03829E !important;
        }
        .dropdown-menu {
            min-width: 200px;
        }
        .dropdown-menu a {
            color: black !important;
        }
        .navbar-toggler {
            border: none;
        }
        .navbar-toggler:focus {
            box-shadow: none;
        }
        .navbar-toggler-icon {
            color: black;
        }
        .navbar-nav .nav-item:last-child {
            margin-right: 0;
        }
        .navbar-nav{
            display: flex;
            flex-direction: row;
            align-items: center;
        }
        #navProfileImage {
            width: 40px;
            height: 40px;
            object-fit: cover;
        }
    </style>
</head>

<body>
    <!-- Navbar Start -->

    <nav class="navbar navbar-expand-lg sticky-top bg-white border-bottom">
        <div class="container-fluid mx-5">
            <a class="navbar-brand" href="#">NearbyU Space</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="our space.php">Our Space</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Location.php">Location</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="contact.php">Contact</a>
                    </li>
                    <li class="nav-item">
                        <div id="authMenu">
                            <!-- This will be populated with Sign In button or Profile Menu based on user's login status -->
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Our Product Start -->
    <div class="container mt-5">
        <div class="row">
          <div class="col-md-6">
            <img src="../assets/desk1.jpg" class="img-fluid rounded" alt="...">
          </div>
          <div class="col-md-6">
            <h2>Get in Touch <span>with Us!</span></h2>
            <p>Kami menyediakan suasana yang terkurasi dan nyaman untuk mendorong mood anda bekerja, berkolaborasi, berkreasi dan berkembang bersama.</p>
            <div class="contact-info">
              <div class="mb-3">
                <h5 class="card-text" style="color: #03829E;">Senin-Minggu</h5>
                <p>07.00 AM - 10.00 PM</p>
                <a href="#" class="btn btn-dark">BOOK SPACE</a>
              </div>
              <div class="mb-3">
                <h5 class="card-text" style="color: #03829E;">Customer Service</h5>
                <p>081239483676</p>
                <a href="https://wa.me/081223336773" class="btn btn-outline-dark">CHAT VIA WHATSAPP</a>
              </div>
            </div>
          </div>
        </div>
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
        document.addEventListener('DOMContentLoaded', function() {
            const authMenu = document.getElementById('authMenu');
            const token = localStorage.getItem('token');

            if (!token) {
            // User is not logged in, show Sign In button
                authMenu.innerHTML = `
                    <a class="btn btn-dark fw-medium" href="Login.php" role="button">Sign In</a>
                `;
            } else {
                // User is logged in, fetch user profile and update the menu
                fetch('http://127.0.0.1:8000/api/profile', {
                    method: 'GET',
                    headers: {
                        'Authorization': 'Bearer ' + token,
                        'Content-Type': 'application/json'
                    }
                })
                .then(response => response.json())
                .then(data => {
                    if (data.error) {
                        alert('Error: ' + data.error);
                        localStorage.removeItem('token');
                        window.location.href = 'Login.php';
                    } else {
                        const profileImageUrl = data.image_profile ? `http://127.0.0.1:8000${data.image_profile}` : 'assets/profile.png';
                        authMenu.innerHTML = `
                            <div class="dropdown">
                                <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" role="button" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="${profileImageUrl}" width="40" class="rounded-circle" id="navProfileImage" alt="Profile Picture">
                                    <span class="ms-2">${data.username}</span>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="userDropdown">
                                    <li><a class="dropdown-item" href="Profile User.php">Profile</a></li>
                                    <li><a class="dropdown-item" href="My Order.php">My Order</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><div class="dropdown-item" onclick="logout()">Sign Out</div></li>
                                </ul>
                            </div>
                        `;
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('An error occurred while fetching user profile.');
                });
            }

        });
        function logout() {
            localStorage.removeItem('token');
            window.location.href = 'Login.php';
        }
    </script>
</body>

</html>