<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $table = 'usuarios';
    protected $primaryKey = 'id_usuario';
    protected $fillable = [
        'nombre', 
        'apellido_p', 
        'apellido_m', 
        'estado', 
        'carnet', 
        'expedido', 
        'fecha_nac', 
        'telefono', 
        'nombre_rol', 
        'nombre_area'
    ];

    public function inscripciones()
    {
        return $this->hasMany(Inscripcion::class, 'id_usuario');
    }

    public function pagos()
    {
        return $this->hasMany(Pago::class, 'id_usuario');
    }

    public function certificados()
    {
        return $this->hasMany(Certificado::class, 'id_usuario');
    }
}
