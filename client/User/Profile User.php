<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NearbyU Space</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <!-- Navbar Start -->

    <nav class="navbar navbar-expand-lg border sticky-top bg-white">
    <div class="container p-2 d-flex justify-content-between w-100">
        <div>
            <a class="navbar-brand fw-semibold fs-4" href="#" style="color: #03829E;">NearbyU Space</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto d-flex align-items-center">
                <li class="nav-item me-4">
                    <a class="nav-link fw-medium text-black" href="index.php">Home</a>
                </li>
                <li class="nav-item me-4">
                    <a class="nav-link fw-medium text-black" href="our space.php">Our Space</a>
                </li>
                <li class="nav-item me-4">
                    <a class="nav-link fw-medium text-black" href="about.php">About</a>
                </li>
                <li class="nav-item me-4">
                    <a class="nav-link fw-medium text-black" href="Location.php">Location</a>
                </li>
                <li class="nav-item me-4">
                    <a class="nav-link fw-medium text-black" href="contact.php">Contact</a>
                </li>
                <li class="nav-item me-4">
                    <a class="nav-link fw-medium" aria-current="page" href="index.php" style="color: #03829E;">My Order</a>
                </li>
            </ul>
        </div>
        <div class="nav-item">
            <div id="authMenu">
                 <!-- This will be populated with Sign In button or Profile Menu based on user's login status -->
            </div>
    </div>
