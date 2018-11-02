<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_table = 'products';

    /**
     * Run the migrations.
     * @table products
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->set_table, function (Blueprint $table) {
            $table->increments('id');
            $table->string('slug', 45);
            $table->string('name', 45);
            $table->mediumText('description');
            $table->string('a_img', 45);
            $table->string('b_img', 45);
            $table->string('c_img', 45);
            $table->integer('brand_id')->unsigned()->index();
            $table->foreign('brand_id')
                ->references('brand_id')
                ->on('brands')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->integer('cat_id')->unsigned()->index();
            $table->foreign('cat_id')
                ->references('cat_id')
                ->on('categories')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->integer('parent_id');
            $table->integer('quantity')->nullable()->default(null);
            $table->float('price');
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
