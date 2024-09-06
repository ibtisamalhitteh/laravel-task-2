<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;


class LandingController extends Controller
{
    public function index(Request $request)
    {
        $posts = Post::all();
        return view(
            'home',
            [
                'list' => $posts,
            ]
        );
    }


    public function view(Request $request , $id)
    {
        $post = Post::where('id',$id)->first();
        return view(
            'post-details',
            [
                'post' => $post,
            ]
        );
    }

}
