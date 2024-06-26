<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory;


    protected $fillable = ['content_id', 'user_ip'];

    public function content()
    {
        return $this->belongsTo(Content::class);
    }
}
