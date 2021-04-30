<?php
namespace App\Repositories;

use App\Models\Section;
use App\Repositories\Interfaces\SectionRepositoryInterface;

class SectionRepository implements SectionRepositoryInterface
{
    public function all()
    {
        return Section::all();
    }

    public function getByName($sectionName)
    {
        return Section::where('name', $sectionName)->get();
    }
}
