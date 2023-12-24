<?php

use App\enums\OrderStatus;
use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use App\Models\Unit;
use App\Models\Vendor;
use function Pest\Laravel\assertDatabaseHas;
use function Pest\Laravel\assertSoftDeleted;

//ORDER
it('check created ORDER model existence & softDeleting', function () {

    $order = Order::create(['number' => 12345678]);

    assertDatabaseHas('orders', [
        'number' => '12345678',
        'status' => OrderStatus::Processing->value
    ]);

    $order->delete();

    assertSoftDeleted($order);


});

//CATEGORY
it('check created Category model existence & softDeleting', function () {

    $category = Category::create(['name' => 'some category']);

    $this->assertDatabaseHas('categories', [
        'name' => 'some category'
    ]);
    $category->delete();
    assertSoftDeleted($category);

});

//Vendor
it('check created Vendor model existence & softDeleting', function () {

    $vendor = Vendor::create([
        'name' => 'some vendor',
        'account' => fake()->numberBetween(1, 333333),
        'address' => fake()->address,
        'email' => fake()->email,
    ]);

    $this->assertDatabaseHas('vendors', [
        'name' => 'some vendor',
        'email' => $vendor->email
    ]);
    $vendor->delete();
    assertSoftDeleted($vendor);

});
//Unit
it('check created Unit model existence & softDeleting', function () {

    $unit = Unit::create([
        'name' => 'some unit',

    ]);

    $this->assertDatabaseHas('units', [
        'name' => 'some unit',
    ]);

    $unit->delete();
    assertSoftDeleted($unit);

});

//product
it('check created Product model existence & softDeleting', function () {

    $product = Product::create([
        'name' => 'some product',
        'slug' =>"sp",
        'category_id'=>1
    ]);

    $this->assertDatabaseHas('products', [
        'name' => 'some product',
            ]);
    $product->delete();
    assertSoftDeleted($product);

});
//stock

// sku

//attribute

//attribute_option

//order_users

//order_skus
