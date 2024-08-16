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
use App\Models\ImageProfile;

class AuthController extends Controller
{
    public function getProfile(Request $request)
    {
        $user = Auth::user();
    
        if (!$user) {
            return response()->json(['error' => 'Unauthenticated'], 401);
        }

        $user->load('imageProfile');
    
        return response()->json([
            'uuid' => $user->uuid,
            'username' => $user->username,
            'email' => $user->email,
            'phone_number' => $user->phone_number,
            'role_id' => $user->role_id,
            'image_profile' => $user->imageProfile ? $user->imageProfile->image_url : null,
        ], 200);
    }

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

        $image_profile = ImageProfile::create(['image_url'=>null]);

        $user = User::create([
            'uuid' => Str::uuid(),
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone_number' => $request->phone_number,
            'role_id' => $request->role_id,
            'image_profile_id' => $image_profile->id
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

    public function loginAdmin(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (!Auth::attempt($credentials)) {
            return response()->json(['error' => 'Unauthorised'], 401);
        }

        $user = Auth::user();

        if ($user->role_id != 1) { // Pastikan role_id 1 adalah untuk admin
            return response()->json(['error' => 'role must be admin'], 401);
        }

        $token = $user->createToken('Admin Personal Access Token')->plainTextToken;

        return response()->json(['message' => 'logged in successfully', 'token' => $token], 200);
    }

    public function updateProfile(Request $request)
    {
        $user = Auth::user();
    
        if (!$user) {
            return response()->json(['error' => 'Unauthenticated'], 401);
        }
    
        $validator = Validator::make($request->all(), [
            'username' => 'required|string|max:25',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'phone_number' => 'required|string|max:30',
            'password' => 'nullable|string|min:8',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);        
    
        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }
    
        // Update user fields if present
        if ($request->has('username')) {
            $user->username = $request->username;
        }
    
        if ($request->has('email')) {
            $user->email = $request->email;
        }
    
        if ($request->has('phone_number')) {
            $user->phone_number = $request->phone_number;
        }
    
        if ($request->has('password')) {
            $user->password = Hash::make($request->password);
        }
    
        // Handle image upload
        if ($request->hasFile('image')) {
            $imageProfile = $user->imageProfile;
            $imageName = time() . '.' . $request->file('image')->getClientOriginalExtension();
    
            // Debugging: Cek apakah file berhasil terupload
            if ($request->file('image')->isValid()) {
                $request->file('image')->move(public_path('images/profile'), $imageName);
    
                if ($imageProfile) {
                    // Update existing image profile
                    $imageProfile->image_url = '/images/profile/' . $imageName;
                    $imageProfile->save();
                } else {
                    // Create new image profile if it doesn't exist
                    $imageProfile = ImageProfile::create(['image_url' => '/images/profile/' . $imageName]);
                    $user->image_profile_id = $imageProfile->id;
                }
            } else {
                return response()->json(['error' => 'Uploaded file is not valid'], 400);
            }
        }
    
        $user->update();
    
        return response()->json([
            'message' => 'Profile updated successfully',
            'user' => $user->load('imageProfile'),
        ], 200);
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
