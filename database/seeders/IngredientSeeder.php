<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Ingredient;

class IngredientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ingredients =[
            'Rhum',
            'Mint',
            'Lime',
            'Sugar',
            'Soda',
            'Vodka',
            'Cranberry Juice',
            'Triple Sec',
            'Gin',
            'Campari',
            'Vermouth',
            'Orange',
            'Bitter',
            'Bourbon',
            'Ice',
            'Aperol',
            'Tonic',
            'Jägermeister',
            'Tequila',
        ];
            foreach ($ingredients as $ingredient) {
                $newIngredient = new Ingredient();
                $newIngredient->name = $ingredient;
                $newIngredient->save();
            }
    }
}
