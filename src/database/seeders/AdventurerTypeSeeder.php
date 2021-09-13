<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdventurerTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('adventurer_types')->insert([
            'class' => 'Warrior',
            'ability_name' => 'Slash',
            'ability_description' => 'Slashes enemies with the equipped weapon.',
            'sprite' => 'warrior.png',
            'cost' => 10
        ]);

        DB::table('adventurer_types')->insert([
            'class' => 'Cleric',
            'ability_name' => 'Heal',
            'ability_description' => 'Greatly improves the odds that your adventurers will return from the dungeon.',
            'sprite' => 'cleric.png',
            'cost' => 100
        ]);
    }
}
