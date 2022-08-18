<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory, Sluggable;

    protected $fillable = [
        'name',
        'slug',
        'short_description',
        'description', 
        'regular_price',
        'onsale_price',
        'sku',
        'featured',
        'quantity',
        'image',
        'featured_image',
        'images',
        'category_id',
        'brand_id',
        'status',
        'size'

        
    ];


        /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }


    public function category()
    {
        return $this->belongsTo(Category::class);
    }


    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function scopeSearch($query, $search_text)
    {
        $search_text = "%$search_text%";
        $query->where(function($query) use ($search_text){
            $query->where('name', 'like', $search_text)
                ->orWhere('regular_price', 'like', $search_text)
                ->orWhere('sku', 'like', $search_text)
                ->orWhereHas('category', function($query) use ($search_text){
                    $query->where('name','like', $search_text);
                })
                ->orWhereHas('brand', function($query) use ($search_text){
                    $query->where('name','like', $search_text);
                });
        });
    }
}
