<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
 
class Tailor extends Model
{
    use HasFactory;
    protected $table = 'tailor';
    protected $fillable = [
        'pelanggan',
        'testimoni',
    ];
}