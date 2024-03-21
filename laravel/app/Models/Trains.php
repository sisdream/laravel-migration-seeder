<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trains extends Model
{
  use HasFactory;

    protected $fillable = 
    [
        "id",
        "azienda",
        "stazione_partenza",
        "stazione_arrivo",
        "orario_partenza",
        "orario_arrivo",
        "codice_treno",
        "numero_carrozze",
        "in_orario",
        "cancellato",
    ];
}