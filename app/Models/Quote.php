<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', // عنوان القبسة
        'category_id', // تصنيف القبسة
        'image',
        'body',
        'source',
    ];

    public function category()
{
    return $this->belongsTo(Category::class, 'category_id', 'id');
}
}
