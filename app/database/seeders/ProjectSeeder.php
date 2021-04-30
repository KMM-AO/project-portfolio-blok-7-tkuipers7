<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    protected $lorem = 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.';
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Project::create([
            'name' => 'Extreme Diving',
            'description' => $this->lorem,
            'image' => 'ExtremeDiving.png',
            'job' => 'Full-Stack'
        ]);

        Project::create([
            'name' => 'Nature',
            'description' => $this->lorem,
            'image' => 'Nature.png',
            'job' => 'Full-Stack'
        ]);
    }
}
