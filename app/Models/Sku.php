<?php

namespace App\Models;

use App\enums\SkuStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sku extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'skuStatus',
        'skucode',
        'barcode',
        'cost',
        'price',
        'quantityInStock',
        'product_id',
        'stock_id',
        'unit_id',
        'vendor_id',

    ];

    protected $casts = [
        'skuStatus' => SkuStatus::class,
    ];

    public function attributeOptions(): BelongsToMany
    {
        return $this->belongsToMany(AttributeOption::class)
            ->withPivot('value', 'unit');
    }

    public function order():BelongsTo
    {
        return $this->belongsTo(Order::class);

    }

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class)
            ->withDefault();
    }

//units:box,barrel,cartoon,
    public function unit(): BelongsTo
    {
        return $this->belongsTo(Unit::class)
            ->withDefault();
    }

    public function vendor(): BelongsTo
    {
        return $this->belongsTo(Vendor::class)
            ->withDefault();
    }
}
