<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Coffee;

class CoffeeController extends Controller
{
	public function show(Coffee $coffee)
    {
    //    Query builder syntax
    //     $coffees = DB::table('coffees')->get();

    //     Eloquent syntax

        return view('coffees.show', compact('coffee'));
    }

    public function showCoffees()
    {
    //    Query builder syntax
    //     $coffees = DB::table('coffees')->get();

    //     Eloquent syntax
        $coffees =  Coffee::all();

        return view('coffees.index', compact('coffees'));
    }

}
