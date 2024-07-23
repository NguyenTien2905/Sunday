<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'sku',
        'img_thumnail',
        'price_regular',
        'price_sale',
        'discription',
        'content',
        'quantity',
        'views',
        'import_date',
        'category_id',
        'is_type',
        'is_new',
        'is_hot',
        'is_hot_deal',
        'is_show_home',
    ];

    protected $cast = [
        'is_type' => 'boolean',
        'is_new' => 'boolean',
        'is_hot' => 'boolean',
        'is_hot_deal' => 'boolean',
        'is_show_home' => 'boolean',
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function imagesProduct(){
        return $this->hasMany(ImageProduct::class);
    }
}
