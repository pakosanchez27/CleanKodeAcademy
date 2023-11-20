<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clases extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $primaryKey = 'idClase';

    protected $fillable = [
        'nombreClase',
        'duracionClase',
        'descripcionClase',
        'videoClase',
        'recursoClase',
        'idCapitulo'
    ];

    public function capitulo()
    {
        return $this->belongsTo(Capitulo::class, 'idCapitulo');
    }
}
