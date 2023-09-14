<?php

namespace Database\Seeders;

use App\Models\Seller;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SellerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {

        
        Seller::factory()->create([
            'seller_id' => '9999',
            'message_type' => 0,
            'data' => [
                'order_status' => 'This is a test message',
                'trade_order_id' => '123456',
                'trade_order_line_id' => '12345',
                'status_update_time' => Carbon::createFromTimestamp(1656915866)->format('Y-m-d H:i:s'),
            ],
            'timestamp' => Carbon::createFromTimestamp(1656915866),
            'site' => 'lazada_sg',
        ]);
    }
}
