<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class AttributeOption extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',
        'units',
        'comment',
        'attribute_id',
    ];

    protected $casts=[
        'units'=>'array'
    ];

    public function attribute():BelongsTo
    {
        return $this->belongsTo(AttributeOption::class)
            ->withDefault();
    }

    public function skus():BelongsToMany
    {
        return $this->belongsToMany(Sku::class)
            ->withPivot('unit','value');
    }
}
