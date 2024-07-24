<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AudioBook extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'mogaz', 'mokadma_title', 'mokadma_text', 'article_text', 'file_upload'];
}
