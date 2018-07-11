<?php

use Illuminate\Database\Seeder;
use App\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    $user = new User();
     $user->name = 'Admin';
     $user->email = 'admin@mail.com';
     $user->password = bcrypt('admin');
     $user->role = 'admin';
    $user->save();
    $user = new User();
     $user->name = 'Ismael';
     $user->email = 'ismael@mail.com';
     $user->password = bcrypt('ismael');
     $user->role = 'dentista';
    $user->save();
    }
}
