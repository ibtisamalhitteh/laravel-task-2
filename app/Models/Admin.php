<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Hash;

class Admin extends Authenticatable 
{
    use HasFactory , SoftDeletes;

    protected $table = "admins";
    protected $fillable = [
        'email',
        'name',
        'status',
        'password'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];


    protected function password(): Attribute
    {
        return new Attribute(
            set: fn ($password) => Hash::make($password),
        );
    }
}
