<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\OtpCode;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use App\Mail\OtpMail;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required|string|max:25',
            'email' => 'required|string|email|max:255|unique:users',
            'phone_number' => 'required|string|max:30',
            'password' => 'required|string|min:8',
            'role_id' => 'required|integer|exists:roles,id',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $user = User::create([
            'uuid' => Str::uuid(),
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone_number' => $request->phone_number,
            'role_id' => $request->role_id,
        ]);

        return response()->json(['message' => 'User registered successfully', 'user' => $user], 201);
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (!Auth::attempt($credentials)) {
            return response()->json(['error' => 'Unauthorised'], 401);
        }

        $user = Auth::user();
        $otp = rand(1000, 9999);

        OtpCode::updateOrCreate(
            ['user_id' => $user->id],
            ['otp' => $otp]
        );

        Mail::to($user->email)->send(new OtpMail($otp));

        return response()->json(['message' => 'OTP sent to your email'], 200);
    }

    public function verifyOtp(Request $request)
    {
        $otpCode = OtpCode::where('otp', $request->otp)->first();

        if (!$otpCode) {
            return response()->json(['error' => 'Invalid OTP'], 400);
        }

        $user = User::find($otpCode->user_id);
        $user->email_verified_at = now();
        $user->save();

        $otpCode->delete();

        $token = $user->createToken('Personal Access Token')->plainTextToken;

        return response()->json(['message' => 'Account verified', 'token' => $token], 200);
    }

    public function resendOtp(Request $request)
    {
        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return response()->json(['error' => 'User not found'], 404);
        }

        $otp = rand(1000, 9999);

        OtpCode::updateOrCreate(
            ['user_id' => $user->id],
            ['otp' => $otp]
        );

        Mail::to($user->email)->send(new OtpMail($otp));

        return response()->json(['message' => 'OTP resent to your email'], 200);
    }
}
