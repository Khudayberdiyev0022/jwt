<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Fruit;
use Illuminate\Http\Request;

class FruitController extends Controller
{

    public function index()
    {
      $fruits = Fruit::all();

      return response()->json(['data' => $fruits], 200);
    }

    public function store(Request $request)
    {

    }

    public function show(Fruit $fruit)
    {
        //
    }

    public function update(Request $request, Fruit $fruit)
    {
        //
    }

    public function destroy(Fruit $fruit)
    {
        //
    }
}
