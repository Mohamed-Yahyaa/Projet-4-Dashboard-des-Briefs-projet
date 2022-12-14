<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApprenantPreparationTache extends Model
{
    use HasFactory;
    protected $table = "apprenant_preparation_tache";
    public $timestamps= false;
    protected $fillable = [
    "Preparation_tache_id",
    "Apprenant_id",
    "Apprenant_P_Brief_id",
    "Etat",
    "date_debut",
    "date_fin"
    ];
}
