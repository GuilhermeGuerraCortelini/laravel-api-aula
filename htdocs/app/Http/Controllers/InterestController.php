<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreInterestRequest;
use App\Models\Interest;
use Illuminate\Http\Request;

class InterestController extends Controller
{
    public function list(Request $request){
        return Interest::paginate(15);
    }
    public function store(StoreInterestRequest $people) { // armazenar os dados 
        $newPeople = Interest::create($people->all());
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
