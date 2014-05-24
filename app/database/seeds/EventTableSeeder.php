<?php

class EventTableSeeder extends Seeder {

    public function run()
    {
        DB::table('events')->delete();

        EventModel::create([
            'name' => 'Volleyboll för mästare',
            'host' => 1,
            'description' => 'Ta med solkräm & egen boll!',
            'max_num_people' => 16,
            'num_people' => 0,
            'location' => 'Folkparken',
            'town' => 1,
            'private' => 0,
            'type' => 1
        ]);

        EventModel::create([
            'name' => 'Glassmöte',
            'host' => 1,
            'description' => 'Ta med kontanter!',
            'max_num_people' => 16,
            'num_people' => 0,
            'location' => 'Solsidan',
            'town' => 1,
            'private' => 0,
            'type' => 1
        ]);
    }
}
