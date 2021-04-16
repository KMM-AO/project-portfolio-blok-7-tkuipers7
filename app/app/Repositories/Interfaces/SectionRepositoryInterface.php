<?php


namespace App\Repositories\Interfaces;


use App\Models\Section;

interface SectionRepositoryInterface
{
    public function all();

    public function getByName(Section $section);
}
