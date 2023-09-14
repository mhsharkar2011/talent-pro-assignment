<?php

namespace Database\Seeders;

use App\Models\Shop;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Shop::factory()->create([
            'shop_id' => 124,
            'code' => 1,
            'success' => 1,
            'extra' => 'shop_id 123 is authorized successfully',
            'data' => ['more_info' => 'more info'],
            'timestamp' => Carbon::createFromTimestamp(1470198856),
        ]);
    }
}
