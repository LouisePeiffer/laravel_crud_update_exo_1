<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index (){
        return view('home');
    }
    public function animalsList () {
        $allAnimals = Animal::all();
        return view('pages.animalsList', compact('allAnimals'));
    }
}
