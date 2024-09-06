<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Models\Role;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'usertest',
            'email' => 'usertest@blog.com',
            'password' => "1234567890",
            'email_verified_at' => now(),
        ]);

        $role = Role::where('name','user')->first();

        DB::table('users_roles')->insert([
            'user_id' => $user->id,
            'role_id' => $role->id,
        ]);
    }
}
