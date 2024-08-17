<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ma7kamaOlia extends Model
{
    protected $table = 'ma7kama_olia';

    protected $fillable = [
        'year', 'month', 'ref_number', 'title', 'mogaz', 'ka3da_title',
        'ka3da_text', 'dibaga', 'waka3_title', 'waka3_text', 'egraa_title',
        'egraa_text', 'reason_title', 'reason_text', 'hokm_title', 'hokm_text',  'topic_number',
        'author',
        'subtitle',
    ];
}
