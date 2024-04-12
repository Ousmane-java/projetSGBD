<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Syllabus extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'syllabus';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'contenu',
        'nombreHeures',
        'objectif',
        'titre',
        'evaluation',
        'nombreHeure',
        'dateCC',
        'dateDS',
        'resource',
        'politiqueCours',
    ];


    public function user(): BelongsTo
{ 
    return $this->belongsTo(User::class); 
}
}
