<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;

    protected $table = 'areas';
    protected $primaryKey = 'id_area';
    protected $fillable = ['nombre'];

    public function cursos()
    {
        return $this->hasMany(Curso::class, 'id_area');
    }
}
