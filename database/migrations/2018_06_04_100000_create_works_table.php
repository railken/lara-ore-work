<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Schema;

class CreateWorksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(Config::get('ore.work.table'), function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('worker');
            $table->text('extra')->nullable();
            $table->text('mock_data')->nullable();
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
        Schema::dropIfExists(Config::get('ore.work.table'));
    }
}
