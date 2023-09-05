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
    public function index(Request  $request)
    {
        if ($request->has('search')){
            $cocktails = Cocktail::with('ingredients')->where('name', 'LIKE', '%' . $request->search . '%')->paginate(10);

        }
         else {
            $cocktails = Cocktail::with('ingredients')->paginate(10);
        }

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
    public function show(string $slug)
    {

        $cocktails = Cocktail::with('ingredients')->findOrFail($slug);

        return response()->json(
            [
                'success'=> true,
                'results' => $cocktails,
            ]
        );
    }
}
