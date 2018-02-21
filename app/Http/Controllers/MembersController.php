<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MembersController extends Controller
{
    public function index() {

    	$famous_coffee_drinkers = [
            'Søren Kierkegaard',
            'Honore de Balzac',
            'Theodore Roosevelt',
            'Voltaire',
            'Ludvig van Beethoven',
            'Johann Sebastian Bach'
        ];
        return view('members/index', compact('famous_coffee_drinkers') );
    	}

}
