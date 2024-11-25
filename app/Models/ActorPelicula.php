<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActorPelicula extends Model
{
    use HasFactory;

    protected $fillable = ['actId', 'pelId', 'aplPapel'];

    // Relación con Actor
    public function actor()
    {
        return $this->belongsTo(Actor::class, 'actId', 'actId');
    }

    // Relación con Pelicula
    public function pelicula()
    {
        return $this->belongsTo(Pelicula::class, 'pelId', 'pelId');
    }
}
