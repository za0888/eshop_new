<?php

namespace App\Models;

use App\enums\OrderStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable=[
        'order_number',
        'status',
    ];

    protected $casts=['status'=>OrderStatus::class];


    public function skus():BelongsToMany
    {
        return $this->belongsToMany(Sku::class)
            ->withPivot('number_in_order');
    }

    public function users():BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }
}
