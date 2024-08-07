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
            <div class="card-body text-center">
                <h5 class="text-center mb-4" style="color:  #03829E ;">NearbyU Space</h5>
                <h4 class="text-center mb-4">RESET PASSWORD</h4>
                <form id="resetPasswordForm">
                    <div class="mb-3 text-start">
                        <label for="newPassword" class="form-label">Enter your new password</label>
                        <input type="password" class="form-control" id="newPassword" placeholder="Enter new password" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Success Modal -->
    <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="successModalLabel">Success</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Your password has been reset successfully.
                </div>
                <div class="modal-footer">
                <a href="Login.php" class="btn btn-primary">Go to Login</a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.getElementById('resetPasswordForm').addEventListener('submit', function(event) {
            event.preventDefault();
            var newPassword = document.getElementById('newPassword').value;
            if (newPassword) {
                // Here you can add your form submission logic (e.g., AJAX request)
                
                // Show the success modal after form submission
                var successModal = new bootstrap.Modal(document.getElementById('successModal'));
                successModal.show();
            }
        });
    </script>
</body>
</html>