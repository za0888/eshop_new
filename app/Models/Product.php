<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable=[
        'name',
        'slug',
        'description',
        'category_id',
        'vendor_id',
    ];

    public function skus():HasMany
    {
        return $this->hasMany(Sku::class);
    }

    public function category():BelongsTo
    {
        return $this->belongsTo(Category::class)->withDefault();
    }


    public function vendor(): BelongsTo
    {
        return $this->belongsTo(Vendor::class)
            ->withDefault();
    }
}
