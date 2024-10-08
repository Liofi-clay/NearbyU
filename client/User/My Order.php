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
                        <a class="nav-link fw-medium text-black" href="our space.php">Our Space</a>
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
        <h4>My Order</h4>
        <div class="row pt-3" id="orderList">
            <!-- Orders will be populated by JavaScript -->
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/6660ed681b.js" crossorigin="anonymous"></script>
    <script>
        const token = localStorage.getItem('token');

        document.addEventListener('DOMContentLoaded', function() {
            if (!token) {
            // User is not logged in, show Sign In button
                authMenu.innerHTML = `
                    <a class="btn btn-dark fw-medium" href="Login" role="button">Sign In</a>
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

            function logout() {
                localStorage.removeItem('token');
                window.location.href = 'Login.php';
            }

            fetch('http://127.0.0.1:8000/api/my-order', {
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
                    const orderList = document.getElementById('orderList');
                    orderList.innerHTML = '';
                    data.forEach(order => {
                        const formattedTotalCost = new Intl.NumberFormat('id-ID', {
                            style: 'currency',
                            currency: 'IDR'
                        }).format(order.order_detail.total_cost);

                        let statusButton;
                        switch (order.order_detail.status_id) {
                            case 1:
                                statusButton = `<button type="button" class="btn btn-outline-info">Booking</button>`;
                                break;
                            case 2:
                                statusButton = `<button type="button" class="btn btn-outline-warning">Payment</button>`;
                                break;
                            case 3:
                                statusButton = `<button type="button" class="btn btn-outline-success">Active</button>`;
                                break;
                            case 4:
                                statusButton = `<button type="button" class="btn btn-outline-secondary">Done</button>`;
                                break;
                            default:
                                statusButton = `<button type="button" class="btn btn-outline-secondary">Unknown</button>`;
                        }

                        orderList.innerHTML += `
                            <div class="col-sm-4 mt-4">
                                <div class="card">
                                    <img src="http://127.0.0.1:8000${order.product.image_product['image_url']}" class="card-img-top" alt="${order.product.space_type}">
                                    <div class="card-body">
                                        <h5 class="card-title">${order.product.space_type}</h5>
                                        <p class="card-text">Day: ${order.order_detail.day}<br><span class="fs-6 fw-normal">Code Uniqe: ${order.order_detail.unique_code}</span><br><span class="fs-6 fw-normal">Total Cost: ${formattedTotalCost}</span></p>
                                        ${statusButton}
                                        <a href="Booking Summary.php?id=${order.id}" class="btn btn-primary">Detail</a>
                                    </div>
                                </div>
                            </div>
                        `;
                    });
                }
            })
            .catch(error => console.error('Error:', error));
        });
    </script>
</body>

</html>
