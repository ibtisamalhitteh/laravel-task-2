<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Permission;

class Role extends Model
{
    use HasFactory , SoftDeletes;

    const ROLE_ADMIN = 1;
    const ROLE_USER = 2;

    public $softDeleting = true;
    protected $table = "roles";
    protected $fillable = [
        "name" ,
        "status"
    ];

    public function permissions()
    {
        return $this->belongsToMany(Permission::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class,'users_roles');
    }

}
