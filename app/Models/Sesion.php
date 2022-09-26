<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sesion extends Model
{
    use HasFactory;
    public $timestammps=false;
    protected $fillable = ['nombre', 'correo', 'teapeuta', 'fecha', 'costo'];
}
