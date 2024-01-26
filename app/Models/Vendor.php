<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Vendor extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable=[
        'name' ,
        'account',
        'address',
        'email',
        'country'
    ];

    public function products():HasMany
    {
        return $this->hasMany(Product::class);
    }


}
