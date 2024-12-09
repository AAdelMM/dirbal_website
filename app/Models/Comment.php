<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    
    protected $fillable = ['contents_id','email', 'table_name' ,'author', 'comment'];

    public function content()
    {
        return $this->belongsTo(Content::class);
    }
}
