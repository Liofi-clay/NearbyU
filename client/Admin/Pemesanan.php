<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pemesanan</title>
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
                    <a class="nav-link fw-medium text-black"  aria-current="page" href="Dashboard.php">Dashboard</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link fw-medium text-black" href="Produk.php">Produk</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link fw-medium"  aria-current="page" style="color: #03829E;" href="Pemesanan.php">Pemesanan</a>
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
<body>
<div class="container mt-4">
        <div class="d-flex justify-content-between mb-3">
            <div class="d-flex">
                <input type="date" class="form-control me-3" id="dateInput" style="width: 200px;">
                <div class="btn-group">
                    <button type="button" class="btn btn-outline-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        Status
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Booking</a></li>
                        <li><a class="dropdown-item" href="#">Payment</a></li>
                        <li><a class="dropdown-item" href="#">Active</a></li>
                    </ul>
                </div>
            </div>
            <div class="input-group" style="width: 200px;">
                <input type="text" class="form-control" placeholder="Search..." id="searchInput">
                <span class="input-group-text" id="searchButton"><i class="bi bi-search"></i></span>
            </div>
        </div>

        <div class="table-container bg-white">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">User</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Kode Booking</th>
                        <th scope="col">Jenis Ruangan</th>
                        <th scope="col">Status</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Agrieva</td>
                        <td>1 Juli 2024</td>
                        <td>ABCD1230</td>
                        <td>Individual Desk</td>
                        <td>Booking</td>
                        <td>
                            <button class="btn btn-sm btn-outline-primary btn-edit-status" data-bs-toggle="modal" data-bs-target="#editStatusModal">Edit Status</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Annisa</td>
                        <td>4 Juli 2024</td>
                        <td>ABCD1230</td>
                        <td>Group Desk</td>
                        <td>Payment</td>
                        <td>
                            <button class="btn btn-sm btn-outline-primary btn-preview" data-bs-toggle="modal" data-bs-target="#previewModal" onclick="previewData('Annisa', '4 Juli 2024', 'ABCD1230', 'Group Desk', 'Payment')">Preview</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Anggie</td>
                        <td>4 Juli 2024</td>
                        <td>ABCD1230</td>
                        <td>Individual</td>
                        <td>Active</td>
                        <td>
                            <button class="btn btn-sm btn-outline-primary btn-preview" data-bs-toggle="modal" data-bs-target="#previewModal" onclick="previewData('Anggie', '4 Juli 2024', 'ABCD1230', 'Individual', 'Active')">Preview</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Edit Status Modal -->
    <div class="modal fade" id="editStatusModal" tabindex="-1" aria-labelledby="editStatusModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editStatusModalLabel">Detail Pemesanan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p><strong>User:</strong> <span id="editUser">Agrieva</span></p>
                        <p><strong>Tanggal:</strong> <span id="editTanggal">2024-07-01</span></p>
                        <p><strong>Kode Booking:</strong> <span id="editKodeBooking">ABCD1230</span></p>
                        <p><strong>Jenis Ruangan:</strong> <span id="editJenisRuangan">Individual Desk</span></p>
                        <p><strong>Check In:</strong> <span id="editCheckIn">10:00</span></p>
                        <p><strong>Check Out:</strong> <span id="editCheckOut">11:00</span></p>
                        <p><strong>Metode Pembayaran:</strong> <span id="editMetodePembayaran">QRIS</span></p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-cancel" onclick="confirmCancel()">Batalkan</button>
                        <button type="button" class="btn btn-primary" onclick="checkoutBooking()">Checkout</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Confirm Cancel Modal -->
        <div class="modal fade" id="confirmCancelModal" tabindex="-1" aria-labelledby="confirmCancelModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body text-center">
                        <div class="mb-3">
                            <i class="bi bi-exclamation-circle" style="font-size: 2rem; color: #007bff;"></i>
                        </div>
                        <h5>Apakah Anda Yakin?</h5>
                        <p>Pemesanan akan dibatalkan permanent, berikan alasan pembatalan booking ini</p>
                        <input type="text" class="form-control mb-3" placeholder="Alasan pembatalan" id="cancelReason">
                        <div class="d-flex justify-content-between">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                            <button type="button" class="btn btn-danger" onclick="confirmCancel()">Ya</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Approval Success Modal -->
        <div class="modal fade" id="approvalSuccessModal" tabindex="-1" aria-labelledby="approvalSuccessModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body text-center">
                        <div class="mb-3">
                            <i class="bi bi-check-circle" style="font-size: 2rem; color: #007bff;"></i>
                        </div>
                        <h5>Data berhasil di-approve</h5>
                        <button type="button" class="btn btn-primary mt-3" data-bs-dismiss="modal">OK</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Checkout Success Modal -->
        <div class="modal fade" id="checkoutSuccessModal" tabindex="-1" aria-labelledby="checkoutSuccessModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body text-center">
                        <div class="mb-3">
                            <i class="bi bi-check-circle" style="font-size: 2rem; color: #007bff;"></i>
                        </div>
                        <h5>Checkout berhasil</h5>
                        <button type="button" class="btn btn-primary mt-3" data-bs-dismiss="modal">OK</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Preview Modal Payment-->
        <div class="modal fade" id="previewModalpayment" tabindex="-1" aria-labelledby="previewModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="previewModalLabel">Detail Pemesanan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p><strong>User:</strong> <span id="previewUser">Agrieva</span></p>
                        <p><strong>Tanggal:</strong> <span id="previewTanggal">2024-07-01</span></p>
                        <p><strong>Kode Booking:</strong> <span id="previewKodeBooking">ABCD1230</span></p>
                        <p><strong>Jenis Ruangan:</strong> <span id="previewJenisRuangan">Individual Desk</span></p>
                        <p><strong>Check In:</strong> <span id="previewCheckIn">10:00</span></p>
                        <p><strong>Check Out:</strong> <span id="previewCheckOut">11:00</span></p>
                        <p><strong>Metode Pembayaran:</strong> <span id="previewMetodePembayaran">QRIS</span></p>
                        <p><strong>Bukti Pembayaran:</strong></p>
                        <img src="../assets/QRIS.png" alt="Bukti Pembayaran" class="img-fluid mb-3">
                        <button type="button" class="btn btn-outline-primary">
                            <i class="bi bi-download mt-5"></i> Download
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Preview Modal Active-->
        <div class="modal fade" id="previewModalActive" tabindex="-1" aria-labelledby="previewModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="previewModalLabel">Detail Pemesanan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p><strong>User:</strong> <span id="previewUser">Agrieva</span></p>
                        <p><strong>Tanggal:</strong> <span id="previewTanggal">2024-07-01</span></p>
                        <p><strong>Kode Booking:</strong> <span id="previewKodeBooking">ABCD1230</span></p>
                        <p><strong>Jenis Ruangan:</strong> <span id="previewJenisRuangan">Individual Desk</span></p>
                        <p><strong>Check In:</strong> <span id="previewCheckIn">10:00</span></p>
                        <p><strong>Check Out:</strong> <span id="previewCheckOut">11:00</span></p>
                        <p><strong>Metode Pembayaran:</strong> <span id="previewMetodePembayaran">QRIS</span></p>
                        <p><strong>Status:</strong> <span id="editStatus">Active</span></p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Toast Notification -->
        <div class="toast-container position-fixed top-0 end-0 p-3">
            <div id="successToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header">
                    <strong class="me-auto">Success</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">
                    Data berhasil disimpan.
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function previewDataPayment(user, tanggal, kodeBooking, jenisRuangan, checkIn, checkOut, metodePembayaran, buktiPembayaran) {
            document.getElementById('previewUser').textContent = user;
            document.getElementById('previewTanggal').textContent = tanggal;
            document.getElementById('previewKodeBooking').textContent = kodeBooking;
            document.getElementById('previewJenisRuangan').textContent = jenisRuangan;
            document.getElementById('previewCheckIn').textContent = checkIn;
            document.getElementById('previewCheckOut').textContent = checkOut;
            document.getElementById('previewMetodePembayaran').textContent = metodePembayaran;
            document.getElementById('previewBuktiPembayaran').src = buktiPembayaran;
        }

        function previewDataActive(user, tanggal, kodeBooking, jenisRuangan, checkIn, checkOut, metodePembayaran, buktiPembayaran) {
            document.getElementById('previewUser').textContent = user;
            document.getElementById('previewTanggal').textContent = tanggal;
            document.getElementById('previewKodeBooking').textContent = kodeBooking;
            document.getElementById('previewJenisRuangan').textContent = jenisRuangan;
            document.getElementById('previewCheckIn').textContent = checkIn;
            document.getElementById('previewCheckOut').textContent = checkOut;
            document.getElementById('previewMetodePembayaran').textContent = metodePembayaran;
            document.getElementById('editStatus').textContent = status;
        }


        function editStatusData(user, tanggal, kodeBooking, jenisRuangan, checkIn, checkOut, metodePembayaran, status) {
            document.getElementById('editUser').textContent = user;
            document.getElementById('editTanggal').textContent = tanggal;
            document.getElementById('editKodeBooking').textContent = kodeBooking;
            document.getElementById('editJenisRuangan').textContent = jenisRuangan;
            document.getElementById('editCheckIn').textContent = checkIn;
            document.getElementById('editCheckOut').textContent = checkOut;
            document.getElementById('editMetodePembayaran').textContent = metodePembayaran;
        }

        function confirmCancel() {
            var cancelReason = document.getElementById('cancelReason').value;
            // Add logic to handle cancellation with the reason

            // Hide the Confirm Cancel Modal
            var confirmCancelModalElement = document.getElementById('confirmCancelModal');
            var confirmCancelModal = bootstrap.Modal.getInstance(confirmCancelModalElement);
            confirmCancelModal.hide();

            // Show the success toast notification
            var successToast = new bootstrap.Toast(document.getElementById('successToast'));
            successToast.show();

            // Optionally, hide the Edit Status Modal if it's still open
            var editStatusModalElement = document.getElementById('editStatusModal');
            var editStatusModal = bootstrap.Modal.getInstance(editStatusModalElement);
            if (editStatusModal) {
                editStatusModal.hide();
            }
        }

        function approveBooking() {
            var editStatusModalElement = document.getElementById('editStatusModal');
            var editStatusModal = bootstrap.Modal.getInstance(editStatusModalElement);
            editStatusModal.hide();

            var approvalSuccessModal = new bootstrap.Modal(document.getElementById('approvalSuccessModal'));
            approvalSuccessModal.show();
        }

        function checkoutBooking() {
            var editStatusModalElement = document.getElementById('editStatusModal');
            var editStatusModal = bootstrap.Modal.getInstance(editStatusModalElement);
            editStatusModal.hide();

            var checkoutSuccessModal = new bootstrap.Modal(document.getElementById('checkoutSuccessModal'));
            checkoutSuccessModal.show();
        }
    </script>
</body>
</html>
