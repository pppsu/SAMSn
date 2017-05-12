<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApproveTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('approves', function (Blueprint $table) {
            $table->increments('id');
            /*$table->string('status_pass1')->nullable();
            $table->string('status_pass2')->nullable();
            $table->string('status_pass3')->nullable();
            $table->string('status_pass4')->nullable();
            $table->string('status_pass5')->nullable();
            $table->string('status_pass6')->nullable();
            $table->string('status_pass7')->nullable();
            $table->string('status_pass8')->nullable();
            

            $table->string('editor1')->nullable();
            $table->date('approveTime1')->nullable();
            $table->string('comment1')->nullable();

            $table->string('editor2')->nullable();
            $table->date('approveTime2')->nullable();
            $table->string('comment2')->nullable();

            $table->string('editor3')->nullable();
            $table->date('approveTime3')->nullable();
            $table->string('comment3')->nullable();

            $table->string('editor4')->nullable();
            $table->date('approveTime4')->nullable();
            $table->string('comment4')->nullable();

            $table->string('editor5')->nullable();
            $table->date('approveTime5')->nullable();
            $table->string('comment5')->nullable();

            $table->string('editor6')->nullable();
            $table->date('approveTime6')->nullable();
            $table->string('comment6')->nullable();

            $table->string('editor7')->nullable();
            $table->date('approveTime7')->nullable();
            $table->string('comment7')->nullable();

            $table->string('Requirement_act4')->nullable();
            $table->string('morals4')->nullable();
            $table->string('social_skill4')->nullable();
            $table->string('pride_institution4')->nullable();
            $table->string('cultural4')->nullable();
            $table->string('health_development4')->nullable();*/
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
        Schema::dropIfExists('approves');
    }
}
