<!DOCTYPE html>
<html>
<head>
    <title>Booking Accepted</title>
</head>
<body>
    <h1>Your Booking has been Accepted</h1>
    <p>Dear {{ $booking->user->username }},</p>
    <p>Your booking for {{ $booking->product->space_type }} on {{ $booking->orderDetail->day }} has been accepted. Please proceed to payment.</p>
    <p>Thank you!</p>
</body>
</html>
