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
        <h5 class="text-center mb-4" style="color:  #03829E ;">NearbyU Space</h5>
        <h2 class="text-center mb-4">REGISTER</h2>
        <form id="registerForm">
        <div class="form-group">
          <label for="name">Tell us your name</label>
          <input type="text" class="form-control" id="firstName" placeholder="our name" required>
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
        <p class="text-center mt-3">Already have NearbyU Space account? <a href="Login.html">Login</a></p>
      </form>
    </div>
  </div>


  <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/6660ed681b.js" crossorigin="anonymous"></script><script>
    document.getElementById('registerForm').addEventListener('submit', function(event) {
      event.preventDefault();
      var name = document.getElementById('name').value;
      var email = document.getElementById('email').value;
      var password = document.getElementById('password').value;
      var password = document.getElementById('mobile').value;
    
      // Example validation (replace with actual registration logic)
      if (name.trim() === '' || email.trim() === '' || password.trim() === '' || mobile.trim() === '') {
        alert('Please fill in all fields.');
        return;
      }
    
      // Example: Simulate successful registration
      alert('Registration successful!');
    
      // Clear the form after successful registration (optional)
      document.getElementById('registerForm').reset();
    });
    </script>
</body>
</html>
