<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $fillable = [
        'street',
        'country',
        'icon_id',
        'monster_id',
    ];

    public function icon()
    {
        return $this->belongsTo(Icon::class);
    }

    public function monster()
    {
        return $this->belongsTo(Monster::class);
    }
}
