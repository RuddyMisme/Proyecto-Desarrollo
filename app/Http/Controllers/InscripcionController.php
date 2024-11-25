<?php
namespace App\Http\Controllers;

use App\Models\Inscripcion;
use App\Models\Usuario;
use App\Models\Curso;
use Illuminate\Http\Request;

class InscripcionController extends Controller
{
    public function index()
    {
        return response()->json(Inscripcion::with(['usuario', 'curso'])->get());
    }

    public function create()
    {
        return view('inscripciones.create', ['usuarios' => Usuario::all(), 'cursos' => Curso::all()]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_usuario' => 'required|exists:usuarios,id_usuario',
            'id_curso' => 'required|exists:cursos,id_curso',
            'fecha_inscripcion' => 'nullable|date'
        ]);

        $inscripcion = Inscripcion::create($request->all());
        return response()->json($inscripcion, 201);
    }

    public function show($id)
    {
        $inscripcion = Inscripcion::with(['usuario', 'curso'])->findOrFail($id);
        return response()->json($inscripcion);
    }

    public function edit($id)
    {
        $inscripcion = Inscripcion::findOrFail($id);
        return view('inscripciones.edit', ['inscripcion' => $inscripcion, 'usuarios' => Usuario::all(), 'cursos' => Curso::all()]);
    }

    public function update(Request $request, $id)
    {
        $inscripcion = Inscripcion::findOrFail($id);
        $inscripcion->update($request->all());
        return response()->json($inscripcion);
    }

    public function destroy($id)
    {
        $inscripcion = Inscripcion::findOrFail($id);
        $inscripcion->delete();
        return response()->json(null, 204);
    }
}
