<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    protected $fillable = [
        'title_product',
        'price_product',
        'description_product',
        'stock_quantity',
        'size_product',
        'category_id',
        'brand_id',
        'gender',
        'origin',
        'shipping_time',
        'text_product',
    ];
}
