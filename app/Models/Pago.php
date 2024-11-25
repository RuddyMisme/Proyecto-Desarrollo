<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    use HasFactory;

    protected $table = 'pagos';
    protected $primaryKey = 'id_pago';
    protected $fillable = [
        'id_usuario', 
        'id_curso', 
        'monto', 
        'fecha_pago', 
        'metodo_pago', 
        'estado_pago'
    ];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'id_usuario');
    }

    public function curso()
    {
        return $this->belongsTo(Curso::class, 'id_curso');
    }
}
