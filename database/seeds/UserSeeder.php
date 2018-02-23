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
        DB::table('users')->insert([
            'name' => 'Nobody',
            'email' => 'no.body@no.where',
            'password' => '',
            'remember_token' => ''
        ]);
    }
}
