<?php
namespace App\Http\Controllers;

use App\Models\Pago;
use App\Models\Usuario;
use App\Models\Curso;
use Illuminate\Http\Request;

class PagoController extends Controller
{
    public function index()
    {
        return response()->json(Pago::with(['usuario', 'curso'])->get());
    }

    public function create()
    {
        return view('pagos.create', ['usuarios' => Usuario::all(), 'cursos' => Curso::all()]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_usuario' => 'required|exists:usuarios,id_usuario',
            'id_curso' => 'required|exists:cursos,id_curso',
            'monto' => 'required|numeric',
            'fecha_pago' => 'required|date',
            'metodo_pago' => 'required|in:Efectivo,Tarjeta,Transferencia',
            'estado_pago' => 'required|in:Pendiente,Pagado,Cancelado'
        ]);

        $pago = Pago::create($request->all());
        return response()->json($pago, 201);
    }

    public function show($id)
    {
        $pago = Pago::with(['usuario', 'curso'])->findOrFail($id);
        return response()->json($pago);
    }

    public function edit($id)
    {
        $pago = Pago::findOrFail($id);
        return view('pagos.edit', ['pago' => $pago, 'usuarios' => Usuario::all(), 'cursos' => Curso::all()]);
    }

    public function update(Request $request, $id)
    {
        $pago = Pago::findOrFail($id);
        $pago->update($request->all());
        return response()->json($pago);
    }

    public function destroy($id)
    {
        $pago = Pago::findOrFail($id);
        $pago->delete();
        return response()->json(null, 204);
    }
}
