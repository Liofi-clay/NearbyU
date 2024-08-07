<?php

namespace App\Http\Controllers;

use App\Models\Status;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Validator;

class StatusController extends Controller
{
    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'status' => 'required|string|max:25|unique:statuses',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $status = Status::create([
            'status' => $request->status,
        ]);

        return response()->json(['message' => 'Status created successfully', 'status' => $status], 201);
    }

    public function getAll()
    {
        $statuses = Status::all();
        return response()->json($statuses, 200);
    }

    public function getById($id)
    {
        $status = Status::find($id);

        if (!$status) {
            return response()->json(['error' => 'Status not found'], 404);
        }

        return response()->json($status, 200);
    }

    public function update(Request $request, $id)
    {
        $status = Status::find($id);

        if (!$status) {
            return response()->json(['error' => 'Status not found'], 404);
        }

        $validator = Validator::make($request->all(), [
            'status' => 'required|string|max:25|unique:statuses,status,' . $id,
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $status->status = $request->status;
        $status->save();

        return response()->json(['message' => 'Status updated successfully', 'status' => $status], 200);
    }

    public function delete($id)
    {
        $status = Status::find($id);

        if (!$status) {
            return response()->json(['error' => 'Status not found'], 404);
        }

        $status->delete();

        return response()->json(['message' => 'Status deleted successfully'], 200);
    }
}
