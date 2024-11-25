<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Socio extends Model
{
    use HasFactory;

    protected $fillable = ['socCedula', 'socNombre', 'socDireccion', 'socTelefono', 'socCorreo'];

    // Relación con Alquiler
    public function alquileres()
    {
        return $this->hasMany(Alquiler::class, 'socId', 'socId');
    }
}
