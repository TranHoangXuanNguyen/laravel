<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeProduct extends Model
{
    use HasFactory;

    protected $table = 'type_products'; // Có thể bỏ nếu Laravel tự động nhận diện
    protected $fillable = ['name', 'description','image']; // Thêm các trường có thể gán


}
