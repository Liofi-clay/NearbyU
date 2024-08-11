<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Preview</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
        .preview-image {
            width: 100%;
            max-width: 400px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            object-fit: cover;
        }

        .preview-container {
            padding: 20px;
            background-color: #f8f9fa;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .preview-details p {
            font-size: 1.1rem;
            margin-bottom: 10px;
        }

        .btn-primary {
            background-color: #03829E;
            border-color: #03829E;
            width: 100%;
            padding: 10px;
            font-size: 1.1rem;
            border-radius: 8px;
        }

        .navbar-brand {
            font-size: 1.5rem;
            color: #03829E !important;
        }

        .nav-link.active {
            color: #03829E !important;
        }

        .container {
            max-width: 1000px;
            margin-top: 20px;
        }

        .btn-link {
            font-size: 1rem;
            color: #03829E;
            font-weight: 600;
        }

        .btn-close {
            border-radius: 50%;
            padding: 2px 6px;
        }
  </style>
</head>
<body>
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container p-1">
            <a class="navbar-brand fw-semibold fs-4" href="#">NearbyU Space</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link fw-medium text-black" href="Dashboard.php">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-medium active" aria-current="page" href="Produk.php">Produk</a>
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
                <a class="nav-link fw-medium text-black" href="Profile User.php">
                    Admin <img src="../assets/profile.png" width="30" id="navProfileImage" alt="Profile Picture">
                </a>
            </div>
        </div>
    </nav>
    <!-- Navbar end -->

    <div class="container">
        <a href="Produk.php" class="btn btn-link mt-3">Kembali</a>
        <div class="row preview-container mt-4">
            <div class="col-md-6">
                <img id="previewImage" src="" alt="Room Image" class="preview-image">
            </div>
            <div class="col-md-6 flex-column text-start d-flex col justify-content-center">
                <div class="preview-details">
                    <p><strong>Jenis Ruangan:</strong> <span id="previewRoomType"></span></p>
                    <p><strong>Harga/jam:</strong> <span id="previewPrice"></span></p>
                    <p><strong>Kuota:</strong> <span id="previewQuota"></span></p>
                    <p><strong>Kursi:</strong> <span id="previewSeats"></span></p>
                    <p><strong>Deskripsi:</strong> <span id="previewDescription"></span></p>
                </div> 
                <button class="btn btn-primary mt-4" data-bs-toggle="modal" data-bs-target="#editDataModal">Edit data</button>
            </div>
        </div>
    </div>

    <!-- Edit Data Modal -->
    <div class="modal fade" id="editDataModal" tabindex="-1" aria-labelledby="editDataModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editDataModalLabel">Edit Data</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="editDataForm">
                        <div class="mb-3">
                            <label for="editRoomType" class="form-label">Jenis ruangan</label>
                            <input type="text" class="form-control" id="editRoomType" required>
                        </div>
                        <div class="mb-3">
                            <label for="editPrice" class="form-label">Harga/jam</label>
                            <input type="text" class="form-control" id="editPrice" required>
                        </div>
                        <div class="mb-3">
                            <label for="editQuota" class="form-label">Kuota</label>
                            <input type="text" class="form-control" id="editQuota" required>
                        </div>
                        <div class="mb-3">
                            <label for="editSeats" class="form-label">Kursi</label>
                            <input type="number" class="form-control" id="editSeats" required>
                        </div>
                        <div class="mb-3">
                            <label for="editDescription" class="form-label">Deskripsi</label>
                            <textarea class="form-control" id="editDescription" rows="3" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="editImage" class="form-label">Gambar</label>
                            <input type="file" class="form-control" id="editImage">
                        </div>
                        <div class="d-flex justify-content-between">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batalkan</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
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

        // Function to get the query parameter from URL
        function getQueryParam(param) {
            const urlParams = new URLSearchParams(window.location.search);
            return urlParams.get(param);
        }

        // Get the product ID from the URL
        const productId = getQueryParam('id');

        // Fetch product details by ID
        fetch(`http://127.0.0.1:8000/api/products/${productId}`, {
            method: 'GET',
            headers: {
                'Authorization': `Bearer ${token}`,
                'Content-Type': 'application/json',
            },
        })
        .then(response => response.json())
        .then(data => {
            if (data.id) {
                document.getElementById('previewImage').src = `http://127.0.0.1:8000${data.image_product.image_url}`;
                document.getElementById('previewRoomType').textContent = data.space_type;
                document.getElementById('previewPrice').textContent = `${data.price}/jam`;
                document.getElementById('previewQuota').textContent = `${data.kuota} orang`;
                document.getElementById('previewSeats').textContent = `${data.kuota / 2} Kursi`; // Adjust according to your logic
                document.getElementById('previewDescription').textContent = data.desc;

                // Populate the edit form with the product data
                document.getElementById('editRoomType').value = data.space_type;
                document.getElementById('editPrice').value = data.price;
                document.getElementById('editQuota').value = data.kuota;
                document.getElementById('editSeats').value = data.kuota / 2; // Adjust according to your logic
                document.getElementById('editDescription').value = data.desc;
            } else {
                alert('Failed to load product details.');
                window.location.href = 'Produk.php';
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('Failed to load product details.');
            window.location.href = 'Produk.php';
        });

        document.getElementById('editDataForm').addEventListener('submit', function(event) {
            event.preventDefault();

            const productId = getQueryParam('id');

            const formData = new FormData();
            formData.append('space_type', document.getElementById('editRoomType').value);
            formData.append('price', document.getElementById('editPrice').value);
            formData.append('kuota', document.getElementById('editQuota').value);
            formData.append('desc', document.getElementById('editDescription').value);

            const imageFile = document.getElementById('editImage').files[0];
            if (imageFile) {
                formData.append('image', imageFile);
            }

            fetch(`http://127.0.0.1:8000/api/update-product/${productId}`, {
                method: 'POST',
                headers: {
                    'Authorization': `Bearer ${token}`
                },
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.id) {
                    alert('Data produk berhasil diperbarui.');
                    location.reload();
                } else {
                    alert('Gagal memperbarui data produk.');
                    console.error('Error:', data);
                }
            })
            .catch(error => console.error('Error:', error));
        });
    </script>
</body>
</html>
