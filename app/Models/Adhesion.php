<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adhesion extends Model
{
    use HasFactory;

    public $fillable = [
        'nom', 'prenom', 'telephone', 'pays',
        'profession', 'email', 'connu_par',
        'statut', 'enregistre', 'commentaire',
        'statut_id','age','projet'
    ];

    public static function connu_par_value(): array
    {
        return [
            "reseau" => "Sur les réseaux sociaux",
            "leader" => "un leader a partage avec vous",
            "internet" => "internet",
            "autres" => "autres"
        ];
    }
}
