<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use \DateTimeInterface;

class Place extends Model
{
    public $table = 'places';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'denloc',
        'region_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function placeProfiles()
    {
        return $this->hasMany(Profile::class, 'place_id', 'id');
    }

    public function placeAddresses()
    {
        return $this->hasMany(Address::class, 'place_id', 'id');
    }

    public function showOnPlaceFeaturedProducts()
    {
        return $this->hasMany(FeaturedProduct::class, 'show_on_place_id', 'id');
    }

    public function region()
    {
        return $this->belongsTo(Region::class, 'region_id');
    }
}
