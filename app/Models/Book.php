<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Book extends Model
{
    protected $fillable = [
        'title',
        'author',
        'category_id',
        'isbn',
        'quantity',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}