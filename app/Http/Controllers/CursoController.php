<?php
namespace App\Http\Controllers;

use App\Models\Curso;
use App\Models\Area;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index()
    {
        return response()->json(Curso::with('area')->get());
    }

    public function create()
    {
        return view('cursos.create', ['areas' => Area::all()]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_area' => 'required|exists:areas,id_area',
            'nombre' => 'required|string|max:100',
            'descripcion' => 'nullable|string',
            'duracion' => 'required|string|max:100',
            'fecha_inicio' => 'nullable|date',
            'fecha_fin' => 'nullable|date'
        ]);

        $curso = Curso::create($request->all());
        return response()->json($curso, 201);
    }

    public function show($id)
    {
        $curso = Curso::with('area')->findOrFail($id);
        return response()->json($curso);
    }

    public function edit($id)
    {
        $curso = Curso::findOrFail($id);
        return view('cursos.edit', ['curso' => $curso, 'areas' => Area::all()]);
    }

    public function update(Request $request, $id)
    {
        $curso = Curso::findOrFail($id);
        $curso->update($request->all());
        return response()->json($curso);
    }

    public function destroy($id)
    {
        $curso = Curso::findOrFail($id);
        $curso->delete();
        return response()->json(null, 204);
    }
}

