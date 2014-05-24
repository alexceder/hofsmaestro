<?php

class TypeTableSeeder extends Seeder {

    public function run()
    {
        DB::table('types')->delete();

        Type::create([
            'slug' => 'sport',
            'name' => 'Sport',
        ]);
    }

}