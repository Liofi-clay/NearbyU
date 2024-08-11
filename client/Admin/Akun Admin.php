<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Akun Admin</title>
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

<div class="container mt-4">
        <h2>Admin Accounts</h2>
      <!-- Admin Account Card -->
                <div class="d-flex align-items-center mb-3">
                    <img src="../assets/Profile.png" alt="Admin Photo" class="rounded-circle me-3" width="100" height="100">
                    <div>
                        <h5 class="card-title" id="adminName">Admin Name</h5>
                        <p class="card-text" id="adminEmail">admin@example.com</p>
                    </div>
                </div>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editAdminModal">Edit</button>
            <!-- Add Admin Account Button -->
             <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addAdminModal">Add Admin Account</button>

            <!-- Add Admin Account Modal -->
            <div class="modal fade" id="addAdminModal" tabindex="-1" aria-labelledby="addAdminModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="addAdminModalLabel">Add Admin Account</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form id="addAdminForm">
                                <div class="mb-3">
                                    <label for="addAdminPhoto" class="form-label">Upload Photo</label>
                                    <input type="file" class="form-control" id="addAdminPhoto" required>
                                </div>
                                <div class="mb-3">
                                    <label for="addAdminName" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="addAdminName" required>
                                </div>
                                <div class="mb-3">
                                    <label for="addAdminEmail" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="addAdminEmail" required>
                                </div>
                                <div class="mb-3">
                                    <label for="addAdminPassword" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="addAdminPassword" required>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
                        </div>
                    </div>

        <!-- Edit Admin Account Modal -->
        <div class="modal fade" id="editAdminModal" tabindex="-1" aria-labelledby="editAdminModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editAdminModalLabel">Edit Admin Account</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="editAdminForm">
                            <div class="mb-3">
                                <label for="adminPhoto" class="form-label">Upload Photo</label>
                                <input type="file" class="form-control" id="adminPhoto" required>
                            </div>
                            <div class="mb-3">
                                <label for="adminNameInput" class="form-label">Name</label>
                                <input type="text" class="form-control" id="adminNameInput" required>
                            </div>
                            <div class="mb-3">
                                <label for="adminEmailInput" class="form-label">Email</label>
                                <input type="email" class="form-control" id="adminEmailInput" required>
                            </div>
                            <div class="mb-3">
                                <label for="adminPassword" class="form-label">Password</label>
                                <input type="password" class="form-control" id="adminPassword" required>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
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
                    Admin account updated successfully.
                </div>
            </div>
        </div>

        <div class="toast-container position-fixed top-0 end-0 p-3">
            <div id="addSuccessToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header">
                    <strong class="me-auto">Success</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">
                    New admin account added successfully.
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.getElementById('editAdminForm').addEventListener('submit', function(event) {
            event.preventDefault();
            // Add your form submission logic here (e.g., AJAX request to update admin data)

            // Show the success toast notification
            var successToast = new bootstrap.Toast(document.getElementById('successToast'));
            successToast.show();

            // Close the modal after submission
            var editAdminModal = new bootstrap.Modal(document.getElementById('editAdminModal'));
            editAdminModal.hide();

            // Update the preview with the new data
            document.getElementById('adminName').textContent = document.getElementById('adminNameInput').value;
            document.getElementById('adminEmail').textContent = document.getElementById('adminEmailInput').value;
        });

        document.getElementById('addAdminForm').addEventListener('submit', function(event) {
            event.preventDefault();
            // Add your form submission logic here (e.g., AJAX request to add new admin data)

            // Show the success toast notification
            var addSuccessToast = new bootstrap.Toast(document.getElementById('addSuccessToast'));
            addSuccessToast.show();

            // Close the modal after submission
            var addAdminModal = new bootstrap.Modal(document.getElementById('addAdminModal'));
            addAdminModal.hide();

            // Optionally, you can update the page to reflect the new admin added
        });
    </script>
</body>
</html>