<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Attribute extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable=[
        'name',
    ];

    public function AttributeOptions(): HasMany
    {
        return $this->hasMany(AttributeOption::class);
    }

    public function units(): HasMany
    {
        return $this->hasMany(Unit::class);
    }
}
