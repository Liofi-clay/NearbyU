<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Produk</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
      /* Tambahkan CSS kustom untuk memperbaiki desain */
      .table-container {
          padding: 20px;
          background-color: #f8f9fa;
          border-radius: 8px;
          box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      }

      th, td {
          text-align: center;
          vertical-align: middle;
      }

      .btn-preview {
          margin-right: 5px;
      }

      .modal-content {
          border-radius: 8px;
      }

      .btn-primary {
          background-color: #03829E;
          border-color: #03829E;
      }

      .btn-danger {
          background-color: #E74C3C;
          border-color: #E74C3C;
      }

      .navbar-brand {
          font-size: 1.5rem;
      }

      .nav-link.active {
          color: #03829E !important;
      }

      .container {
          max-width: 1000px;
      }
  </style>
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
                <a class="nav-link fw-medium text-black" href="Akun Admin.php">
                <div id="adminProfile"></div>
                 </a>
            </div>
        </div>
</nav>
<!-- Navbar end -->

<div class="container mt-5">
    <div class="d-flex justify-content-end mb-3">
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addDataModal">Tambah Data</button>
    </div>
    <div class="table-container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Jenis Ruangan</th>
                    <th scope="col">Harga/jam</th>
                    <th scope="col">Kuota</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody id="productTableBody">
                <!-- Data produk akan dimasukkan di sini secara dinamis -->
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
                        <label for="description" class="form-label">Deskripsi</label>
                        <textarea class="form-control" id="description" rows="3" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Gambar</label>
                        <input type="file" class="form-control" id="image" required></input>
                    </div>
                    <div class="d-flex justify-content-between">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batalkan</button>
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
    const token = localStorage.getItem('adminToken');
    if (!token) {
        alert('You are not logged in. Please log in first.');
        window.location.href = 'Login_Admin.php';
    } else {
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
        })
        .catch(error => console.error('Error:', error));
    }

    function setDeleteData(roomType) {
        document.getElementById('deleteRoomType').textContent = roomType;
    }

    function confirmDelete() {
        alert('Data has been deleted successfully.');
        var deleteModal = new bootstrap.Modal(document.getElementById('deleteModal'));
        deleteModal.hide();
    }

    document.getElementById('addDataForm').addEventListener('submit', function(event) {
        event.preventDefault();
        var addDataModal = new bootstrap.Modal(document.getElementById('addDataModal'));
        addDataModal.hide();
        });


        document.getElementById('addDataForm').addEventListener('submit', function(event) {
        event.preventDefault();

        const formData = new FormData();
        formData.append('space_type', document.getElementById('roomType').value);
        formData.append('price', document.getElementById('price').value);
        formData.append('kuota', document.getElementById('quota').value);
        formData.append('desc', document.getElementById('description').value);
        formData.append('image', document.getElementById('image').files[0]);

        fetch('http://127.0.0.1:8000/api/products', {
            method: 'POST',
            headers: {
                'Authorization': `Bearer ${token}`,
            },
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.id) {
                alert('Data produk berhasil ditambahkan.');
                location.reload(); // Refresh halaman setelah berhasil menambah data
            } else {
                alert('Gagal menambahkan data produk.');
                console.error('Error:', data);
            }
        })
        .catch(error => console.error('Error:', error));
    });
    

    let deleteProductId = null;

    function setDeleteData(roomType, productId) {
        document.getElementById('deleteRoomType').textContent = roomType;
        deleteProductId = productId;
    }

    function confirmDelete() {
        if (deleteProductId) {
            fetch(`http://127.0.0.1:8000/api/products/${deleteProductId}`, {
                method: 'DELETE',
                headers: {
                    'Authorization': `Bearer ${token}`,
                    'Content-Type': 'application/json',
                },
            })
            .then(response => response.json())
            .then(data => {
                if (data.message === 'Product deleted') {
                    alert('Data produk berhasil dihapus.');
                    location.reload(); // Refresh halaman setelah berhasil menghapus data
                } else {
                    alert('Gagal menghapus data produk.');
                    console.error('Error:', data);
                }
            })
            .catch(error => console.error('Error:', error));
        }
    }


    // Fetch products from API and populate table
    document.addEventListener('DOMContentLoaded', function() {
        fetch('http://127.0.0.1:8000/api/products', {
            method: 'GET',
            headers: {
                'Authorization': `Bearer ${token}`,
                'Content-Type': 'application/json',
            },
        })
        .then(response => response.json())
        .then(data => {
            const productTableBody = document.getElementById('productTableBody');
            productTableBody.innerHTML = '';
            data.forEach(product => {
                const productRow = `
                    <tr>
                        <td>${product.space_type}</td>
                        <td>${product.price}</td>
                        <td>${product.kuota} orang</td>
                        <td>
                            <a class="btn btn-sm btn-outline-primary btn-preview" href="Preview.php?id=${product.id}">Preview</a>
                            <button class="btn btn-sm btn-outline-danger btn-delete" data-bs-toggle="modal" data-bs-target="#deleteModal" onclick="setDeleteData('${product.space_type}', ${product.id})">Hapus</button>
                        </td>
                    </tr>
                `;
                productTableBody.innerHTML += productRow;
            });
        })
        .catch(error => console.error('Error:', error));
    });

</script>
</body>
</html>
