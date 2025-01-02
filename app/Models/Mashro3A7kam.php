<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mashro3A7kam extends Model
{
    use HasFactory;
    protected $table = 'mashro3_a7kam'; // Define the correct table name
    protected $fillable = [
        'year',
        'month',
        'day',
        'topic_no',
        'topic_letter',
        'author',
        'ref_number',
        'title',
        'mogaz',
        'ka3da_title',
        'ka3da_text',
        'dibaga',
        'wak3a_title',
        'wak3a_text',
        'egraa_title',
        'egraa_text',
        'reason_title',
        'reason_text',
        '7okm_title',
        '7okm_text',
        'audio_files',
        'pdf_files',
        'updated',
        'section_id',
        'branch_id',
        'item_id',
        'publish'
    ];

      // Relationships
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
