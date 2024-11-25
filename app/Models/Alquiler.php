<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alquiler extends Model
{
    use HasFactory;

    protected $fillable = ['socId', 'pelId', 'alqFechaDesde', 'alqFechaHasta', 'alqValor', 'alqFechaEntrega'];

    // Relación con Socio
    public function socio()
    {
        return $this->belongsTo(Socio::class, 'socId', 'socId');
    }

    // Relación con Pelicula
    public function pelicula()
    {
        return $this->belongsTo(Pelicula::class, 'pelId', 'pelId');
    }
}