</nav>

    <!-- Navbar End -->

    <!-- Our Product Start -->
    <div class="container mt-5">
        <h2>Edit Profile</h2>
        <form id="Profile-form">
            <div class="form-group">
                <label for="profilePic">Profile Picture</label>
                <div class="mb-3">
                    <img id="profilePicPreview" src="https://via.placeholder.com/150" class="img-thumbnail" alt="Profile Picture Preview" style="max-width: 150px;">
                    <input type="file" class="form-control-file" id="profilePic" accept="image/*">
                </div>
            </div>
            <div class="form-group">
                <label for="username">Name</label>
                <input type="text" class="form-control" id="username" placeholder="Enter username" required>
            </div>
            <div class="form-group">
                <label for="mobile">Mobile Number</label>
                <input type="tel" class="form-control" id="mobile" placeholder="Mobile number" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Password">
            </div>
            <div class="py-2">
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="button" class="btn btn-danger" onclick="window.location.href='index.php'">Cancel</button>
            </div>
        </form>
    </div>
    <!-- Our Product End -->

    <!-- Footer Start -->
    <div class="footer bg-white border mt-5 pt-3">
        <div class="container">
            <div class="row">
                <div class="col-md-6 d-flex flex-column">
                    <a class="navbar-brand fw-semibold fs-4" href="#" style="color: #03829E;">NearbyU Space</a>
                    <div class="d-flex gap-3 mt-auto">
                        <i class="fa-brands fa-facebook" style="color: #005eff;"></i>
                        <i class="fa-brands fa-tiktok"></i>
                        <i class="fa-brands fa-youtube" style="color: #ff0000;"></i>
                        <i class="fa-brands fa-instagram" style="color: #b0039c;"></i>
                        <i class="fa-brands fa-whatsapp" style="color: #2e9e05;"></i>
                    </div>
                </div>
                <div class="col-md-2">
                    <a class="nav-link fw-medium text-black" style="font-size: 16px;" href="#">Our Space</a>
                    <div class="row pt-3 gap-3">
                        <div class="row-md-4">Individual Desk</div>
                        <div class="row-md-4">Group Desk</div>
                        <div class="row-md-4">Collaborative Room</div>
                    </div>
                </div>
                <div class="col-md-2">
                    <a class="nav-link fw-medium text-black" style="font-size: 16px;" href="#">Our Hours</a>
                    <div class="row pt-3 gap-3">
                        <div class="row-md-4">Senin - Minggu</div>
                        <div class="row-md-4">07.00 AM - 10.00 PM</div>
                        <div class="row-md-4">IDR 6.000/Jam</div>
                    </div>
                </div>
                <div class="col-md-2">
                    <a class="nav-link fw-medium text-black" style="font-size: 16px;" href="#">Kontak</a>
                    <div class="row pt-3 gap-3">
                        <div class="row-md-4">Jl. Margonda No.430, Pondok Cina, Kecamatan Beji, Kota Depok, Jawa Barat 16431</div>
                        <div class="row-md-4">+6281239483676</div>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col text-center">
                    <p>&copy; 2024 NearbyU Space. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/6660ed681b.js" crossorigin="anonymous"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const authMenu = document.getElementById('authMenu');
            const token = localStorage.getItem('token');

            if (!token) {
                // User is not logged in, show Sign In button
                authMenu.innerHTML = `
                    <a class="btn btn-dark fw-medium" href="Login.php" role="button">Sign In</a>
                `;
            } else {
                // User is logged in, fetch user profile and update the form and menu
                fetch('http://127.0.0.1:8000/api/profile', {
                    method: 'GET',
                    headers: {
                        'Authorization': 'Bearer ' + token,
                        'Content-Type': 'application/json'
                    }
                })
                .then(response => response.json())
                .then(data => {
                    if (data.error) {
                        alert('Error: ' + data.error);
                        localStorage.removeItem('token');
                        window.location.href = 'Login.php';
                    } else {
                        const profileImageUrl = data.image_profile ? `http://127.0.0.1:8000${data.image_profile}` : 'assets/profile.png';
                        
                        // Update the form with user profile data
                        document.getElementById('username').value = data.username;
                        document.getElementById('email').value = data.email;
                        document.getElementById('mobile').value = data.phone_number;
                        document.getElementById('profilePicPreview').src = profileImageUrl;

                        // Update the auth menu with user profile
                        authMenu.innerHTML = `
                            <div class="dropdown">
                                <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" role="button" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="${profileImageUrl}" width="40" class="rounded-circle" id="navProfileImage" alt="Profile Picture">
                                    <span class="ms-2">${data.username}</span>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="userDropdown">
                                    <li><a class="dropdown-item" href="My Order.php">My Order</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><div class="dropdown-item" onclick="logout()">Sign Out</div></li>
                                </ul>
                            </div>
                        `;
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('An error occurred while fetching user profile.');
                });
            }

        });
        function logout() {
            localStorage.removeItem('token');
            window.location.href = 'Login.php';
        }

        document.getElementById('profilePic').addEventListener('change', function(event) {
            var reader = new FileReader();
            reader.onload = function() {
                var output = document.getElementById('profilePicPreview');
                output.src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
        });

        document.getElementById('Profile-form').addEventListener('submit', function(event) {
            event.preventDefault();

            const formData = new FormData();
            formData.append('username', document.getElementById('username').value);
            formData.append('email', document.getElementById('email').value);
            formData.append('phone_number', document.getElementById('mobile').value);

            const password = document.getElementById('password').value;
            if (password) {
                formData.append('password', password);
            }

            const profilePicInput = document.getElementById('profilePic');
            if (profilePicInput.files && profilePicInput.files.length > 0) {
                formData.append('image', profilePicInput.files[0]);
            }

            const token = localStorage.getItem('token');
            fetch('http://127.0.0.1:8000/api/profile/update', {
                method: 'POST',
                headers: {
                    'Authorization': `Bearer ${token}`
                },
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.message) {
                    alert('Profile updated successfully!');
                    // Optionally reload the page or redirect to another page
                } else {
                    alert('Error updating profile: ' + JSON.stringify(data));
                }
            })
            .catch(error => console.error('Error:', error));
        });

        document.getElementById('rofile-form').addEventListener('change', function(event) {
          var reader = new FileReader();
          reader.onload = function(){
            var output = document.getElementById('profilePicPreview');
            output.src = reader.result;
          };
          reader.readAsDataURL(event.target.files[0]);
        });
      </script>
</body>

</html>