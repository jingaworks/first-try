<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use \DateTimeInterface;

class Subcategory extends Model
{
    public $table = 'subcategories';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'slug',
        'category_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function subcategoryProducts()
    {
        return $this->hasMany(Product::class, 'subcategory_id', 'id');
    }

    public function showOnSubcategoryFeaturedProducts()
    {
        return $this->hasMany(FeaturedProduct::class, 'show_on_subcategory_id', 'id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
