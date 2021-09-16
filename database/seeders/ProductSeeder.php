<?php

namespace Database\Seeders;

use App\Models\Product;
use carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->delete();

        $data = [
            [
                'name'        => 'Apple',
                'slug'        => 'Apple Watch',
                'description' => 'fgdfgdfgdfg',
                'price'       => 18500.00,
                'image'       => 'https://via.placeholder.com/800x600.png/0056429?text=samsung',
                'user_id'     => 1,
                'created_at'  => Carbon::now(),
                'updated_at'   => Carbon::now(),
            ],

        ];

        Product::insert($data);

        //Call Product Factory
        Product::factory(4999)->create();
    }
}
