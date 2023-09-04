<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CocktailConotroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return 'index';
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return 'show';
    }
}
