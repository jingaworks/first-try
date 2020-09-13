<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use \DateTimeInterface;

class Category extends Model
{
    public $table = 'categories';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'slug',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function categorySubcategories()
    {
        return $this->hasMany(Subcategory::class, 'category_id', 'id');
    }

    public function categoryProducts()
    {
        return $this->hasMany(Product::class, 'category_id', 'id');
    }

    public function showOnCategoryFeaturedProducts()
    {
        return $this->hasMany(FeaturedProduct::class, 'show_on_category_id', 'id');
    }
}
