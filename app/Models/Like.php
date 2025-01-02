<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory;

    protected $fillable = [
        'content_id',
        'section_id',
        'branch_id',
        'item_id',
        'user_ip',
    ];
}