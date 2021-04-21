<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    // CRUD - Create/Store
    public function create () {
        return view('pages.createAnimal');
    }
    public function store (Request $request) {
        $animal = new Animal();
        $animal->genre = $request->genre;
        $animal->age = $request->age;
        $animal->save();
        return redirect()->route('home');
    }
    // CRUD - Show
    public function show (Animal $id) {
        $animal = $id;
        return view('pages.showAnimal', compact('animal'));
    }
    // CRUD - Edit/Update
    public function edit (Animal $id) {
        $animal = $id;
        return view('pages.editAnimal', compact('animal'));
    }
    public function update (Animal $id, Request $request) {
        $animal = $id;
        $animal->genre = $request->genre;
        $animal->age = $request->age;
        $animal->save();
        return redirect()->route('animalsList');
    }
}
