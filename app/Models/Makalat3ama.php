<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Makalat3ama extends Model
{
    use HasFactory;

        // Define the table if not using the default naming convention
        protected $table = 'makalat_3ama';

        // Define which fields are mass assignable
        protected $fillable = [
            'title', 'mola5s', 'ref_number', 'image', 'video', 
            'author', 'updated', 'day', 'month', 'year', 'article_text', 
            'section_id', 'branch_id', 'item_id','topic_no','topic_letter'
        ];
    
        // Define any relationships here
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
