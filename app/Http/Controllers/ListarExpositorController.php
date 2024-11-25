<?php
namespace App\Http\Controllers;

use App\Models\ListarExpositor;
use App\Models\Usuario;
use App\Models\Curso;
use Illuminate\Http\Request;

class ListarExpositorController extends Controller
{
    public function index()
    {
        return response()->json(ListarExpositor::with(['usuario', 'curso'])->get());
    }

    public function create()
    {
        return view('listar_expositores.create', ['usuarios' => Usuario::all(), 'cursos' => Curso::all()]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_usuario' => 'required|exists:usuarios,id_usuario',
            'id_curso' => 'required|exists:cursos,id_curso'
        ]);

        $listarExpositor = ListarExpositor::create($request->all());
        return response()->json($listarExpositor, 201);
    }

    public function show($id)
    {
        $listarExpositor = ListarExpositor::with(['usuario', 'curso'])->findOrFail($id);
        return response()->json($listarExpositor);
    }

    public function edit($id)
    {
        $listarExpositor = ListarExpositor::findOrFail($id);
        return view('listar_expositores.edit', ['listarExpositor' => $listarExpositor, 'usuarios' => Usuario::all(), 'cursos' => Curso::all()]);
    }

    public function update(Request $request, $id)
    {
        $listarExpositor = ListarExpositor::findOrFail($id);
        $listarExpositor->update($request->all());
        return response()->json($listarExpositor);
    }

    public function destroy($id)
    {
        $listarExpositor = ListarExpositor::findOrFail($id);
        $listarExpositor->delete();
        return response()->json(null, 204);
    }
}

