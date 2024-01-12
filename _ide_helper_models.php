<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Attribute
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\AttributeOption> $AttributeOptions
 * @property-read int|null $attribute_options_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Unit> $units
 * @property-read int|null $units_count
 * @method static \Illuminate\Database\Eloquent\Builder|Attribute newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Attribute newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Attribute onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Attribute query()
 * @method static \Illuminate\Database\Eloquent\Builder|Attribute whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attribute whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attribute whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attribute whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attribute whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attribute withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Attribute withoutTrashed()
 */
	class Attribute extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\AttributeOption
 *
 * @property int $id
 * @property string|null $name
 * @property string $comment
 * @property int $attribute_id
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Attribute|null $attribute
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Sku> $skus
 * @property-read int|null $skus_count
 * @method static \Illuminate\Database\Eloquent\Builder|AttributeOption newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AttributeOption newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AttributeOption onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|AttributeOption query()
 * @method static \Illuminate\Database\Eloquent\Builder|AttributeOption whereAttributeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AttributeOption whereComment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AttributeOption whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AttributeOption whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AttributeOption whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AttributeOption whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AttributeOption whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AttributeOption withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|AttributeOption withoutTrashed()
 */
	class AttributeOption extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Category
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Product> $products
 * @property-read int|null $products_count
 * @method static \Illuminate\Database\Eloquent\Builder|Category newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Category newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Category onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Category query()
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Category withoutTrashed()
 */
	class Category extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Order
 *
 * @property int $id
 * @property string $number
 * @property \App\enums\OrderStatus $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Sku> $skus
 * @property-read int|null $skus_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\User> $users
 * @property-read int|null $users_count
 * @method static \Illuminate\Database\Eloquent\Builder|Order newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Order newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Order onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Order query()
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Order withoutTrashed()
 */
	class Order extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Product
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property string|null $description
 * @property int $category_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\Category|null $category
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Sku> $skus
 * @property-read int|null $skus_count
 * @method static \Database\Factories\ProductFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Product newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Product newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Product onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Product query()
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Product withoutTrashed()
 */
	class Product extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Sku
 *
 * @property int $id
 * @property string $name
 * @property string $skucode
 * @property string $barcode
 * @property string $cost the cost is a price from supplier
 * @property string $price price for customer
 * @property int $quantity_in_stock
 * @property string $location_in_stock
 * @property int $product_id
 * @property int $stock_id
 * @property int $vendor_id
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \App\enums\SkuStatus $skuStatus
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\AttributeOption> $attributeOptions
 * @property-read int|null $attribute_options_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Order> $order
 * @property-read int|null $order_count
 * @property-read \App\Models\Product|null $product
 * @property-read \App\Models\Vendor|null $vendor
 * @method static \Illuminate\Database\Eloquent\Builder|Sku newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Sku newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Sku onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Sku query()
 * @method static \Illuminate\Database\Eloquent\Builder|Sku whereBarcode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sku whereCost($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sku whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sku whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sku whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sku whereLocationInStock($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sku whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sku wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sku whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sku whereQuantityInStock($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sku whereSkucode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sku whereStockId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sku whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sku whereVendorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sku withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Sku withoutTrashed()
 */
	class Sku extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Stock
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Sku> $skus
 * @property-read int|null $skus_count
 * @method static \Illuminate\Database\Eloquent\Builder|Stock newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Stock newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Stock onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Stock query()
 * @method static \Illuminate\Database\Eloquent\Builder|Stock whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Stock whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Stock whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Stock whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Stock whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Stock withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Stock withoutTrashed()
 */
	class Stock extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Unit
 *
 * @property int $id
 * @property string $name
 * @property int $attribute_option_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property-read \App\Models\Attribute|null $attribue
 * @method static \Database\Factories\UnitFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Unit newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Unit newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Unit query()
 * @method static \Illuminate\Database\Eloquent\Builder|Unit whereAttributeOptionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Unit whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Unit whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Unit whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Unit whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Unit whereUpdatedAt($value)
 */
	class Unit extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $status
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property mixed $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Order> $orders
 * @property-read int|null $orders_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Vendor
 *
 * @property int $id
 * @property string $name
 * @property string $account
 * @property string $address
 * @property string $country
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Sku> $skus
 * @property-read int|null $skus_count
 * @method static \Database\Factories\VendorFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Vendor newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Vendor newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Vendor onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Vendor query()
 * @method static \Illuminate\Database\Eloquent\Builder|Vendor whereAccount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vendor whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vendor whereCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vendor whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vendor whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vendor whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vendor whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vendor whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vendor whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vendor withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Vendor withoutTrashed()
 */
	class Vendor extends \Eloquent {}
}

