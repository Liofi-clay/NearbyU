<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NearbyU Space</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .min-vh-100 {
            min-height: 100vh;
        }
        .d-flex-center {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .content-container {
            flex: 1;
        }
        .h-100 {
            height: 100% !important;
        }
        .footer {
            position: relative;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>

<body class="d-flex flex-column min-vh-100">
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
                        <a class="nav-link fw-medium" aria-current="page" href="our space.php">Our Space</a>
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
                        <a class="btn btn-dark fw-medium" href="Login.php" role="button">Sign In</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Content Start -->
    <div class="container content-container d-flex-center">
        <div class="row h-100 align-items-center mt-5">
            <div class="col-md-6">
                <img id="productImage" src="" class="img-fluid rounded" alt="...">
            </div>
            <div class="col-md-6 ps-5">
                <h4 id="productTitle" class="fw-semibold"></h4>
                <p id="productDesc" class="card-text"></p>
                <p id="productKuota" class="fw-medium"></p>
                <p id="productPrice" class="fs-5 fw-semibold"></p>
                <p id="productLongDesc"></p>
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
                    <a id="openModalBtn" class="btn btn-dark px-3 py-2" role="button" data-bs-toggle="modal" data-bs-target="#bookingModal">Book Now</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Content End -->

    <!-- Booking Modal -->
    <div class="modal fade" id="bookingModal" tabindex="-1" aria-labelledby="bookingModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="bookingModalLabel">Booking Form</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="booking-form">
                        <div class="mb-3">
                            <label for="day" class="form-label">Select Day</label>
                            <input type="date" class="form-control" id="day" required>
                        </div>
                        <div class="mb-3">
                            <label for="time-checkin" class="form-label">Select Time Check-in</label>
                            <input type="time" class="form-control" id="time-checkin" required>
                        </div>
                        <div class="mb-3">
                            <label for="time-checkout" class="form-label">Select Time Check-out</label>
                            <input type="time" class="form-control" id="time-checkout" required>
                        </div>
                        <div class="mb-3">
                            <label for="payment-method" class="form-label">Select Payment Method</label>
                            <select class="form-select" id="payment-method" aria-label="Select a payment method" required>
                                <option value="" disabled selected>Select a payment method</option>
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
        if (!token) {
            alert('You are not logged in. Please log in first.');
            window.location.href = 'Login.php';
        }

        document.addEventListener('DOMContentLoaded', function() {
            const urlParams = new URLSearchParams(window.location.search);
            const productId = urlParams.get('id'); 

            if (productId) {
                fetch(`http://127.0.0.1:8000/api/products/${productId}`, {
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
                        document.getElementById('productImage').src = `http://127.0.0.1:8000${data.image_product.image_url}`;
                        document.getElementById('productTitle').textContent = data.space_type;
                        document.getElementById('productDesc').textContent = data.desc;
                        document.getElementById('productKuota').textContent = data.kuota + " Orang";
                        document.getElementById('productPrice').textContent = "IDR " + data.price + "/Jam";
                        document.getElementById('productLongDesc').textContent = "Deskripsi detail tentang " + data.space_type;
                    }
                })
                .catch(error => console.error('Error:', error));
            } else {
                alert('Product ID not found');
            }

            fetch('http://127.0.0.1:8000/api/payment-methods', {
                method: 'GET',
                headers: {
                    'Authorization': 'Bearer ' + token,
                }
            })
            .then(response => response.json())
            .then(data => {
                const paymentMethodSelect = document.getElementById('payment-method');
                data.forEach(method => {
                    const option = document.createElement('option');
                    option.value = method.id;
                    option.textContent = method.payment_category;
                    paymentMethodSelect.appendChild(option);
                });
            })
            .catch(error => console.error('Error:', error));
        });

        document.getElementById('booking-form').addEventListener('submit', function(event) {
            event.preventDefault();

            const productId = new URLSearchParams(window.location.search).get('id');
            const day = document.getElementById('day').value;
            const checkIn = document.getElementById('time-checkin').value;
            const checkOut = document.getElementById('time-checkout').value;
            const paymentMethodId = document.getElementById('payment-method').value;

            const bookingData = {
                product_id: parseInt(productId),
                order_detail: {
                    day: day,
                    check_in: checkIn,
                    check_out: checkOut,
                    payment_method_id: paymentMethodId,
                    status_id: 1
                }
            };

            fetch('http://127.0.0.1:8000/api/bookings', {
                method: 'POST',
                headers: {
                    'Authorization': 'Bearer ' + token,
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(bookingData)
            })
            .then(response => response.json())
            .then(data => {
                if (data.error) {
                    alert(data.error);
                } else {
                    alert('Booking successful!');
                    console.log(data)
                    window.location.href = `Booking Summary.php?id=${data.booking.id}`;
                }
            })
            .catch(error => console.error('Error:', error));
        });
    </script>
</body>
</html>
