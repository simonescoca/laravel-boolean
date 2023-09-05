<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cocktail extends Model
{
    use HasFactory;

    protected $table = "cocktails";

    protected $fillable = [
        'name',
        'image',
        'alcoholic_level',
        'category',
        'with_ice',
        'glass_type',
        'crafting_difficulty',
        'crafting_time',
        'price'
    ];

    public function ingredients()
    {
        return $this->belongsToMany(Ingredient::class);
    }
}
