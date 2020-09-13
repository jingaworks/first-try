<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use \DateTimeInterface;

class Region extends Model
{
    public $table = 'regions';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'denj',
        'mnemonic',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function regionPlaces()
    {
        return $this->hasMany(Place::class, 'region_id', 'id');
    }

    public function regionProfiles()
    {
        return $this->hasMany(Profile::class, 'region_id', 'id');
    }

    public function regionAddresses()
    {
        return $this->hasMany(Address::class, 'region_id', 'id');
    }

    public function showOnRegionFeaturedProducts()
    {
        return $this->hasMany(FeaturedProduct::class, 'show_on_region_id', 'id');
    }
}
