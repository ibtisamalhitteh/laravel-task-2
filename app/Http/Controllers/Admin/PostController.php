<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(Request $request)
    {
        $posts = Post::paginate(10);
        return view(
            'admin.posts.list',
            [
                'list' => $posts,
            ]
        );
    }


    public function create(Request $request)
    {
        return view(
            'admin.posts.add-new'
        );
    }

    public function store(Request $request)
    {
       $input = $request->only('title','content','status','thumb');
       $post = Post::create($input);

        return redirect()->route('administrator.posts.list');

    }

    public function show($id)
    {
        $post = Post::where('id',$id)->first();
        return view(
            'admin.posts.view',
            [
                'post' => $post
            ]
        );
    }

    public function edit(Request $request, $id)
    {
        $post = Post::where('id',$id)->first();
        return view(
            'admin.posts.edit',
            [
               'post' => $post
            ]
        );
    }


    public function update(Request $request,$id)
    {
       $input = $request->only('title','content','thumb','status');
        $item = Post::where('id',$id)->update($input);
        $notification = array(
             'message' => 'post updated successful!',
                'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    }

    public function delete(Request $request,$id)
    {
        $post = Post::where('id',$id)->delete();
        $notification = array(
             'message' => 'post deleted successful!',
                'alert-type' => 'success'
        );

       return redirect()->route('administrator.posts.list')->with($notification);
    }
}
