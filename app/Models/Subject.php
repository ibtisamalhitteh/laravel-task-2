<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\User;

class Subject extends Model
{
    use HasFactory , SoftDeletes;

    protected $table = "subjects";
    protected $fillable = [
        'name',
        'minimum_success_mark',
        'status'
    ];

    public function students()
    {
        return $this->belongsToMany(User::class, 'users_subjects' , 'subject_id' , 'user_id' )->withPivot(['obtained_mark']);
    }

}
