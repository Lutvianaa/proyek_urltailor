<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
 
class Star extends Model
{
    use HasFactory;
    protected $table = 'star';
    protected $fillable = [
        'pelanggan',
        'testimoni',
    ];
}