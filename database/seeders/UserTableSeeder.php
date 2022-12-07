<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('users')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        $admin = new User();
        $admin->name = 'Admin Example';
        $admin->email = 'admin@example.com';
        $admin->password = bcrypt('123456');
        $admin->role_id = 1;
        $admin->save();

        $accountant = new User();
        $accountant->name = 'Accountant Example';
        $accountant->email = 'acount@example.com';
        $accountant->password = bcrypt('123456');
        $accountant->role_id = 2;
        $accountant->save();

        $user = new User();
        $user->name = 'User Example';
        $user->email = 'user@example.com';
        $user->password = bcrypt('123456');
        $user->role_id = 3;
        $user->save();
    }
}
