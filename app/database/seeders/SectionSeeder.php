<?php

namespace Database\Seeders;

use App\Models\Section;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SectionSeeder extends Seeder
{
    protected $lorem = 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.';
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Section::create([
            'name' => 'home',
            'content' => $this->lorem,
        ]);

        Section::create([
            'name' => 'about',
            'Title' => 'About',
            'content' => $this->lorem,
        ]);

        Section::create([
            'name' => 'projects',
            'title' => 'My latest projects',
        ]);

        Section::create([
            'name' => 'skills',
            'title' => 'Skills',
        ]);
    }
}
