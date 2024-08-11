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
                    <a class="nav-link fw-medium text-black"  aria-current="page" href="Dashboard.php" style="color: #03829E;">Dashboard</a>
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
                <div id="adminProfile"></div>
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
                <img id="adminPhoto" src="../assets/Profile.png" alt="Admin Photo" class="rounded-circle me-3" width="100" height="100">
                <div>
                    <h5 class="card-title" id="adminName"></h5>
                    <p class="card-text" id="adminEmail"></p>
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
                                <input type="file" class="form-control" id="image" required>
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
        document.addEventListener('DOMContentLoaded', function() {
            const token = localStorage.getItem('adminToken');
            if (!token) {
                alert('You are not logged in. Please log in first.');
                window.location.href = 'Login_Admin.php';
            } else {
                // Get Admin Profile Data
                fetch('http://127.0.0.1:8000/api/profile', {
                    method: 'GET',
                    headers: {
                        'Authorization': `Bearer ${token}`,
                        'Content-Type': 'application/json',
                    },
                })
                .then(response => response.json())
                .then(data => {
                    const profileDiv = document.getElementById('adminProfile');
                    const profileImageUrl = data.image_profile ? `http://127.0.0.1:8000${data.image_profile}` : '../assets/profile.png';
                    profileDiv.innerHTML = `
                        <img src="${profileImageUrl}" width="50" class="rounded-circle" id="navProfileImage" alt="Profile Picture">
                        ${data.username}
                    `;
                    // Fill the form for editing

                    document.getElementById('adminPhoto').src = profileImageUrl;
                    document.getElementById('adminName').textContent = data.username;
                    document.getElementById('adminEmail').textContent = data .email;
                    document.getElementById('adminNameInput').value = data.username;
                    document.getElementById('adminEmailInput').value = data.email;
                })
                .catch(error => console.error('Error:', error));
            }
        });

        // Update Admin Profile
        document.getElementById('editAdminForm').addEventListener('submit', function(event) {
            event.preventDefault();
            const formData = new FormData();
            formData.append('username', document.getElementById('adminNameInput').value);
            formData.append('email', document.getElementById('adminEmailInput').value);
            formData.append('phone_number', '123');
            formData.append('password', document.getElementById('adminPassword').value);
            
            const adminPhotoInput = document.getElementById('image');
            formData.append('image', adminPhotoInput.files[0]);

            const token = localStorage.getItem('adminToken');
            fetch('http://127.0.0.1:8000/api/profile/update', {
                method: 'POST',
                headers: {
                    'Authorization': `Bearer ${token}`
                },
                body: formData
            })
            .then(response => {
                return response.json();
            })
            .then(data => {
                if (data.message) {
                    // Show success toast
                    var successToast = new bootstrap.Toast(document.getElementById('successToast'));
                    successToast.show();

                    // Close the modal after submission
                    var editAdminModal = new bootstrap.Modal(document.getElementById('editAdminModal'));
                    editAdminModal.hide();
                } else {
                    alert('Error updating profile.');
                }
            })
            .catch(error => console.error('Error:', error));
        });


        // Add New Admin
        document.getElementById('addAdminForm').addEventListener('submit', function(event) {
            event.preventDefault();
            const formData = new FormData();
            formData.append('username', document.getElementById('addAdminName').value);
            formData.append('email', document.getElementById('addAdminEmail').value);
            formData.append('phone_number', '123');
            formData.append('password', document.getElementById('addAdminPassword').value);
            formData.append('role_id', 1); // Assuming 1 is the role_id for admin

            fetch('http://127.0.0.1:8000/api/register', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.message) {
                    // Show success toast
                    var addSuccessToast = new bootstrap.Toast(document.getElementById('addSuccessToast'));
                    addSuccessToast.show();

                    // Optionally, you can update the page to reflect the new admin added
                    var addAdminModal = new bootstrap.Modal(document.getElementById('addAdminModal'));
                    addAdminModal.hide();
                } else {
                    alert('Error adding new admin.');
                }
            })
            .catch(error => console.error('Error:', error));
        });
    </script>
</body>
</html>
