<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
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
        'description'
    ];


    /**
     * Eloquent Relationships
     */

    public function items()
    {
        return $this->hasMany(Item::class);
    }
}
