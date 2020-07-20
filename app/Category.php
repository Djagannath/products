<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    protected $table = 'categories';

    protected $fillable = [
        'name',
        'tag',
    ];

    protected $withCount = ['products'];

    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getTag(): string
    {
        return $this->tag;
    }

    public function getProductsCount(): int
    {
        return $this->products_count;
    }
}
