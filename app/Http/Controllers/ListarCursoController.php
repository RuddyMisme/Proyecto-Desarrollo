<?php
namespace App\Http\Controllers;

use App\Models\ListarCurso;
use App\Models\Usuario;
use App\Models\Curso;
use Illuminate\Http\Request;

class ListarCursoController extends Controller
{
    public function index()
    {
        return response()->json(ListarCurso::with(['usuario', 'curso'])->get());
    }

    public function create()
    {
        return view('listar_cursos.create', ['usuarios' => Usuario::all(), 'cursos' => Curso::all()]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_usuario' => 'required|exists:usuarios,id_usuario',
            'id_curso' => 'required|exists:cursos,id_curso',
            'nombre_rol' => 'required|in:En Curso,Terminado'
        ]);

        $listarCurso = ListarCurso::create($request->all());
        return response()->json($listarCurso, 201);
    }

    public function show($id)
    {
        $listarCurso = ListarCurso::with(['usuario', 'curso'])->findOrFail($id);
        return response()->json($listarCurso);
    }

    public function edit($id)
    {
        $listarCurso = ListarCurso::findOrFail($id);
        return view('listar_cursos.edit', ['listarCurso' => $listarCurso, 'usuarios' => Usuario::all(), 'cursos' => Curso::all()]);
    }

    public function update(Request $request, $id)
    {
        $listarCurso = ListarCurso::findOrFail($id);
        $listarCurso->update($request->all());
        return response()->json($listarCurso);
    }

    public function destroy($id)
    {
        $listarCurso = ListarCurso::findOrFail($id);
        $listarCurso->delete();
        return response()->json(null, 204);
    }
}
