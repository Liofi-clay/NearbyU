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
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-body text-center">
                <h2 class=""card-title text-center font-weight-bold style="color: #03829E;">Booking Summary</h2>
                <div class="row">
                    <div class="col-md-6 mt-5">
                        <img src="../assets/Qr.png" alt="QR Code" class="img-fluid qr-code" >
                        <p><strong>Booking Code:</strong> 10120973</p>
                    </div>
                    <div class="col-md-6 flex-column mt-3 text-start d-flex col justify-content-center">
                        <p><strong>Day:</strong> 17/08/24</p>
                        <p><strong>Coworking Type:</strong> Individual Desk</p>
                        <p><strong>Time check-in:</strong> 10.00</p>
                        <p><strong>Time check-out:</strong> 11.00</p>
                        <p><strong>Payment method:</strong> QRIS</p>
                    </div>
                </div>
                <button class="btn btn-primary mt-4">Back to Home</button>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
