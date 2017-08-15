<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateColorProductTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_table = 'color_product';

    /**
     * Run the migrations.
     * @table color_product
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->set_table, function (Blueprint $table) {           
            $table->increments('id');
            $table->integer('product_id')
                ->nullable()
                ->default(null)
                ->index();
            $table->integer('color_id')->index();
            $table->index(["product_id"], 'fk_productcolour_products_idx');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists($this->set_table);
     }
}
