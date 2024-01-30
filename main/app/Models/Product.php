<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'content',
        'image'
    ];

    public function getImageURL() {
        if($this->image) {
            return url('storage/' . $this->image);
        }
    }

}
