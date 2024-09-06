<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\User;
use App\Models\Post;

class Comment extends Model
{
    use HasFactory, SoftDeletes;


    public $softDeleting = true;
    protected $table = "comments";
    protected $fillable = [
        "content" ,
        "status",
        "user_id",
        "post_id"
    ];


    public function user(){
        return $this->belongsTo(User::class);
    }


    public function post(){
        return $this->belongsTo(Post::class);
    }

}
