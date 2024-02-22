<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;

    public function projects() {

        return $this->hasMany(Project::class); //QUESTO PASSAGGIO CI SERVE PER METTERE IN RELAZIONE UNO-A-MOLTI CON PROJECT
    }

}
