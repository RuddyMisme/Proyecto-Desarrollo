<?php
namespace App\Http\Controllers;

use App\Models\Certificado;
use App\Models\Usuario;
use App\Models\Curso;
use Illuminate\Http\Request;

class CertificadoController extends Controller
{
    public function index()
    {
        return response()->json(Certificado::with(['usuario', 'curso'])->get());
    }

    public function create()
    {
        return view('certificados.create', ['usuarios' => Usuario::all(), 'cursos' => Curso::all()]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_usuario' => 'required|exists:usuarios,id_usuario',
            'id_curso' => 'required|exists:cursos,id_curso',
            'fecha_emision' => 'required|date',
            'estado_certificado' => 'required|in:Emitido,Cancelado'
        ]);

        $certificado = Certificado::create($request->all());
        return response()->json($certificado, 201);
    }

    public function show($id)
    {
        $certificado = Certificado::with(['usuario', 'curso'])->findOrFail($id);
        return response()->json($certificado);
    }

    public function edit($id)
    {
        $certificado = Certificado::findOrFail($id);
        return view('certificados.edit', ['certificado' => $certificado, 'usuarios' => Usuario::all(), 'cursos' => Curso::all()]);
    }

    public function update(Request $request, $id)
    {
        $certificado = Certificado::findOrFail($id);
        $certificado->update($request->all());
        return response()->json($certificado);
    }

    public function destroy($id)
    {
        $certificado = Certificado::findOrFail($id);
        $certificado->delete();
        return response()->json(null, 204);
    }
}

