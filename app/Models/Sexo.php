<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sexo extends Model
{
    use HasFactory;

    protected $fillable = ['sexNombre'];

    // Relación con Actor
    public function actores()
    {
        return $this->hasMany(Actor::class, 'sexId', 'sexId');
    }
}
