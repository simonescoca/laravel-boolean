<?php

namespace Database\Seeders;

use App\Models\Cocktail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CocktailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cocktails =[
            [
                'name' => 'Zombie cocktail',
                'image' => 'https://staticcookist.akamaized.net/wp-content/uploads/sites/21/2020/06/zombie-cocktail-1200x675.jpg',
                'alcoholic_level' => 3,
                'category' => 'Sweet',
                'with_ice' => true,
                'glass_type' => 'Cocktail Glass',
                'crafting_difficulty' => 'Easy',
                'crafting_time' => 5,
                'price' => 5.99,
            ],[
                'name' => 'Bronx Cocktail',
                'image' => 'https://staticcookist.akamaized.net/wp-content/uploads/sites/21/2021/06/Bronx-cocktail-1200x675.jpg',
                'alcoholic_level' => 4,
                'category' => 'Sour',
                'with_ice' => false,
                'glass_type' => 'Martini Cocktail Glass',
                'crafting_difficulty' => 'Easy',
                'crafting_time' => 10,
                'price' => 7.99,
            ],[
                'name' => 'Negroni',
                'image' => 'https://staticcookist.akamaized.net/wp-content/uploads/sites/21/2017/04/negroni-cocktail-ricetta-1200x675.jpg',
                'alcoholic_level' => 5,
                'category' => 'Sour',
                'with_ice' => true,
                'glass_type' => 'Short Cocktail Glass',
                'crafting_difficulty' => 'Easy',
                'crafting_time' => 5,
                'price' => 5.99,
            ],[
                'name' => 'Pink Lady',
                'image' => 'https://staticcookist.akamaized.net/wp-content/uploads/sites/21/2021/07/Pink-Lady-cocktail-1200x675.jpg',
                'alcoholic_level' => 3,
                'category' => 'Sweet',
                'with_ice' => true,
                'glass_type' => 'Martini Cocktail Glass',
                'crafting_difficulty' => 'Easy',
                'crafting_time' => 5,
                'price' => 5.99,
            ],[
                'name' => 'Martinez',
                'image' => 'https://staticcookist.akamaized.net/wp-content/uploads/sites/21/2021/06/Martinez-cocktail-1200x675.jpg',
                'alcoholic_level' => 2,
                'category' => 'Sour',
                'with_ice' => false,
                'glass_type' => 'Round Cocktail Glass',
                'crafting_difficulty' => 'Easy',
                'crafting_time' => 5,
                'price' => 6.99,
            ],[
                'name' => 'Manhattan',
                'image' => 'https://staticcookist.akamaized.net/wp-content/uploads/sites/21/2023/01/Manhattan-cocktail.jpg',
                'alcoholic_level' => 5,
                'category' => 'Sour',
                'with_ice' => true,
                'glass_type' => 'Round Cocktail Glass',
                'crafting_difficulty' => 'Easy',
                'crafting_time' => 5,
                'price' => 6.99,
            ],[
                'name' => 'Old Fashioned',
                'image' => 'https://staticcookist.akamaized.net/wp-content/uploads/sites/21/2018/08/old-fashioned.jpg',
                'alcoholic_level' => 4,
                'category' => 'Sweet',
                'with_ice' => true,
                'glass_type' => 'Short Cocktail Glass',
                'crafting_difficulty' => 'Easy',
                'crafting_time' => 5,
                'price' => 6.99,
            ],[
                'name' => 'Daiquiri',
                'image' => 'https://staticcookist.akamaized.net/wp-content/uploads/sites/21/2017/07/daiquiri.jpg',
                'alcoholic_level' => 3,
                'category' => 'Sweet',
                'with_ice' => true,
                'glass_type' => 'Round Cocktail Glass',
                'crafting_difficulty' => 'Easy',
                'crafting_time' => 5,
                'price' => 7.99,
            ],[
                'name' => 'Margarita',
                'image' => 'https://staticcookist.akamaized.net/wp-content/uploads/sites/21/2023/06/Margarita-11-1200x675.jpg',
                'alcoholic_level' => 3,
                'category' => 'Sweet',
                'with_ice' => true,
                'glass_type' => 'Martini Cocktail Glass',
                'crafting_difficulty' => 'Easy',
                'crafting_time' => 5,
                'price' => 7.99,
            ]
        ];

        foreach ($cocktails as $cocktail){
            $newCocktail = new Cocktail();
            $newCocktail->name = $cocktail['name'];
            $newCocktail->image = $cocktail['image'];
            $newCocktail->alcoholic_level = $cocktail['alcoholic_level'];
            $newCocktail->category = $cocktail['category'];
            $newCocktail->with_ice = $cocktail['with_ice'];
            $newCocktail->glass_type = $cocktail['glass_type'];
            $newCocktail->crafting_difficulty = $cocktail['crafting_difficulty'];
            $newCocktail->crafting_time = $cocktail['crafting_time'];
            $newCocktail->price = $cocktail['price'];
            $newCocktail->save();
        };
    }
}
