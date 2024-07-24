<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HokmKada2y extends Model
{
    protected $table = 'hokm_kada2y';
    protected $fillable = [
        'month',
        'day',
        'hokm_title',
        'mogaz',
        'ka3da',
        'ka3da_title',
        'dibaga',
        'wak3a_title',
        'wak3a_summary',
        'reason',
        'reason_title',
        'hokm'
    ];
    use HasFactory;
}
