<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

//IMPORTARE IL MODELS TYPE
use App\Models\Type;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // STO CREANDO 5 NUOVI ELEMENTI NELLA TABELLA TYPES DEL MIO DATABASE
        Type::factory() ->count(4)->create();
    }
}
