<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Payment Confirmation</title>
  <link rel="stylesheet" href="./css/modal_payment.css">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container mt-5">
    <div class="card">
      <div class="card-body">
        <h3 class="card-title text-center font-weight-bold" style="color: #03829E;">Payment Confirmation</h3>
        <div class="row mt-4">
          <div class="col-md-6 d-flex justify-content-center align-items-center">
            <img src="../assets/QRIS.png" class="img-fluid" alt="QR Code">
          </div>
          <div class="col-md-6 mt-3">
            <ol>
              <h5 class="text-align font-weight-bold">Petunjuk Pembayaran</h5>
              <li>Buka aplikasi pembayaran atau dompet digital (e-wallet) yang mendukung QRIS pada ponsel Anda.</li>
              <li>Pilih menu pembayaran atau scan QR code pada aplikasi tersebut.</li>
              <li>Arahkan kamera ponsel Anda ke QR code disamping ini, pastikan QR code terdeteksi jelas dan berada dalam frame kamera.</li>
              <li>Masukkan nominal jumlah pembayaran dengan benar.</li>
              <li>Konfirmasi pembayaran dengan menekan tombol "Bayar" dan pembayaran berhasil</li>
              <li>Screenshot bukti pembayaran anda lalu upload pada kolom image di bawah ini.</li>
            </ol>
            <form id="paymentForm">
              <div class="form-group">
                <label for="paymentProof">Image</label>
                <input type="file" class="form-control-file" id="paymentProof" name="payment_proof" required>
              </div>
              <button type="submit" class="btn btn-primary btn-block">SUBMIT</button>
            </form>
          </div>
        </div>
        <div class="col-md-6 mt-4 d-flex justify-content-center align-items-center">
          <h4 class="text-danger" id="totalPrice">Total: Rp 0</h4>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="successModalLabel">Payment Successful</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body text-center font-weight-bold">
          <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
            <circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none"/>
            <path class="checkmark__check" fill="none" d="M14 27l7 7 16-16"/>
          </svg>
          Pembayaran anda telah berhasil! Mohon untuk menunggu konfirmasi dari admin 
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script>
    const bookingId = new URLSearchParams(window.location.search).get('id');
    function directSummary(){
      window.location.href =  `Booking Summary.php?id=${bookingId}`
    }

    document.addEventListener('DOMContentLoaded', function() {
      const token = localStorage.getItem('token');
      const bookingId = new URLSearchParams(window.location.search).get('id');

      if (!token) {
        alert('You are not logged in. Please log in first.');
        window.location.href = 'Sign in.php';
        return;
      }

      if (bookingId) {
        fetch(`http://127.0.0.1:8000/api/bookings/${bookingId}`, {
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
          } else {
            const formattedTotalCost = new Intl.NumberFormat('id-ID', {
              style: 'currency',
              currency: 'IDR'
            }).format(data.order_detail.total_cost);

            document.getElementById('totalPrice').innerText = `Total: ${formattedTotalCost}`;
          }
        })
        .catch(error => {
          console.error('Error:', error);
          alert('An error occurred while fetching the booking details.');
        });
      } else {
        alert('Booking ID not found');
      }

      document.getElementById('paymentForm').addEventListener('submit', function(event) {
        event.preventDefault();

        const formData = new FormData();
        const paymentProof = document.getElementById('paymentProof').files[0];

        if (!paymentProof) {
          alert('Please upload a payment proof image.');
          return;
        }

        formData.append('payment_proof', paymentProof);

        fetch(`http://127.0.0.1:8000/api/bookings/${bookingId}/upload-payment`, {
          method: 'POST',
          headers: {
            'Authorization': 'Bearer ' + token
          },
          body: formData
        })
        .then(response => response.json())
        .then(data => {
          if (data.message) {
            $('#successModal').modal('show');
          } else {
            alert('Error: ' + data.error);
          }
        })
        .catch(error => {
          console.error('Error:', error);
          alert('An error occurred while uploading payment proof.');
        });
      });
    });
  </script>
</body>
</html>
