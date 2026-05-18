<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Entretien extends Model
{
    use HasFactory,SoftDeletes;
    
    protected $fillable = [
        'candidature_id',
        'type',
        'date_heure',
        'resultat',
        'notes_preparation',

    ];

    public function candidature():BelongsTo
    {
        return $this->belongsTo(Candidature::class);
    }

}
