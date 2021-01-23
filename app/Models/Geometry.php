<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Geometry extends Model
{
    protected $table = 'geometry';

    protected $primaryKey = 'id_geometry';

    public $timestamps = false;

    protected $casts = [
        'coordinates' => 'array'
    ];

    protected $fillable = [
        'coordinates'
    ];

    protected $attributes = [
        'type' => 'Point'
    ];
}
