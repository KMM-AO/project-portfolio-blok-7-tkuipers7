<?php

namespace Database\Seeders;

use App\Models\Section;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Section::create([
            'name' => 'landing',
            'content' => 'this is the landing page'
        ]);

        Section::create([
            'name' => 'about',
            'Title' => 'About',
            'content' => 'this is the landing page'
        ]);

        Section::create([
            'name' => 'projects',
            'title' => 'My latest projects',
            'content' => 'this is the landing page'
        ]);

        Section::create([
            'name' => 'skills',
            'title' => 'Skills',
            'content' => 'this is the skill page'
        ]);
    }
}
