<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'id_type',
        'description',
        'unit_price',
        'promotion_price',
        'image',
        'unit',
        'new',
    ];

    public function productType()
    {
        return $this->belongsTo(ProductType::class, 'id_type');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function wishlists()
    {
        return $this->belongsToMany(User::class, 'wishlists');
    }
}
