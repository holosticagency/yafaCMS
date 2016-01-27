<?php

use Illuminate\Database\Seeder;

class CreateAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new App\User;
        $user->name = 'Rasko Lazic';
        $user->email = 'raskolazic@gmail.com';
        $user->password = bcrypt('password');
        $user->save();
    }
}
