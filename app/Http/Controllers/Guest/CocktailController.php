<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cocktail;

class CocktailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $cocktails = Cocktail::all();

        return response()->json(
            [
                'success'=> true,
                'results' => $cocktails,
            ]
        );
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view ('guest.cocktails.show');
    }
}
