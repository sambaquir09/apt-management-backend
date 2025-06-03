<?php

namespace App\Models;

use Clickbar\Magellan\Data\Geometries\Geometry;
use Illuminate\Database\Eloquent\Model;

class GeojsonFile extends Model
{
    // Table name (optional if it matches the plural of the model name)
    protected $table = 'geojson_files';

    // Fillable attributes for mass assignment
    protected $fillable = [
        'name',
        'geometry',
        'geojson'
    ];

    // Cast the geometry column to a specific type (optional, depending on your spatial package)
    protected $casts = [
        'geometry' => Geometry::class,
        'geojson' => 'array', // Cast properties as an array
    ];
}