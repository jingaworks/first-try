<?php

namespace App\Models;

use App\Traits\MultiTenantModelTrait;
use Illuminate\Database\Eloquent\Model;
use \DateTimeInterface;

class FeaturedProduct extends Model
{
    use MultiTenantModelTrait;

    public $table = 'featured_products';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'active',
        'product_id',
        'profile_id',
        'show_on_region_id',
        'show_on_place_id',
        'show_on_category_id',
        'show_on_subcategory_id',
        'created_at',
        'views',
        'updated_at',
        'deleted_at',
        'created_by_id',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

    public function profile()
    {
        return $this->belongsTo(Profile::class, 'profile_id');
    }

    public function show_on_region()
    {
        return $this->belongsTo(Region::class, 'show_on_region_id');
    }

    public function show_on_place()
    {
        return $this->belongsTo(Place::class, 'show_on_place_id');
    }

    public function show_on_category()
    {
        return $this->belongsTo(Category::class, 'show_on_category_id');
    }

    public function show_on_subcategory()
    {
        return $this->belongsTo(Subcategory::class, 'show_on_subcategory_id');
    }

    public function created_by()
    {
        return $this->belongsTo(User::class, 'created_by_id');
    }
}
