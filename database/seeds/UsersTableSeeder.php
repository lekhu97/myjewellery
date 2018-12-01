<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;
use App\Profile;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'name' => 'admin',
            'description' => 'Admin Role',
        ]);
       DB::table('roles')->insert([
            'name' => 'customer',
            'description' => 'Customer Role',
        ]);
        

         $user = User::create([
            'name' => 'Super Admin',
            'role_id' => 1,
            'email' => 'super@admin.com',
            'password' => bcrypt('password'),
        ]);

        Profile::create([
           'user_id'=>$user->id,
        ]);
    }
}
