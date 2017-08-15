<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTaxesTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_table = 'taxes';

    /**
     * Run the migrations.
     * @table taxes
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->set_table, function (Blueprint $table) {            
            $table->increments('id');
            $table->string('name', 32);
            $table->string('code', 32);
            $table->decimal('discount', 10, 0);
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
