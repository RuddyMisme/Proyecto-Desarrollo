<?php
namespace App\Http\Controllers;

use App\Models\Area;
use Illuminate\Http\Request;

class AreaController extends Controller
{
    public function index()
    {
        return response()->json(Area::all());
    }

    public function create()
    {
        return view('areas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:100'
        ]);

        $area = Area::create($request->all());
        return response()->json($area, 201);
    }

    public function show($id)
    {
        $area = Area::findOrFail($id);
        return response()->json($area);
    }

    public function edit($id)
    {
        $area = Area::findOrFail($id);
        return view('areas.edit', compact('area'));
    }

    public function update(Request $request, $id)
    {
        $area = Area::findOrFail($id);
        $area->update($request->all());
        return response()->json($area);
    }

    public function destroy($id)
    {
        $area = Area::findOrFail($id);
        $area->delete();
        return response()->json(null, 204);
    }
}
