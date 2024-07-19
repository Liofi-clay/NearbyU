<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="card p-4">
        <h5 class="text-center mb-4" style="color:  #03829E ;">NearbyU Space</h5>
        <h2 class="text-center mb-4">LOGIN</h2>
        <form id="loginForm">
        <div class="form-group">
          <label for="email">Your email?</label>
          <input type="email" class="form-control" id="email" placeholder="Email address" required>
        </div>
        <div class="form-group">
          <label for="password">Your password</label>
          <input type="password" class="form-control" id="password" placeholder="Your password" required>
        </div>
        <button type="submit" class="btn btn-dark btn-block">Login</button>
        <p class="text-center mt-3">Don't have an account? <a href="Sign in.html">Register</a></p>
      </form>
    </div>
  </div>



  <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/6660ed681b.js" crossorigin="anonymous"></script>
  <script>
    document.getElementById('loginForm').addEventListener('submit', function(event) {
      event.preventDefault();
      var email = document.getElementById('email').value;
      var password = document.getElementById('password').value;
    
      // Example validation (replace with actual login logic)
      if (email === 'example@example.com' && password === 'password') {
        alert('Login successful!');
        // Redirect to homepage or another page
        window.location.href = 'index.html'; 
      } else {
        alert('Invalid email or password. Please try again.');
      }
    });
    </script>
</body>
</html>
