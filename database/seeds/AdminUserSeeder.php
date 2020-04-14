<?php

use Illuminate\Database\Seeder;
use App\User;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = "admin1";
        $user->username = "admin1";
        $user->email = "admin@mail.id";
        $user->password = bcrypt('admin123');
        $user->save();
    }
}
