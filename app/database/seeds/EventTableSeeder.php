<?php

class EventTableSeeder extends Seeder {

    public function run()
    {
        DB::table('events')->delete();

        DB::table('events')->insert([
            'name' => 'Volleyboll för mästare',
            'host' => 1,
            'description' => 'Ta med solkräm & egen boll!',
            'num_people' => 16,
            'location' => 'Folkparken',
            'town' => 1,
            'private' => 0,
            'type' => 1
        ]);
    }
}
