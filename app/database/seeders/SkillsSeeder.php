<?php

namespace Database\Seeders;

use App\Models\Skill;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class SkillsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Skill::create([
            'name' => 'PHP',
            'level' => 8
        ]);

        Skill::create([
            'name' => 'HTML',
            'level' => 8
        ]);

        Skill::create([
            'name' => 'CSS',
            'level' => 8
        ]);

        Skill::create([
            'name' => 'Java',
            'level' => 8
        ]);

        Skill::create([
            'name' => 'JavaScript',
            'level' => 8
        ]);
    }
}
