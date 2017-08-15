<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(BrandsTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(ColorsTableSeeder::class);
        $this->call(ColorProductTableSeeder::class);
        $this->call(CountriesTableSeeder::class);
        $this->call(CurrenciesTableSeeder::class);
        $this->call(CustomersTableSeeder::class);
        $this->call(OrdersTableSeeder::class);
        $this->call(OrderStatusTableSeeder::class);
        $this->call(PaymentsTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
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
