<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Season extends Model
{
    use HasFactory;
    public function products()
    {
        return $this->belongsTo(Product::class, 'product_season', 'season_id', 'product_id')->withTimestamps();
    }
}
