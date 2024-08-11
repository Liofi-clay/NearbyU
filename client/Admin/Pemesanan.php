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

<div class="container mt-4">
    <div class="d-flex justify-content-between mb-3">
        <div class="d-flex">
            <input type="date" class="form-control me-3" id="dateInput" style="width: 200px;">
            <select class="form-select me-3" id="statusSelect" style="width: 200px;">
                <option value="">Status</option>
                <option value="1">Booking</option>
                <option value="2">Payment</option>
                <option value="3">Active</option>
            </select>
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
            <tbody id="bookingTableBody">
                <!-- Booking data will be inserted here -->
            </tbody>
        </table>
    </div>
</div>

<!-- Modals for editing status, confirming cancel, etc. -->
<!-- Edit Status Modal -->
<div class="modal fade" id="editStatusModal" tabindex="-1" aria-labelledby="editStatusModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editStatusModalLabel">Detail Pemesanan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Hidden input to store bookingId -->
                <input type="hidden" id="editBookingId">
                <p><strong>User:</strong> <span id="editUser"></span></p>
                <p><strong>Tanggal:</strong> <span id="editTanggal"></span></p>
                <p><strong>Kode Booking:</strong> <span id="editKodeBooking"></span></p>
                <p><strong>Jenis Ruangan:</strong> <span id="editJenisRuangan"></span></p>
                <p><strong>Check In:</strong> <span id="editCheckIn"></span></p>
                <p><strong>Check Out:</strong> <span id="editCheckOut"></span></p>
                <p><strong>Metode Pembayaran:</strong> <span id="editMetodePembayaran"></span></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" onclick="rejectBooking()">Batalkan</button>
                <button type="button" class="btn btn-primary" onclick="approveBooking()">Approve</button>
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
        <div class="modal-content p-4">
            <div class="modal-header">
                <h5 class="modal-title" id="previewModalLabel">Detail Pemesanan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <input type="hidden" id="editBookingId">
                    <p><strong>User:</strong> <span id="previewUser"></span></p>
                    <p><strong>Tanggal:</strong> <span id="previewTanggal"></span></p>
                    <p><strong>Kode Booking:</strong> <span id="previewKodeBooking"></span></p>
                    <p><strong>Jenis Ruangan:</strong> <span id="previewJenisRuangan"></span></p>
                    <p><strong>Check In:</strong> <span id="previewCheckIn"></span></p>
                    <p><strong>Check Out:</strong> <span id="previewCheckOut"></span></p>
                    <p><strong>Metode Pembayaran:</strong> <span id="previewMetodePembayaran"></span></p>
                </div>
                <div class="mb-4">
                    <p><strong>Bukti Pembayaran:</strong></p>
                    <img src="" id="previewBuktiPembayaran" alt="Bukti Pembayaran" class="img-fluid rounded" style="max-width: 100%; height: auto;">
                </div>
                <div class="d-flex justify-content-end">
                    <button type="button" class="btn btn-outline-primary" onclick="approvePayment()">Approve Payment</button>
                </div>
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
                <p><strong>User:</strong> <span id="previewUserActive"></span></p>
                <p><strong>Tanggal:</strong> <span id="previewTanggalActive"></span></p>
                <p><strong>Kode Booking:</strong> <span id="previewKodeBookingActive"></span></p>
                <p><strong>Jenis Ruangan:</strong> <span id="previewJenisRuanganActive"></span></p>
                <p><strong>Check In:</strong> <span id="previewCheckInActive"></span></p>
                <p><strong>Check Out:</strong> <span id="previewCheckOutActive"></span></p>
                <p><strong>Metode Pembayaran:</strong> <span id="previewMetodePembayaranActive"></span></p>
                <p><strong>Status:</strong> <span id="editStatusActive"></span></p>
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    const token = localStorage.getItem('adminToken');
        if (!token) {
            alert('You are not logged in. Please log in first.');
            window.location.href = 'Login_Admin.php';
        }

        document.addEventListener('DOMContentLoaded', function () {
            // Initial fetch of bookings when the page loads
            fetchBookings();

            // Add event listeners for filters
            document.getElementById('searchButton').addEventListener('click', fetchBookings);
            document.getElementById('dateInput').addEventListener('change', fetchBookings);
            document.getElementById('statusSelect').addEventListener('change', function () {
                console.log('Status selected:', this.value); // Debugging log
                fetchBookings(); // Call the fetchBookings function whenever the status changes
            });
        });


        function approvePayment() {
            const bookingId = document.getElementById('editBookingId').value;

            fetch(`http://127.0.0.1:8000/api/bookings/${bookingId}/verify-payment`, {
                method: 'POST',
                headers: {
                    'Authorization': `Bearer ${token}`,
                    'Content-Type': 'application/json',
                },
            })
            .then(response => response.json())
            .then(data => {
                if (data.message === 'Payment verified and booking activated') {
                    // Tampilkan notifikasi sukses
                    const approvalSuccessModal = new bootstrap.Modal(document.getElementById('approvalSuccessModal'));
                    approvalSuccessModal.show();

                    // Tutup modal preview pembayaran
                    const previewPaymentModalElement = document.getElementById('previewModalpayment');
                    const previewPaymentModal = bootstrap.Modal.getInstance(previewPaymentModalElement);
                    previewPaymentModal.hide();

                    // Refresh daftar pemesanan atau perbarui status di tabel
                    fetchBookings();
                } else {
                    // Tangani kesalahan lain
                    alert(data.message || 'Terjadi kesalahan saat memverifikasi pembayaran.');
                }
            })
            .catch(error => {
                console.error('Error approving payment:', error);
                alert('Terjadi kesalahan saat memverifikasi pembayaran.');
            });
        }

        function fetchBookings() {
            const date = document.getElementById('dateInput').value;
            const status = document.getElementById('statusSelect').value; // Get status id
            const search = document.getElementById('searchInput').value;

            // Initialize the base URL
            let url = 'http://127.0.0.1:8000/api/bookings';
            let query = [];

            // Debugging logs
            console.log('Selected Date:', date);
            console.log('Selected Status:', status);
            console.log('Search Query:', search);

            // Add filters to the query array
            if (date) {
                query.push(`date=${date}`);
            }
            if (status) {
                query.push(`status=${parseInt(status)}`);
            }
            if (search) {
                query.push(`search=${search}`);
            }

            // Combine the base URL with the query string
            if (query.length > 0) {
                url += `?${query.join('&')}`;
            }

            // Debugging log for final URL
            console.log('Fetching URL:', url);

            fetch(url, {
                method: 'GET',
                headers: {
                    'Authorization': `Bearer ${token}`,
                    'Content-Type': 'application/json',
                },
            })
            .then(response => response.json())
            .then(data => {
                const tbody = document.getElementById('bookingTableBody');
                tbody.innerHTML = '';

                if (Array.isArray(data)) {
                    data.forEach(booking => {
                        const row = document.createElement('tr');

                        let actionButtons = '';

                        switch (booking.order_detail.status.status.toLowerCase()) {
                            case 'booking':
                                actionButtons = `
                                    <button class="btn btn-sm btn-outline-primary" onclick="openEditApproveStatusModal(${booking.id}, '${booking.order_detail.status.status}')">Edit Status</button>
                                `;
                                break;
                            case 'payment':
                                const proofOfPaymentExists = booking.order_detail.proof_of_payment_image.image_url ? true : false;
                                actionButtons = `
                                    <button class="btn btn-sm btn-outline-${proofOfPaymentExists ? 'success' : 'warning'}">
                                        ${proofOfPaymentExists ? 'Payment Received' : 'Awaiting Payment'}
                                    </button>
                                    <button class="btn btn-sm btn-outline-primary" onclick="openPreviewPaymentModal(${booking.id})">Preview</button>
                                `;
                                break;
                            case 'active':
                                actionButtons = `
                                    <button class="btn btn-sm btn-outline-primary" onclick="openPreviewModal(${booking.id})">Preview</button>
                                `;
                                break;
                        }

                        row.innerHTML = `
                            <td>${booking.user.username}</td>
                            <td>${new Date(booking.order_detail.day).toLocaleDateString()}</td>
                            <td>${booking.order_detail.unique_code}</td>
                            <td>${booking.product.space_type}</td>
                            <td>${booking.order_detail.status.status}</td>
                            <td>${actionButtons}</td>
                        `;

                        tbody.appendChild(row);
                    });
                } else {
                    console.error('Unexpected data format:', data);
                }
            })
            .catch(error => console.error('Error fetching bookings:', error));
        }


        function openPreviewModal(bookingId) {
            fetch(`http://127.0.0.1:8000/api/bookings/${bookingId}`, {
                method: 'GET',
                headers: {
                    'Authorization': `Bearer ${token}`,
                    'Content-Type': 'application/json',
                },
            })
            .then(response => response.json())
            .then(booking => {
                console.log('Booking Data:', booking);

                // Pastikan untuk mengakses properti dengan benar
                document.getElementById('previewUserActive').textContent = booking.user.username || 'N/A';
                document.getElementById('previewTanggalActive').textContent = booking.order_detail.day || 'N/A';
                document.getElementById('previewKodeBookingActive').textContent = booking.order_detail.unique_code || 'N/A';
                document.getElementById('previewJenisRuanganActive').textContent = booking.product.space_type || 'N/A';
                document.getElementById('previewCheckInActive').textContent = booking.order_detail.check_in || 'N/A';
                document.getElementById('previewCheckOutActive').textContent = booking.order_detail.check_out || 'N/A';
                document.getElementById('previewMetodePembayaranActive').textContent = booking.order_detail.payment_method ? booking.order_detail.payment_method.payment_category : 'N/A';
                document.getElementById('editStatusActive').textContent = booking.order_detail.status.status|| 'N/A';

                const previewModal = new bootstrap.Modal(document.getElementById('previewModalActive'));
                previewModal.show();
            })
            .catch(error => console.error('Error fetching booking details:', error));
        }

        function openEditApproveStatusModal(bookingId, currentStatus) {
            fetch(`http://127.0.0.1:8000/api/bookings/${bookingId}`, {
                method: 'GET',
                headers: {
                    'Authorization': `Bearer ${token}`,
                    'Content-Type': 'application/json',
                },
            })
            .then(response => response.json())
            .then(booking => {
                document.getElementById('editUser').textContent = booking.user.username;
                document.getElementById('editTanggal').textContent = new Date(booking.order_detail.day).toLocaleDateString();
                document.getElementById('editKodeBooking').textContent = booking.order_detail.unique_code;
                document.getElementById('editJenisRuangan').textContent = booking.product.space_type;
                document.getElementById('editCheckIn').textContent = booking.order_detail.check_in;
                document.getElementById('editCheckOut').textContent = booking.order_detail.check_out;
                document.getElementById('editMetodePembayaran').textContent = booking.order_detail.payment_method.payment_category;

                // Store the bookingId in the hidden input
                document.getElementById('editBookingId').value = booking.id;
                
                const editApproveStatusModal = new bootstrap.Modal(document.getElementById('editStatusModal'));
                editApproveStatusModal.show();
            })
            .catch(error => console.error('Error fetching booking details:', error));
        }


        function openPreviewPaymentModal(bookingId) {
            fetch(`http://127.0.0.1:8000/api/bookings/${bookingId}`, {
                method: 'GET',
                headers: {
                    'Authorization': `Bearer ${token}`,
                    'Content-Type': 'application/json',
                },
            })
            .then(response => response.json())
            .then(booking => {
                document.getElementById('previewUser').textContent = booking.user.username;
                document.getElementById('previewTanggal').textContent = new Date(booking.order_detail.day).toLocaleDateString();
                document.getElementById('previewKodeBooking').textContent = booking.order_detail.unique_code;
                document.getElementById('previewJenisRuangan').textContent = booking.product.space_type;
                document.getElementById('previewCheckIn').textContent = booking.order_detail.check_in;
                document.getElementById('previewCheckOut').textContent = booking.order_detail.check_out;
                document.getElementById('previewMetodePembayaran').textContent = booking.order_detail.payment_method.payment_category;
                document.getElementById('previewBuktiPembayaran').src = booking.order_detail.proof_of_payment_image ? `http://127.0.0.1:8000${booking.order_detail.proof_of_payment_image.image_url}` : '';

                document.getElementById('editBookingId').value = booking.id;
            
                const previewModal = new bootstrap.Modal(document.getElementById('previewModalpayment'));
                previewModal.show();
            })
            .catch(error => console.error('Error fetching booking details:', error));
        }

        function approveBooking() {
            const bookingId = document.getElementById('editBookingId').value;

            fetch(`http://127.0.0.1:8000/api/bookings/${bookingId}/accept`, {
                method: 'PATCH',
                headers: {
                    'Authorization': `Bearer ${token}`,
                    'Content-Type': 'application/json',
                },
            })
            .then(response => response.json())
            .then(data => {
                const editStatusModalElement = document.getElementById('editStatusModal');
                const editStatusModal = bootstrap.Modal.getInstance(editStatusModalElement);
                editStatusModal.hide();

                const approvalSuccessModal = new bootstrap.Modal(document.getElementById('approvalSuccessModal'));
                approvalSuccessModal.show();
            })
            .catch(error => console.error('Error approving booking:', error));
        }


        function previewData(user, tanggal, kodeBooking, jenisRuangan, status) {
            document.getElementById('previewUser').textContent = user;
            document.getElementById('previewTanggal').textContent = tanggal;
            document.getElementById('previewKodeBooking').textContent = kodeBooking;
            document.getElementById('previewJenisRuangan').textContent = jenisRuangan;
            document.getElementById('editStatus').textContent = status;
        }

        function confirmCancel() {
            const cancelReason = document.getElementById('cancelReason').value;
            // Add logic to handle cancellation with the reason

            // Hide the Confirm Cancel Modal
            const confirmCancelModalElement = document.getElementById('confirmCancelModal');
            const confirmCancelModal = bootstrap.Modal.getInstance(confirmCancelModalElement);
            confirmCancelModal.hide();

            // Show the success toast notification
            const successToast = new bootstrap.Toast(document.getElementById('successToast'));
            successToast.show();

            // Optionally, hide the Edit Status Modal if it's still open
            const editStatusModalElement = document.getElementById('editStatusModal');
            const editStatusModal = bootstrap.Modal.getInstance(editStatusModalElement);
            if (editStatusModal) {
                editStatusModal.hide();
            }
        }

        function checkoutBooking() {
            const editStatusModalElement = document.getElementById('editStatusModal');
            const editStatusModal = bootstrap.Modal.getInstance(editStatusModalElement);
            editStatusModal.hide();

            const checkoutSuccessModal = new bootstrap.Modal(document.getElementById('checkoutSuccessModal'));
            checkoutSuccessModal.show();
        }
</script>
</body>
</html>
