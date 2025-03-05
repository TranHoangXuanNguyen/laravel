<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Monster extends Model
{
    use HasFactory;

    protected $fillable = [
        'address',
        'browse',
        'checkbox',
        'wysiwyg',
        'color',
        'color_picker',
        'date',
        'date_picker',
        'start_date',
        'end_date',
        'datetime',
        'datetime_picker',
        'email',
        'hidden',
        'icon_picker',
        'image',
        'month',
        'number',
        'float',
        'password',
        'radio',
        'range',
        'select',
        'select_from_array',
        'select2',
        'select2_from_ajax',
        'select2_from_array',
        'simplemde',
        'summernote',
        'table',
        'textarea',
        'text',
        'tinymce',
        'upload',
        'upload_multiple',
        'url',
        'video',
        'week',
        'extras',
    ];

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'monster_category');
    }

    public function articles()
    {
        return $this->belongsToMany(Article::class, 'monster_article');
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'monster_tag');
    }
}
