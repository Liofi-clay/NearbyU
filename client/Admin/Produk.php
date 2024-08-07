<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Produk</title>
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

<div class="container mt-4">
        <div class="d-flex justify-content-end mb-3">
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addDataModal">Tambah Data</button>
        </div>
        <div class="table-container bg-white">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Jenis Ruangan</th>
                        <th scope="col">Harga/jam</th>
                        <th scope="col">Kuota</th>
                        <th scope="col">Kursi</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Individual Desk</td>
                        <td>6000</td>
                        <td>60 orang</td>
                        <td>1 kursi</td>
                        <td>
                            <a class="btn btn-sm btn-outline-primary btn-preview" href="Preview.php">Preview</a>
                            <button class="btn btn-sm btn-outline-danger btn-delete" data-bs-toggle="modal" data-bs-target="#deleteModal" onclick="setDeleteData('Individual Desk')">Hapus</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Group Desk</td>
                        <td>30000</td>
                        <td>60 orang</td>
                        <td>5 kursi</td>
                        <td>
                        <a class="btn btn-sm btn-outline-primary btn-preview" href="Preview.php">Preview</a>
                            <button class="btn btn-sm btn-outline-danger btn-delete" data-bs-toggle="modal" data-bs-target="#deleteModal" onclick="setDeleteData('Group Desk')">Hapus</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Collaborative Room</td>
                        <td>700000</td>
                        <td>60orang</td>
                        <td>30 kursi</td>
                        <td>
                        <a class="btn btn-sm btn-outline-primary btn-preview" href="Preview.php">Preview</a>
                            <button class="btn btn-sm btn-outline-danger btn-delete" data-bs-toggle="modal" data-bs-target="#deleteModal" onclick="setDeleteData('Collaborative Room')">Hapus</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

   <!-- Add Data Modal -->
   <div class="modal fade" id="addDataModal" tabindex="-1" aria-labelledby="addDataModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addDataModalLabel">Tambah Data</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="addDataForm">
                        <div class="mb-3">
                            <label for="roomType" class="form-label">Jenis ruangan</label>
                            <input type="text" class="form-control" id="roomType" required>
                        </div>
                        <div class="mb-3">
                            <label for="price" class="form-label">Harga/jam</label>
                            <input type="text" class="form-control" id="price" required>
                        </div>
                        <div class="mb-3">
                            <label for="quota" class="form-label">Kuota</label>
                            <input type="text" class="form-control" id="quota" required>
                        </div>
                        <div class="mb-3">
                            <label for="seats" class="form-label">Kursi</label>
                            <input type="number" class="form-control" id="seats" required>
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Deskripsi</label>
                            <textarea class="form-control" id="description" rows="3" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label">Gambar</label>
                            <input type="file" class="form-control" id="image" required></input>
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

    <!-- Delete Modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Hapus Data</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Apakah Anda yakin ingin menghapus data <strong id="deleteRoomType"></strong>?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-danger" onclick="confirmDelete()">Hapus</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function setDeleteData(roomType) {
            document.getElementById('deleteRoomType').textContent = roomType;
        }

        function confirmDelete() {
            // Add your delete logic here (e.g., AJAX request to delete data)
            alert('Data has been deleted successfully.');
            var deleteModal = new bootstrap.Modal(document.getElementById('deleteModal'));
            deleteModal.hide();
        }

        document.getElementById('addDataForm').addEventListener('submit', function(event) {
            event.preventDefault();
            // Add your form submission logic here (e.g., AJAX request to add new data)
            
            // Close the modal after submission
            var addDataModal = new bootstrap.Modal(document.getElementById('addDataModal'));
            addDataModal.hide();
        });
    </script>
</body>
</html>
