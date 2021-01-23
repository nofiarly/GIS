<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $table = 'property';

    protected $primaryKey = 'id_property';

    public $timestamps = false;

    protected $fillable = [
        'nama_sekolah_dasar',
        'x',
        'y',
        'alamat_sekolah_dasar',
        'status_sekolah_dasar',
        'foto'
    ];

    protected $attributes = [
        'foto' => 'default.jpg'
    ];
}
