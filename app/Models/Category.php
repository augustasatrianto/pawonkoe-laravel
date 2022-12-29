<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function scopeFilter($query, array $filters)
    {
        if(isset($filters['category']) ? $filters['category'] : false){
            return $query->where('name', 'like', '%' . $filters['category'] . '%');
        }
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
