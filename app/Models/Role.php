<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Role extends Model
{
    use HasFactory;

    /**
     * Fillable : mass assignable
     */

    protected $fillable = [
        'title',
        'slug',
        'description'
    ];

    /**
     * Eloquent Relationship
     */

    public function users()
    {
        return $this->hasMany(User::class);
    }


    /**
     * Mutators & Casting
     */

    public function setTitleAttribute($title)
    {
        $this->attributes['title'] = ucfirst(strtolower($title));
        $this->attributes['slug'] = Str::slug($title, '-');
    }

    /**
     * Route Key Binding : using 'slug' instead of 'id' 
     */

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
