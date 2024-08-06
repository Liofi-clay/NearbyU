<!DOCTYPE html>
<html>
<head>
    <title>Password Reset</title>
</head>
<body>
    <h1>Password Reset Request</h1>
    <p>You have requested a password reset. Click the link below to reset your password:</p>
    <a href="{{ url('/reset-password?token=' . $token) }}">Reset Password</a>
    <p>token: {{ $token }}</p>
    <p>This link will expire in 60 minutes.</p>
</body>
</html>
