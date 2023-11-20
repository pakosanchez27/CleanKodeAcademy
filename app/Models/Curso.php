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
        'idEstado',
        'idUser',
        'create_at'
        // Otros campos que puedas asignar masivamente
    ];

    // Aquí puedes definir relaciones, atributos protegidos, etc
    public function usuario() {
        return $this->belongsTo(User::class, 'id'); // 'usuario_id' es la clave foránea en la tabla 'cursos'
    }

    public function capitulos()
    {
        return $this->hasMany(Capitulos::class);
    }

    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'idCategoria', 'idCategoria');
    }
}
