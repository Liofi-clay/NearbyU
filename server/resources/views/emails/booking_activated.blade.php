<!DOCTYPE html>
<html>
<head>
    <title>Booking Activated</title>
</head>
<body>
    <h1>Booking Activated</h1>
    <p>Dear {{ $details['username'] }},</p>
    <p>Your booking has been activated. Here are the details:</p>
    <ul>
        <li>Space Type: {{ $details['space_type'] }}</li>
        <li>Day: {{ $details['day'] }}</li>
        <li>Check-In: {{ $details['check_in'] }}</li>
        <li>Check-Out: {{ $details['check_out'] }}</li>
        <li>Payment Method: {{ $details['payment_method'] }}</li>
    </ul>
    <p>Please find your QR code below:</p>
    <img src="{{ asset($details['qr_code_path'])  }}" alt="QR Code">
    <p>Thank you for your booking.</p>
</body>
</html>
