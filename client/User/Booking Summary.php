<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Summary</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .qr-code {
            width: 300px;
            height: 300px;
        }
        .custom-message {
            display: flex;
            flex-direction: column;
        }
        .custom-message p {
            text-align: start;
            margin-bottom: 0.5rem;
        }
        .custom-message a {
            color: #03829E;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-body text-center">
                <h2 class="card-title text-center font-weight-bold" style="color: #03829E;">Booking Summary</h2>
                <div class="row">
                    <div class="col-md-6 mt-5" id="qrCodeContainer">
                        <!-- QR Code will be injected here if status is Active -->
                    </div>
                    <div class="col-md-6 flex-column mt-3 text-start d-flex col justify-content-center" id="bookingDetails">
                        <!-- Booking details will be injected here -->
                    </div>
                </div>
                <button class="btn btn-primary mt-4" onclick="window.location.href='index.php'">Back to Home</button>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const token = localStorage.getItem('token');
        if (!token) {
            alert('You are not logged in. Please log in first.');
            window.location.href = 'Sign in.php';
        }

        document.addEventListener('DOMContentLoaded', function() {
            const urlParams = new URLSearchParams(window.location.search);
            const bookingId = urlParams.get('id'); 

            if (bookingId) {
                fetch(`http://127.0.0.1:8000/api/bookings/${bookingId}`, {
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
                        const bookingDetails = document.getElementById('bookingDetails');
                        const qrCodeContainer = document.getElementById('qrCodeContainer');

                        const formattedTotalCost = new Intl.NumberFormat('id-ID', {
                            style: 'currency',
                            currency: 'IDR'
                        }).format(data.order_detail.total_cost);
                        
                        bookingDetails.innerHTML = `
                            <p><strong>Day:</strong> ${data.order_detail.day}</p>
                            <p><strong>Coworking Type:</strong> ${data.product.space_type}</p>
                            <p><strong>Time check-in:</strong> ${data.order_detail.check_in}</p>
                            <p><strong>Time check-out:</strong> ${data.order_detail.check_out}</p>
                            <p><strong>Payment method:</strong> ${data.order_detail.payment_method_id === 1 ? 'QRIS' : 'Bank Transfer'}</p>
                            <p><strong>Total:</strong> ${formattedTotalCost}</p>
                        `;

                        if (data.order_detail.status_id === 1) {
                            qrCodeContainer.innerHTML += `
                                <div class="custom-message">
                                    <p>Mohon menunggu persetujuan admin sebelum melanjutkan proses pembayaran.</p>
                                    <p>Silakan cek email Anda secara berkala karena tautan pembayaran akan dikirimkan ke email Anda.</p>
                                    <p>Jika terdapat kendala anda dapat segera menghubungi <a href="https://wa.me/+6287872485889">Customer Service</a>.</p>
                                </div>
                            `;
                        } else if (data.order_detail.status_id === 2) {
                            window.location.href = `Payment.php?id=${data.id}`;
                        } else if (data.order_detail.status_id === 3) {
                            qrCodeContainer.innerHTML = `
                                <img src="http://127.0.0.1:8000${data.qr_code}" alt="QR Code" class="img-fluid qr-code">
                                <p><strong>Booking Code:</strong> ${data.order_detail.unique_code}</p>
                            `;
                        }
                    }
                })
                .catch(error => console.error('Error:', error));
            } else {
                alert('Booking ID not found');
            }
        });
    </script>
</body>
</html>
