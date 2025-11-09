<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable =[
        'title', 
        'image',
        'date',
        'details',
        'writer_id',
        'category_id'
    ];

    public function writer() {
        return $this->belongsTo(Writer::class);
    }

    public function category() {
        return $this->belongsTo(Category::class);
    }
    
}