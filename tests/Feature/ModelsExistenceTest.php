<?php

use App\enums\OrderStatus;
use App\enums\StockName;
use App\Models\AttributeOption;
use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use App\Models\Sku;
use App\Models\Stock;
use App\Models\Unit;
use App\Models\Vendor;
use App\Models\Attribute;

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
it('check created Stock model existence & softDeleting', function () {

    $stock = Stock::create();

    $this->assertDatabaseHas('stocks', [
        'name' => StockName::Main->value,
    ]);
    $stock->delete();
    assertSoftDeleted($stock);

});

// sku
it('check created Sku model existence & softDeleting', function () {

    $sku = Sku::create([
        'cost'=>123.12,
        'name' => 'some sku',
        'skucode'=>'nan-hfh-nn',
        'barcode'=>'111111111',
        'price'=>123.22,
        'quantity_in_stock'=>123,
        'location_in_stock'=>'ff-123',
        'product_id'=>1,
        'stock_id'=>1,
        'vendor_id'=>1
    ]);

    assertDatabaseHas('skus', [
        'name' => 'some sku',
    ]);
    $sku->delete();
    assertSoftDeleted($sku);

});
//attribute
it('check created Attribute model existence & softDeleting', function () {

    $attribute = Attribute::create([
        'name' => 'some attribute',
    ]);

    assertDatabaseHas('attributes', [
        'name' => 'some attribute',
    ]);
    $attribute->delete();
    assertSoftDeleted($attribute);

});
//attribute_option
it('check created AttributeOption model existence & softDeleting', function () {

    $attributeOption= AttributeOption::create([
            'name'=>'zigmund',
            'comment'=>'some comment',
            'attribute_id'=>1,
            'unit_id'=>1,
        ]
    );

    assertDatabaseHas('attribute_options', [
        'name' => 'zigmund',
    ]);
    $attributeOption->delete();
    assertSoftDeleted($attributeOption);

});
