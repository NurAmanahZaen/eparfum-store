<?php

namespace App\Http\Controllers;
use App\Models\Perfume;
use Illuminate\Http\Request;

class PerfumeController extends Controller
{
    public function index()
    {
        return Perfume::all();
    }

    public function show($id)
    {
        return Perfume::findOrFail($id);
    }

    public function store(Request $request)
    {
        $perfume = Perfume::create($request->all());
        return response()->json($perfume, 201);
    }

    public function update(Request $request, $id)
    {
        $perfume = Perfume::findOrFail($id);
        $perfume->update($request->all());
        return response()->json($perfume, 200);
    }

    public function destroy($id)
    {
        $perfume = Perfume::findOrFail($id);
        $perfume->delete();
        return response()->json(null, 204);
    }
}
