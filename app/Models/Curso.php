<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    protected $table = 'cursos';
    protected $primaryKey = 'id_curso';
    protected $fillable = [
        'id_area', 
        'nombre', 
        'descripcion', 
        'duracion', 
        'fecha_inicio', 
        'fecha_fin'
    ];

    public function area()
    {
        return $this->belongsTo(Area::class, 'id_area');
    }

    public function inscripciones()
    {
        return $this->hasMany(Inscripcion::class, 'id_curso');
    }
}
