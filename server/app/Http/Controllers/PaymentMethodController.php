<?php

namespace App\Http\Controllers;

use App\Models\PaymentMethod;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Validator;

class PaymentMethodController extends Controller
{
    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'payment_category' => 'required|string|max:255|unique:payment_methods',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $paymentMethod = PaymentMethod::create([
            'payment_category' => $request->payment_category,
        ]);

        return response()->json(['message' => 'Payment method created successfully', 'payment_method' => $paymentMethod], 201);
    }

    public function getAll()
    {
        $paymentMethods = PaymentMethod::all();
        return response()->json($paymentMethods, 200);
    }

    public function getById($id)
    {
        $paymentMethod = PaymentMethod::find($id);

        if (!$paymentMethod) {
            return response()->json(['error' => 'Payment method not found'], 404);
        }

        return response()->json($paymentMethod, 200);
    }

    public function update(Request $request, $id)
    {
        $paymentMethod = PaymentMethod::find($id);

        if (!$paymentMethod) {
            return response()->json(['error' => 'Payment method not found'], 404);
        }

        $validator = Validator::make($request->all(), [
            'payment_category' => 'required|string|max:255|unique:payment_methods,payment_category,' . $id,
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $paymentMethod->payment_category = $request->payment_category;
        $paymentMethod->save();

        return response()->json(['message' => 'Payment method updated successfully', 'payment_method' => $paymentMethod], 200);
    }

    public function delete($id)
    {
        $paymentMethod = PaymentMethod::find($id);

        if (!$paymentMethod) {
            return response()->json(['error' => 'Payment method not found'], 404);
        }

        $paymentMethod->delete();

        return response()->json(['message' => 'Payment method deleted successfully'], 200);
    }
}
