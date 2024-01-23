<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class AttributeOption extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'name',
        'comment',
        'attribute_id',
    ];

    protected $casts = [
        'units' => 'array'
    ];

    public function attribute(): BelongsTo
    {
        return $this->belongsTo(Attribute::class)
            ->withDefault();
    }

    public function skus(): BelongsToMany
    {
        return $this->belongsToMany(Sku::class)
            ->withPivot('unit', 'value');
    }


}
