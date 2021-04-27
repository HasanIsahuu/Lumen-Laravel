<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = App\User::create([
            'name' => 'Your full name goes here',
            'password' => 'test@123',
            'admin' => 1 // admin should have a value dont change it
      ]);
    }
}
