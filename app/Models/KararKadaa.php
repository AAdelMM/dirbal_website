<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KararKadaa extends Model
{
    use HasFactory;
    protected $table = 'karar_kadaa';
    protected $fillable = ['title', 'text', 'text_color', 'font_size'];
}
