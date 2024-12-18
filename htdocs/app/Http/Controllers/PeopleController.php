<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePeopleRequest;
use App\Models\People;
use Illuminate\Http\Request;

class PeopleController extends Controller
{
    public function list(Request $request){
        return People::with('interests')->paginate(15);
    }
    public function store(StorePeopleRequest $people) { // armazenar os dados 
        $newPeople = People::create($people->all());
        if($newPeople){
            return response()->json([
                'massage' => 'Nova pessoa criada com sucesso.', 'people' => $newPeople,
            ]);
        } else {
            return response()->json([
                'massage' => 'Deu ruim. Te vira para descobrir o que aconteceu'
            ], 422);
        }
    }
}
