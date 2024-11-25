<?php
namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index()
    {
        return response()->json(Usuario::all());
    }

    public function create()
    {
        // Devuelve una vista para crear un nuevo usuario (si usas vistas en lugar de API)
        return view('usuarios.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:50',
            'apellido_p' => 'required|string|max:50',
            'apellido_m' => 'required|string|max:50',
            'estado' => 'required|in:1,0',
            'carnet' => 'required|string|max:50|unique:usuarios',
            'expedido' => 'required|in:BN,CH,CB,LP,OR,PA,PT,SC,TJ',
            'fecha_nac' => 'nullable|date',
            'telefono' => 'nullable|string|max:20',
            'nombre_rol' => 'required|in:Usuario,Expositor',
            'nombre_area' => 'required|in:Docente,Administrativo,Externo,Estudiante'
        ]);

        $usuario = Usuario::create($request->all());
        return response()->json($usuario, 201);
    }

    public function show($id)
    {
        $usuario = Usuario::findOrFail($id);
        return response()->json($usuario);
    }

    public function edit($id)
    {
        $usuario = Usuario::findOrFail($id);
        // Devuelve una vista para editar un usuario (si usas vistas)
        return view('usuarios.edit', compact('usuario'));
    }

    public function update(Request $request, $id)
    {
        $usuario = Usuario::findOrFail($id);
        $usuario->update($request->all());
        return response()->json($usuario);
    }

    public function destroy($id)
    {
        $usuario = Usuario::findOrFail($id);
        $usuario->delete();
        return response()->json(null, 204);
    }
}
