<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(UsersTableSeeder::class);
        $this->call(ProductCategorizationSeeder::class);
        $this->call(ProductsSeeder::class);
        $this->call(StockInquiriesSeeder::class);
        $this->call(ProductMeasurementSeeder::class);

    }
}
