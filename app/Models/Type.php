<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;

    public function projects() { //Projects: Al plurale perché un tipo può essere associato a molti progetti

        
        return $this->hasMany(Project::class); //QUESTO PASSAGGIO CI SERVE PER METTERE IN RELAZIONE UNO-A-MOLTI DAL MODELLO TYPE AL MODELLO PROJECT
    }

}
