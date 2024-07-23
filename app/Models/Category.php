<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'icon',
        'name',
        'status',
    ];

    protected $cast = [
        'status' => 'boolean',
    ];

    public function products(){
        return $this->hasMany(Product::class);
    }
}
