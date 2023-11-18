<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{

    protected $primaryKey = 'idCurso';
    protected $fillable = [
        'nombreCurso',
        'descripcionCurso',
        'FotoCurso',
        'videoIntro',
        'idCategoria',
        'create_at'
        // Otros campos que puedas asignar masivamente
    ];

    // Aquí puedes definir relaciones, atributos protegidos, etc
    
    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'idCategoria', 'idCategoria');
    }
}
