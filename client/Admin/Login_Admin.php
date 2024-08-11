<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Admin</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="card p-4">
        <h5 class="text-center mb-4" style="color: #03829E;">NearbyU Space Admin</h5>
        <p>Hallo, selamat datang kembali admin!</p>
        <form id="loginForm">
            <div class="mb-3 text-start">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" required>
            </div>
            <div class="mb-3 text-start">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Enter password" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">LOGIN</button>
        </form>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    document.getElementById('loginForm').addEventListener('submit', function(event) {
        event.preventDefault();
        var email = document.getElementById('email').value;
        var password = document.getElementById('password').value;

        fetch('http://127.0.0.1:8000/api/login-admin', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({email: email, password: password})
        })
        .then(response => response.json())
        .then(data => {
            if (data.token) {
                if(localStorage.getItem('token')){
                    localStorage.removeItem('token')
                }
                localStorage.setItem('adminToken', data.token);
                window.location.href = 'Dashboard.php'
            } else {
                alert(data.error || 'Login failed');
            }
        })
        .catch(error => console.error('Error:', error));
    });
</script>
</body>
</html>
