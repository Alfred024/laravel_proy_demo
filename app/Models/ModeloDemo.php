<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModeloDemo extends Model
{
    use HasFactory;

    protected $table = 'modelo_demos';
    protected $fillable = ['nombre'];
}
