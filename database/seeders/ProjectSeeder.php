<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

//IMPORTARE IL MODELS PROJECT
use App\Models\Project;

//IMPORTARE IL MODELS TYPE
use App\Models\Type;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // STO CREANDO  10 NUOVI ELEMENTI NELLA TABELLA PROJECTS DEL MIO DATABASE
        Project::factory()
            ->count(10)
            ->make()
            ->each(function($project) {

                $type = Type :: inRandomOrder() ->first();
                
                $project -> type() ->associate($type);
                $project -> save();
            });
    }
}
