<?php

namespace App\Models;

use App\Models\Clases;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Capitulos extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = 'idCapitulo';

    protected $fillable = [
        'nombreCapitulo',
        'idCurso'
    ];

    public function curso()
    {
        return $this->belongsTo(Curso::class);
    }

    public function clases()
    {
        return $this->hasMany(Clases::class, 'idCapitulo');
    }
}
