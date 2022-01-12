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
        'cocktail_id'
    ];

    # La fonction pour créer la relation avec Cocktail aura le nom de la propriété.
    public function cocktail()
    {
        // Ce côté de la relation est : One
        return $this->belongsTo('App\Models\Cocktail');
    }
}
