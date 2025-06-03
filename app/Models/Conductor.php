<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conductor extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'conductores';

    protected $fillable = ['nombre', 'ciudad', 'puntos'];
}
