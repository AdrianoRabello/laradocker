<?php

use Illuminate\Database\Seeder;

use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      User::create([

        'name'=> 'Adriano Rabello',
        'email' => 'adrianor.rabello@hotmail.com',
        'password' => bcrypt('123456')
       
      ]);
    }
}
