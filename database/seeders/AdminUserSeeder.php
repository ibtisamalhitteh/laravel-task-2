<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;
class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Administrator',
            'email' => 'admin@blog.com',
            'password' => Hash::make("1234567890"),
            'email_verified_at' => now(),
//            'role_id' => 1, // Administrator
        ]);

        $role = Role::where('name','admin')->first();

        DB::table('users_roles')->insert([
            'user_id' => $user->id,
            'role_id' => $role->id,
        ]);

    }
}
