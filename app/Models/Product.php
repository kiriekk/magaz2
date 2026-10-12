<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;


       public function sluggable() {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
    
    public function category() {
        return $this->belongsTo(Category::class);
    }

       public function status() {
        return $this->belongsTo(Status::class);
    }
}
