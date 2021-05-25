<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      $role_admin = Role::where('name','admin')->first();

      $user = new User();
      $user-> name = "Nahuel Wagner";
      $user->email = "genius@gmail.com";
      $user->password = bcrypt('12345');
      $user->save();
      $user->roles()->attach($role_admin);
    }
}
