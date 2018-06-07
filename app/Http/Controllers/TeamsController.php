<?php

namespace App\Http\Controllers;

use App\Http\Models;

class TeamsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function teams()
    {
        return response()->json(Team::all());
    }

    public function team($id)
    {
        return 'olamundo teams';
    }

    //
}
