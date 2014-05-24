<?php

class TownTableSeeder extends Seeder {

    public function run()
    {
        DB::table('towns')->delete();

        Town::create([
            'slug' => 'se-norrkoping',
            'name' => 'Norrköping'
        ]);
    }

}