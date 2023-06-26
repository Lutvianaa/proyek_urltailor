<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
 
class Rumahjahit extends Model
{
    use HasFactory;
    protected $table = 'rumahjahit';
    protected $fillable = [
        'pelanggan',
        'testimoni',
    ];
}