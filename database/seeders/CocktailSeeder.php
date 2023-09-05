<?php

namespace Database\Seeders;

use App\Models\Cocktail;
use App\Models\Ingredient;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

class CocktailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $ingredientIds = Ingredient::all()->pluck('id');
        $cocktails =[
            [
                "name" => "Zombie cocktail",
                "image" => "https://staticcookist.akamaized.net/wp-content/uploads/sites/21/2020/06/zombie-cocktail-1200x675.jpg",
                "alcoholic_level" => 3,
                "type" => "Sweet",
                "with_ice" => true,
                "glass_type" => "Cocktail Glass",
                "crafting_difficulty" => 2.2,
                "crafting_time" => 5,
                "price" => 5.99,
            ],[
                "name" => "Bronx Cocktail",
                "image" => "https://staticcookist.akamaized.net/wp-content/uploads/sites/21/2021/06/Bronx-cocktail-1200x675.jpg",
                "alcoholic_level" => 4,
                "type" => "Sour",
                "with_ice" => false,
                "glass_type" => "Martini Cocktail Glass",
                "crafting_difficulty" => 2.4,
                "crafting_time" => 10,
                "price" => 7.99,
            ],[
                "name" => "Negroni",
                "image" => "https://staticcookist.akamaized.net/wp-content/uploads/sites/21/2017/04/negroni-cocktail-ricetta-1200x675.jpg",
                "alcoholic_level" => 5,
                "type" => "Sour",
                "with_ice" => true,
                "glass_type" => "Short Cocktail Glass",
                "crafting_difficulty" => 2.5,
                "crafting_time" => 5,
                "price" => 5.99,
            ],[
                "name" => "Pink Lady",
                "image" => "https://staticcookist.akamaized.net/wp-content/uploads/sites/21/2021/07/Pink-Lady-cocktail-1200x675.jpg",
                "alcoholic_level" => 3,
                "type" => "Sweet",
                "with_ice" => true,
                "glass_type" => "Martini Cocktail Glass",
                "crafting_difficulty" => 2.2,
                "crafting_time" => 5,
                "price" => 5.99,
            ],[
                "name" => "Martinez",
                "image" => "https://staticcookist.akamaized.net/wp-content/uploads/sites/21/2021/06/Martinez-cocktail-1200x675.jpg",
                "alcoholic_level" => 2,
                "type" => "Sour",
                "with_ice" => false,
                "glass_type" => "Round Cocktail Glass",
                "crafting_difficulty" => 2.4,
                "crafting_time" => 5,
                "price" => 6.99,
            ],[
                "name" => "Manhattan",
                "image" => "https://staticcookist.akamaized.net/wp-content/uploads/sites/21/2023/01/Manhattan-cocktail.jpg",
                "alcoholic_level" => 5,
                "type" => "Sour",
                "with_ice" => true,
                "glass_type" => "Round Cocktail Glass",
                "crafting_difficulty" => 3.0,
                "crafting_time" => 5,
                "price" => 6.99,
            ],[
                "name" => "Old Fashioned",
                "image" => "https://staticcookist.akamaized.net/wp-content/uploads/sites/21/2018/08/old-fashioned.jpg",
                "alcoholic_level" => 4,
                "type" => "Sweet",
                "with_ice" => true,
                "glass_type" => "Short Cocktail Glass",
                "crafting_difficulty" => 3.1,
                "crafting_time" => 5,
                "price" => 6.99,
            ],[
                "name" => "Daiquiri",
                "image" => "https://staticcookist.akamaized.net/wp-content/uploads/sites/21/2017/07/daiquiri.jpg",
                "alcoholic_level" => 3,
                "type" => "Sweet",
                "with_ice" => true,
                "glass_type" => "Round Cocktail Glass",
                "crafting_difficulty" => 3.0,
                "crafting_time" => 5,
                "price" => 7.99,
            ],[
                "name" => "Margarita",
                "image" => "https://staticcookist.akamaized.net/wp-content/uploads/sites/21/2023/06/Margarita-11-1200x675.jpg",
                "alcoholic_level" => 3,
                "type" => "Sweet",
                "with_ice" => true,
                "glass_type" => "Martini Cocktail Glass",
                "crafting_difficulty" => 2.3,
                "crafting_time" => 5,
                "price" => 7.99,
            ]
        ];

        foreach ($cocktails as $cocktail){
            $newCocktail = new Cocktail();
            $newCocktail->name = $cocktail['name'];
            $newCocktail->image = $cocktail['image'];
            $newCocktail->alcoholic_level = $cocktail['alcoholic_level'];
            $newCocktail->type = $cocktail['type'];
            $newCocktail->with_ice = $cocktail['with_ice'];
            $newCocktail->glass_type = $cocktail['glass_type'];
            $newCocktail->crafting_difficulty = $cocktail['crafting_difficulty'];
            $newCocktail->crafting_time = $cocktail['crafting_time'];
            $newCocktail->price = $cocktail['price'];
            $newCocktail->slug = Str::of($newCocktail->name)->slug('-');
            $newCocktail->save();
            $newCocktail->slug = Str::of("$newCocktail->id " . $newCocktail->name)->slug('-');
            $newCocktail->save();

            $newCocktail->ingredients()->sync([$faker->randomElement($ingredientIds),$faker->randomElement($ingredientIds),$faker->randomElement($ingredientIds),$faker->randomElement($ingredientIds)]);
        };
    }
}
