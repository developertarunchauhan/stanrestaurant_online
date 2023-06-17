<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Item extends Model
{
    /**
     * Traits
     */
    use HasFactory, SoftDeletes;


    /**
     * Fillable : mass assignable
     */

    protected $fillable = [
        'title',
        'slug',
        'category_id',
        'image',
        'description',
        'status',
        'price',
        'order_limit',
        'is_veg'
    ];

    /**
     * Eloquent Relationships
     */

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
