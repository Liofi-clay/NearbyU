<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Preview</title>
  <link rel="stylesheet" href="./css/edit_produk.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>
        .preview-image {
            width: 80%;
            border-radius: 10px;
        }
</style>
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
                    <a class="nav-link fw-medium  text-black" href="Dashboard.php">Dashboard</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link fw-medium" aria-current="page" style="color: #03829E;"href="Produk.php">Produk</a>
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
     </div>
    </nav>
    <!-- Navbar end -->

    <div class="container">
         <a href="Produk.php" class="btn btn-link mt-3">Kembali</a>
         <div class="row preview-container">
            <div class="col-md-6 mt-5">
                <img id="previewImage" src="../assets/desk2.jpg" alt="Room Image" class="preview-image">
            </div>
            <div class="col-md-6 flex-column mt-3 text-start d-flex col justify-content-center">
                <div class="preview-details">
                        <p><strong>Jenis Ruangan:</strong> <span id="previewRoomType">Individual desk</span></p>
                        <p><strong>Harga/jam:</strong> <span id="previewPrice">6000/jam</span></p>
                        <p><strong>Kuota:</strong> <span id="previewQuota">60 orang</span></p>
                        <p><strong>Kursi:</strong> <span id="previewSeats">1 Kursi</span></p>
                        <p><strong>Deskripsi:</strong> <span id="previewDescription">Desain meja individu yang lebih memberikan privasi untuk meningkatkan fokus dan konsentrasi saat bekerja sendiri</span></p>
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
                            <input type="text" class="form-control" id="editRoomType" value="Individual desk" required>
                        </div>
                        <div class="mb-3">
                            <label for="editPrice" class="form-label">Harga/jam</label>
                            <input type="text" class="form-control" id="editPrice" value="6000" required>
                        </div>
                        <div class="mb-3">
                            <label for="editQuota" class="form-label">Kuota</label>
                            <input type="text" class="form-control" id="editQuota" value="60 orang" required>
                        </div>
                        <div class="mb-3">
                            <label for="editSeats" class="form-label">Kursi</label>
                            <input type="number" class="form-control" id="editSeats" value="1" required>
                        </div>
                        <div class="mb-3">
                            <label for="editDescription" class="form-label">Deskripsi</label>
                            <textarea class="form-control" id="editDescription" rows="3" required>Desain meja individu yang lebih memberikan privasi untuk meningkatkan fokus dan konsentrasi saat bekerja sendiri</textarea>
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
        document.getElementById('editDataForm').addEventListener('submit', function(event) {
            event.preventDefault();
            // Add your form submission logic here (e.g., AJAX request to save the edited data)
            
            // Show the success toast notification
            var successToast = new bootstrap.Toast(document.getElementById('successToast'));
            successToast.show();

            // Close the modal after submission
            var editDataModal = new bootstrap.Modal(document.getElementById('editDataModal'));
            editDataModal.hide();
        });
    </script>
</body>
</html>