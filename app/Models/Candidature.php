<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
class Candidature extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable =[
    'user_id',
    'poste',
    'entreprise',
    'lieu',
    'lien_offre',
    'description',
    'statut',
    'priorite',
    'date_candidature',
    'fichier_path',
    'notes',
    ];

    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function entretiens():HasMany
    {
        return $this->hasMany(Entretien::class);
    }

    }
