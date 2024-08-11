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
                <a class="nav-link fw-medium text-black" href="Akun Admin.php">
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
                    <h2 id="bookingCount">0</h2>
                </div>
            </div>
            <div class="col-md-4">
            <div class="card text p-3  text-white" style="background: #009688">
                    <h5 class="card-title">Payment</h5>
                    <h2 id="paymentCount">0</h2>
                </div>
            </div>
            <div class="col-md-4">
            <div class="card text p-3 text-white" style="background: #4caf50;" >
                    <h5 class="card-title">Active</h5>
                    <h2 id="activeCount">0</h2>
                </div>
            </div>
        </div>
        <h5 class="business-insight mt-4">Business Insight</h5>
        <div class="row mt-3">
            <div class="col-md-6">
                <div class="card p-3">
                    <h5 class="card-title text-center">Pendapatan Detail</h5>
                    <canvas id="salesChart"></canvas>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card p-3">
                    <h5 class="card-title text-center">Pemesanan Aktif Bulan Ini</h5>
                    <canvas id="activeOrdersChart"></canvas>
                </div>
            </div>
        </div>
    </div>
<!-- Produk end -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.3/font/bootstrap-icons.min.js"></script>
    <script src="https://kit.fontawesome.com/6660ed681b.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const token = localStorage.getItem('adminToken');
            if (!token) {
                alert('You are not logged in. Please log in first.');
                window.location.href = 'Login_Admin.php';
            }

            fetch('http://127.0.0.1:8000/api/booking-count', {
                method: 'GET',
                headers: {
                    'Authorization': `Bearer ${token}`,
                    'Content-Type': 'application/json',
                },
            })
            .then(response => response.json())
            .then(data => {
                document.getElementById('bookingCount').textContent = data.booking_count;
                document.getElementById('paymentCount').textContent = data.payment_count;
                document.getElementById('activeCount').textContent = data.active_count;
            })
            .catch(error => console.error('Error:', error));

            fetch('http://127.0.0.1:8000/api/sales-data',{
                method: 'GET',
                headers: {
                    'Authorization': `Bearer ${token}`,
                    'Content-Type': 'application/json',
                }
            })
            .then(response => response.json())
            .then(data => {
                const labels = data.map(item => {
                    const monthNames = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
                    return monthNames[item.month - 1];
                });
                const sales = data.map(item => item.total_sales);

                const ctx = document.getElementById('salesChart').getContext('2d');
                const chart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: labels,
                        datasets: [{
                            label: 'Total Sales',
                            data: sales,
                            backgroundColor: 'rgba(54, 162, 235, 0.2)',
                            borderColor: 'rgba(54, 162, 235, 1)',
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                });
            })
            .catch(error => console.error('Error:', error));

            fetch('http://127.0.0.1:8000/api/orders-this-month',{
                method: 'GET',
                headers: {
                    'Authorization': `Bearer ${token}`,
                    'Content-Type': 'application/json',
                }
            })
            .then(response => response.json())
            .then(data => {
                const ctx = document.getElementById('activeOrdersChart').getContext('2d');
                const chart = new Chart(ctx, {
                    type: 'doughnut',
                    data: {
                        labels: ['Total Bookings', 'Total Payments', 'Total Active'],
                        datasets: [{
                            label: 'Bookings Overview This Month',
                            data: [data.total_bookings, data.total_payments, data.total_active],
                            backgroundColor: [
                                'rgba(54, 162, 235, 0.2)',  // Color for bookings
                                'rgba(255, 206, 86, 0.2)',   // Color for payments
                                'rgba(75, 192, 192, 0.2)'    // Color for active
                            ],
                            borderColor: [
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)'
                            ],
                            borderWidth: 1
                        }]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: true,
                        aspectRatio: 1,
                        plugins: {
                            legend: {
                                display: true,
                                position: 'top',
                            }
                        }
                    }
                });
            })
            .catch(error => console.error('Error:', error));
            });
    </script>
</body>
</html>
