<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CocktailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view ('guest.cocktails.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view ('guest.cocktails.show');
    }
}
