<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index (Request $request) {
        $users = [
            ['id' => '1', 'nom' => 'jamaoui', 'metier' => 'front end developper'],
            ['id' => '2', 'nom' => 'elidrisse', 'metier' => 'back end developper'],
            ['id' => '3', 'nom' => 'motawakil', 'metier' => 'data base developper'],
        ];
        return view('home', compact('users'));
    }
}

