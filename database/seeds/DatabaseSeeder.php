<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Uncomment factory lines and comment associated
     * table seeder if you want to fill database with random (600 Items) data.
     *
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(BrandsTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(ColorsTableSeeder::class);
        //factory(App\Models\Colors_products::class, 600)->create();
        $this->call(ColorProductTableSeeder::class);
        $this->call(CountriesTableSeeder::class);
        $this->call(CurrenciesTableSeeder::class);
        $this->call(OrdersTableSeeder::class);
        $this->call(OrderStatusTableSeeder::class);
        $this->call(PaymentsTableSeeder::class);
        //factory(App\Models\Product::class, 600)->create();
        $this->call(ProductsTableSeeder::class);
        //factory(App\Models\Products_sizes::class, 600)->create();
        $this->call(ProductSizeTableSeeder::class);
        $this->call(SettingsTableSeeder::class);
        $this->call(ShippingsTableSeeder::class);
        $this->call(SizesTableSeeder::class);
        $this->call(TaxesTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(RoleUserTableSeeder::class);
    }
}
