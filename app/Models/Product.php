<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Review;

class Product extends Model
{
    use HasFactory;
    protected $guarded = [];

     /**
     * Get the reviews of the product.
     */
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    /**
     * Get the user that added the product.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }


}
