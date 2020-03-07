<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProjectAgentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_agents', function(Blueprint $table)
        {
            $table->increments('id');
            $table->timestamps();
            $table->integer('projet_id')->unsigned()->nullable()->index();
            $table->integer('Agent_id')->unsigned()->nullable()->index();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('project_agents');
    }
}
