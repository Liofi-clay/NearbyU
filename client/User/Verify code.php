<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verification Code</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="card p-4">
        <div class="card-body text-center">
            <h5 class="text-center mb-4" style="color:  #03829E ;">NearbyU Space</h5>
            <h4 class="text-center mb-4">VERIFICATION CODE</h4>
            <p>Please check, we have sent a verification code to your email.</p>
            <form id="verificationForm" class="w-100">
                <div class="d-flex justify-content-center align-items-center mb-3 w-100">
                    <input type="text" class="form-control verification-input mx-1" style="width: 40px;" maxlength="1" required>
                    <input type="text" class="form-control verification-input mx-1" style="width: 40px;" maxlength="1" required>
                    <input type="text" class="form-control verification-input mx-1" style="width: 40px;" maxlength="1" required>
                    <input type="text" class="form-control verification-input mx-1" style="width: 40px;" maxlength="1" required>
                </div>
                <button type="submit" class="btn btn-primary">Verify</button>
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
                Your verification code has been accepted successfully.
            </div>
            <div class="modal-footer">
                <a href="index.php" class="btn btn-primary">Go to Dashboard</a>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    document.getElementById('verificationForm').addEventListener('submit', function(event) {
        event.preventDefault();
        var inputs = document.querySelectorAll('.verification-input');
        var code = '';
        inputs.forEach(input => {
            code += input.value;
        });

        if (code.length === 4) {
            fetch('http://127.0.0.1:8000/api/verify-otp', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({ otp: code })
            })
            .then(response => response.json())
            .then(data => {
                if (data.message) {
                    // Save the token to localStorage
                    localStorage.setItem('token', data.token);
                    
                    var successModal = new bootstrap.Modal(document.getElementById('successModal'));
                    successModal.show();
                } else {
                    alert('Invalid OTP. Please try again.');
                }
            })
            .catch(error => {
                console.error('Error:', error);
            });
        }
    });
</script>
</body>
</html>
