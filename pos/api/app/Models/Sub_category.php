<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sub_category extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    public function category() {
        return $this->belongsTo(Category::class);
    }
    public function product() {
        return $this->hasMany(Product::class);
    }
    public function purchase() {
        return $this->hasMany(Purchase::class);
    }
}
