<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;


class LandingController extends Controller
{
    public function index(Request $request)
    {
        $posts_left = Pst::inRandomOrder()->limit(5)->get();
        $posts_right = Pst::inRandomOrder()->limit(5)->get();
        return view(
            'home',
            [
                'posts_left' => $posts_left,
                'posts_right' => $posts_right,
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
