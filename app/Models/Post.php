<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Comment;

class Post extends Model
{
    use HasFactory , SoftDeletes;

    public $softDeleting = true;
    protected $table = "comments";
    protected $fillable = [
        "title",
        "content" ,
        "status",
        "thumb"
    ];

    public function comment(){
        return $this->hasMany(Comment::class);
    }
}
