<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;

    protected $fillable =[
        'title',
        'title_en',
        'image',
        'description',
        'parent_id',
        'specification_id',
        'slug',
        'meta_title',
        'meta_keywords',
        'meta_description',
    ];


    public function getImageAttribute($value)
    {
        return $value ? asset($value) : '/assets/default-image.jpg' ;
    }


    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }


    public function items()
    {
        return $this->hasMany(Item::class);
    }






}
