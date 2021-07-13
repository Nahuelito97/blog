<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;

class UserTableSeeder extends Seeder
{
    public function run()
    {
      User::create([
        'name' => 'Nahuel Wagner',
        'email' => 'nahuelito@gmail.com',
        'password' => bcrypt('12345')
      ])->assignRole('Admin');

      factory(User::class, 50)->create();
    }
}
