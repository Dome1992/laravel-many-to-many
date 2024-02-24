<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    public function type() { //TYPE: Al singolare perché un progetto può avere un solo tipo

        // DEFINISCE UNA REAZIONE "uno a molti" TRA IL MODELLO CORRENTE PROJECT ED IL MODELLO TYPE
        return $this -> belongsTo(Type :: class);
    }
}
