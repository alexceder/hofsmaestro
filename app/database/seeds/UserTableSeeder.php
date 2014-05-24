<?php

class UserTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();

        User::create([
            'uid' => '1h2g3h12g3h1g23',
            'username' => 'alex',
            'password' => Hash::make('1234'),
            'name' => 'Alexander Cederblad'
        ]);
    }

}