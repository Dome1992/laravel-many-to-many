<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

//IMPORTARE IL MODELS TECHNOLOGY
use App\Models\Technology;

//IMPORTARE IL MODELS PROJECT PERCHE VOGLIAMO COLLEGARLI 
use App\Models\Project;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Technology :: factory()
            -> count(10)
            -> create() 
            -> each(function($technology) {
                
                $projects = Project :: inRandomOrder() -> limit(3) -> get();

                $technology -> projects() -> attach($projects);
            });
    }
}
