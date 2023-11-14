<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $table = 'cursos'; // Cambiado el nombre de la tabla
    protected $primaryKey = 'idCurso';
    public $timestamps = true;

    protected $fillable = [
        'nombreCurso',
        'descripcionCurso',
        'FotoCurso',
        'videoIntro',
        'idCategoria'
        // Otros campos que puedas asignar masivamente
    ];

    // Aquí puedes definir relaciones, atributos protegidos, etc
    
    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'idCategoria', 'idCategoria');
    }
}
