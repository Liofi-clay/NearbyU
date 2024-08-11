<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NearbyU Space</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .card {
            width: 100%;
            height: 100%;
        }
        .card img {
            max-height: 200px;
            object-fit: cover;
        }
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
                        <a class="nav-link active" href="our space.php">Our Space</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Location.php">Location</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
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
    <div class="container pt-5">
        <div class="row" id="productMain">
            <!-- Product main will be populated by JavaScript -->
        </div>
    </div>
    <!-- Our Product End -->

    <!-- Facility Start -->
    <div class="container pt-5">
        <h4>Our Space</h4>
        <div class="row pt-3" id="facilityList">
            <!-- Facility list will be populated by JavaScript -->
        </div>
    </div>
    <!-- Facility End -->

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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/6660ed681b.js" crossorigin="anonymous"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const authMenu = document.getElementById('authMenu');
            const token = localStorage.getItem('token');

            if (!token) {
            // User is not logged in, show Sign In button
                authMenu.innerHTML = `
                    <a class="btn btn-dark fw-medium" href="Sign in.php" role="button">Sign In</a>
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
                        window.location.href = 'Sign in.php';
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
                                    <li><a class="dropdown-item" href="#" onclick="logout()">Sign Out</a></li>
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

            fetch('http://127.0.0.1:8000/api/products', {
                method: 'GET',
                headers: {
                    'Authorization': 'Bearer ' + token,
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.error) {
                    alert(data.error);
                } else {
                    if (data.length > 0) {
                        // Display the first product in the main section
                        const mainProduct = data[0];
                        document.getElementById('productMain').innerHTML = `
                            <div class="d-flex w-100 row">
                                <div class="d-flex justify-content-center align-items-center col-md-6 w-50">
                                <img src="http://127.0.0.1:8000${mainProduct.image_product.image_url}" class="img-fluid rounded" style="width: 100%; height: 70%;" alt="...">
                            </div>
                            <div class="d-flex flex-column justify-content-center col-md-6 ps-5 w-50">
                                <h4 class="fw-semibold">${mainProduct.space_type}</h4>
                                <p class="card-text">${mainProduct.desc}</p>
                                <p class="fw-medium">${mainProduct.kuota} Orang</p>
                                <p class="fs-5 fw-semibold">IDR ${mainProduct.price}/Jam/Desk</p>
                                <p>Desain meja individu yang lebih memberikan privasi untuk meningkatkan fokus dan konsentrasi saat bekerja sendiri</p>
                                <h5>Our Facility</h5>
                                <div class="row">
                                    <div class="col-md-3 col-sm-6 text-align mb-4">
                                        <i class="fa-solid fa-snowflake" style="color:#03829E"></i>
                                        <span class="feature-text">Fresh Ac</span>
                                    </div>
                                    <div class="col-md-3 col-sm-6 text-align mb-4">
                                        <i class="fa-solid fa-wifi" style="color:#03829E"></i>
                                        <span class="feature-text">Free Wifi</span>
                                    </div>
                                    <div class="col-md-3 col-sm-6 text-align mb-4">
                                        <i class="fa-solid fa-print" style="color:#03829E"></i>
                                        <span class="feature-text">Free Printer</span>
                                    </div>
                                    <a href="detail space.php?id=${mainProduct.id}" class="btn btn-dark px-3 py-2" role="button">Book Now</a>
                                </div>
                            </div>
                            </div>
                        `;

                        // Display the rest of the products in the facility section
                        const facilityList = document.getElementById('facilityList');
                        for (let i = 1; i < data.length; i++) {
                            const product = data[i];
                            facilityList.innerHTML += `
                                <div class="col-sm-4">
                                    <div class="card">
                                        <img src="http://127.0.0.1:8000${product.image_product.image_url}" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">${product.space_type}</h5>
                                            <p class="card-text">${product.desc}</p>
                                            <a href="detail space.php?id=${product.id}" class="btn btn-primary">Book Now</a>
                                        </div>
                                    </div>
                                </div>
                            `;
                        }
                    } else {
                        document.getElementById('productMain').innerHTML = '<p>No products found</p>';
                        document.getElementById('facilityList').innerHTML = '<p>No products found</p>';
                    }
                }
            })
            .catch(error => console.error('Error:', error));

            function logout() {
                localStorage.removeItem('token');
                window.location.href = 'Sign in.php';
            }
        });
    </script>
</body>
</html>
