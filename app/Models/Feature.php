<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    protected $table = 'features';

    protected $primaryKey = 'id_feature';

    public $timestamps = false;

    protected $fillable = [
        'type', 'id_geometry', 'id_property'
    ];

    protected $attributes = [
        'type' => 'Feature'
    ];

    public function geometry()
    {
        return $this->belongsTo('App\Models\Geometry', 'id_geometry', 'id_geometry');
    }

    public function property()
    {
        return $this->belongsTo('App\Models\Property', 'id_property', 'id_property');
    }

    public function delete()
    {
        parent::delete();
        return
            Geometry::find($this->geometry->id_geometry)->delete() &&
            Property::find($this->property->id_property)->delete();
    }
}
