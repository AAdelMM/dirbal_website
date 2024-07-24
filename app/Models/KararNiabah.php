<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KararNiabah extends Model
{
    use HasFactory;

    protected $table = 'karar_niabah';

    protected $fillable = ['title', 'mogaz_text', 'article_text'];
}
