<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formato extends Model
{
    use HasFactory;

    protected $fillable = ['forNombre'];

    // Relación con Pelicula
    public function peliculas()
    {
        return $this->hasMany(Pelicula::class, 'forId', 'forId');
    }
}
