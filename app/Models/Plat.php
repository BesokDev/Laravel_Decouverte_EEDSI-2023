<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plat extends Model
{
    use HasFactory;

    // La propriété $fillable autorise le 'mass assignment' pour le model et pour l'insertion en masse de données en BDD.
    protected $fillable = [
        'title',
        'content',
    ];
}
