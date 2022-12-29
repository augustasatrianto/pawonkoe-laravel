<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserApiController extends Controller
{
    public function index(){
        $users = User::all();
        return response()->json(['data' => $users]);
    }

    public function show($id)
    {
        return response([
            'user' => User::where('id', $id)->get()
        ], 200);
    }
}
