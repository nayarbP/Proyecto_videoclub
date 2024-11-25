<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    use HasFactory;

    protected $fillable = ['sexId', 'actNombre'];

    // Relación con Sexo
    public function sexo()
    {
        return $this->belongsTo(Sexo::class, 'sexId', 'sexId');
    }

    // Relación con ActorPelicula
    public function peliculas()
    {
        return $this->hasMany(ActorPelicula::class, 'actId', 'actId');
    }
}
