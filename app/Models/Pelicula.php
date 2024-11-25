<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelicula extends Model
{
    use HasFactory;

    protected $fillable = ['genId', 'dirId', 'forId', 'pelNombre', 'pelCosto', 'pelFechaEstreno'];

    // Relación con Genero
    public function genero()
    {
        return $this->belongsTo(Genero::class, 'genId', 'genId');
    }

    // Relación con Director
    public function director()
    {
        return $this->belongsTo(Director::class, 'dirId', 'dirId');
    }

    // Relación con Formato
    public function formato()
    {
        return $this->belongsTo(Formato::class, 'forId', 'forId');
    }

    // Relación con ActorPelicula
    public function actores()
    {
        return $this->hasMany(ActorPelicula::class, 'pelId', 'pelId');
    }

    // Relación con Alquiler
    public function alquileres()
    {
        return $this->hasMany(Alquiler::class, 'pelId', 'pelId');
    }
}
