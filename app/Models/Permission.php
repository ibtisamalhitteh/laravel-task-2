<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Role;
use App\Models\User;

class Permission extends Model
{
    use HasFactory, SoftDeletes;

    public $softDeleting = true;
    protected $table = "permissions";
    protected $fillable = [
        "name" ,
        "status"
    ];


    public function post()
    {
        return $this->hasMany(Post::class);
    }


    public function role(){
        return $this->belongsToMany(Role::class,'permission_role','permission_id','role_id');
    }

    public function user(){
        return $this->belongsToMany(User::class,'users_permissions','permission_id','user_id');
    }
}
