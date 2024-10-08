<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KitabSawty extends Model
{
    use HasFactory;
    protected $table = 'kitab_sawty'; // Ensure the table name is correct
    protected $fillable = [
        '3nwan', 'mola5s', 'ref_number', 'text', 'audio_file', 'image', 
        'video_url', 'author', 'editor', 'section_id', 'branch_id', 'item_id','updated'
    ];

    public function section()
    {
        return $this->belongsTo(Section::class);
    }

    public function branch()
    {
        return $this->belongsTo(Branch::class);
    }

    public function item()
    {
        return $this->belongsTo(Item::class);
    }
}
