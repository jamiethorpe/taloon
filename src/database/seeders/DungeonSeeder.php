<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DungeonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dungeons')->insert([
            'name' => 'Bandit Hideout',
            'level' => 1,
            'experience' => 100,
        ]);

        DB::table('dungeons')->insert([
            'name' => 'Goblin Cave',
            'level' => 2,
            'experience' => 200,
        ]);

        DB::table('dungeons')->insert([
            'name' => 'Crypt',
            'level' => 3,
            'experience' => 300,
        ]);

        DB::table('dungeons')->insert([
            'name' => 'Haunted Keep',
            'level' => 4,
            'experience' => 400,
        ]);

        DB::table('dungeons')->insert([
            'name' => 'Pits of Hell',
            'level' => 5,
            'experience' => 500,
        ]);
    }
}
