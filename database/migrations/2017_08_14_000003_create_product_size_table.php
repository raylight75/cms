<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductSizeTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_table = 'product_size';

    /**
     * Run the migrations.
     * @table product_size
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->set_table, function (Blueprint $table) {            
            $table->increments('id');
            $table->integer('product_id')
                ->index()
                ->nullable()
                ->default(null);
            $table->integer('size_id')->index();
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
