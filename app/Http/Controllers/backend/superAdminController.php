<?php

namespace App\Http\Controllers\backend;

use App\Models\user;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class superAdminController extends Controller
{
    public function rolechanger(Request $request, User $user)
    {
        $request->validate([
            'role_id' => 'required|integer|exists:roles,id',
        ]);

        $user->role = $request->role_id;
        $user->save();

        return response()->json([
            'success' => true,
            'message' => 'Role user changed successfully.',
            'data' => $user,
        ], 201);
    }
}
