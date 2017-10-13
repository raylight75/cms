<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSocialAccountsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_table = 'social_accounts';

    /**
     * Run the migrations.
     * @table social_accounts
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->set_table, function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('provider_user_id', 32);
            $table->string('provider', 32);
            $table->string('access_token', 255);
            $table->timestamps();
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
