<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Product extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $fillable = [
        'title',
        'description',
        'price',
        'image',
        'sub_category_id',
        'quantity',
        'status',
    ];

    public function subCategory()
    {
        return $this->belongsTo(SubCategory::class);
    }
    public function orderList()
    {
        return $this->hasMany(OrderList::class);
    }

}
