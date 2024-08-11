<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="card p-4">
      <h5 class="text-center mb-4" style="color: #03829E;">NearbyU Space</h5>
      <h2 class="text-center mb-4">REGISTER</h2>
      <form id="registerForm">
        <div class="form-group">
          <label for="username">Tell us your name</label>
          <input type="text" class="form-control" id="username" placeholder="Your name" required>
        </div>
        <div class="form-group">
          <label for="email">Your email?</label>
          <input type="email" class="form-control" id="email" placeholder="Email address" required>
        </div>
        <div class="form-group">
          <label for="password">Create a password</label>
          <input type="password" class="form-control" id="password" placeholder="Your password" required>
        </div>
        <div class="form-group">
          <label for="mobile">And, your mobile number?</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">+62</span>
            </div>
            <input type="tel" class="form-control" id="mobile" placeholder="Mobile number" required>
          </div>
        </div>
        <button type="submit" class="btn btn-dark btn-block">Register</button>
        <p class="text-center mt-3">Already have NearbyU Space account? <a href="login.php">Login</a></p>
      </form>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/6660ed681b.js" crossorigin="anonymous"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      document.getElementById('registerForm').addEventListener('submit', function(event) {
        event.preventDefault();

        var data = {
          username: document.getElementById('username').value,
          email: document.getElementById('email').value,
          password: document.getElementById('password').value,
          phone_number: document.getElementById('mobile').value,
          role_id: 2 // Assuming role_id 2 for user role
        };

        fetch('http://127.0.0.1:8000/api/register', {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json'
          },
          body: JSON.stringify(data)
        })
        .then(response => response.json())
        .then(data => {
          if (data.message) {
            document.getElementById('registerForm').reset();
            window.location.href = 'Login.php';
          } else {
            alert('Registration failed: ' + JSON.stringify(data));
          }
        })
        .catch(error => {
          console.error('Error:', error);
        });
      });
    });
  </script>
</body>
</html>
