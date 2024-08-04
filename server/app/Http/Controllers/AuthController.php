<?php 

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\OtpCode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required|string|max:25',
            'phone_number' => 'required|string|max:30',
            'password' => 'required|string|min:8',
            'role_id' => 'required|integer|exists:role,id',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $user = User::create([
            'uuid' => Str::uuid(),
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'phone_number' => $request->phone_number,
            'role_id' => $request->role_id,
        ]);

        return response()->json(['message' => 'User registered successfully', 'user' => $user], 201);
    }

    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            $token = $user->createToken('Personal Access Token')->accessToken;

            return response()->json(['token' => $token], 200);
        }

        return response()->json(['error' => 'Unauthorised'], 401);
    }

    public function sendOtp(Request $request)
    {
        $user = User::where('phone_number', $request->phone_number)->first();

        if (!$user) {
            return response()->json(['error' => 'User not found'], 404);
        }

        $otp = rand(1000, 9999);
        OtpCode::create([
            'otp' => $otp,
            'user_id' => $user->id,
        ]);

        // Kirim OTP melalui SMS atau Email (implementasi disesuaikan)
        // Mail::to($user->email)->send(new SendOtpMail($otp));

        return response()->json(['message' => 'OTP sent'], 200);
    }

    public function verifyOtp(Request $request)
    {
        $otpCode = OtpCode::where('otp', $request->otp)->where('user_id', $request->user_id)->first();

        if (!$otpCode) {
            return response()->json(['error' => 'Invalid OTP'], 400);
        }

        $user = User::find($otpCode->user_id);
        $user->email_verified_at = now();
        $user->save();

        $otpCode->delete();

        return response()->json(['message' => 'Account verified'], 200);
    }
}
