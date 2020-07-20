<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = [
        'title',
        'image',
        'price',
        'category_id',
    ];

    protected $with = ['category'];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getImage(): string
    {
        return $this->image;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function getCategoryId(): int
    {
        return $this->category_id;
    }
}
