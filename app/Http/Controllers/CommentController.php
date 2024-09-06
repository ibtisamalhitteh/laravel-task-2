<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{

    // this is function add comment to post by login user
    public function add(Request $request)
    {
       $input = $request->only('content');
       $comment = Comment::create($input);

        $notification = array(
            'message' => 'Comment added successful!',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function update(Request $request , $id)
    {
       $input = $request->only('content');
       $item = Comment::where('id',$id)->update($input);

        $notification = array(
            'message' => 'Comment updated successful!',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    }

    public function delete(Request $request , $id)
    {
       $Comment = Comment::where('id',$id)->delete();
        $notification = array(
            'message' => 'deleted successful',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

}
