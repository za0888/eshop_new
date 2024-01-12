<?php

namespace Database\Seeders;

use App\enums\StockStatus;
use App\enums\UserStatus;
use App\Models\Stock;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {



//        main stock
        Stock::create(
            [
                'name'=>'TRUDA16',
            ]);
//
       Stock::create(
           [
               'name'=>'Kalinova',
               ]);

       Stock::create(
           [
               'name'=>'Kamenskoe',
               ]);

        Stock::create(
            [
                'name'=>'Order',
            ]);

        //        manager stocks
//        $users = User::where('status', UserStatus::Manager)->get();
//        if ($users) {
//            foreach ($users as $user) {
//                Stock::factory()
//                    ->user($user)
//                    ->manager()
//                    ->create();
//            }
//        }
    }
}
