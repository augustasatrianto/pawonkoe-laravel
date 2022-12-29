<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostApiController extends Controller
{
    public function index(){
        $posts = Post::all();
        return response()->json(['data' => $posts]);
    }

    public function show($id)
    {
        return response([
            'post' => Post::where('id', $id)->get()
        ], 200);
    }
}
