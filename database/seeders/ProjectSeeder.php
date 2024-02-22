<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

//IMPORTARE IL MODELS PROJECT
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // STO CREANDO  20 NUOVI ELEMENTI NELLA TABELLA PROJECTS DEL MIO DATABASE
        Project::factory()->count(20)->create();
    }
}
