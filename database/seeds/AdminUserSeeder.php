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
        $dUser = [
            'name' => 'admin1',
            'username' => 'admin1',
            'email' =>'admin@mail.id',
            'password' => bcrypt('admin123'),
        ];
        User::insert($dUser);
    }
}
