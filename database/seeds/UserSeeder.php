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
        $user = new \App\User;
        $user->name = "Sucipto";
        $user->email = "chip@pringstudio.com";
        $user->password = Hash::make("rahasiakitaberdua");
        $user->api_token = str_random(100);

        $user->save();
    }
}
