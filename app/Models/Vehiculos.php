<?php
namespace App\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Models;

class Vehiculo extends Models
{
    use HasFactory;

    protected $fillable = ['tipos', 'categorias'];
}
