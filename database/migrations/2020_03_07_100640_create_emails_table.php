<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEmailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emails', function(Blueprint $table)
        {
            $table->increments('id');
            $table->timestamps();
            $table->string('email')->nullable();
            $table->string('name', 255)->nullable();
            $table->string('message', 1000)->nullable();
            $table->string('phone')->nullable();
            $table->integer('service_id')->unsigned()->nullable()->index();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('emails');
    }
}
