<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocumentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documents', function (Blueprint $table) {
            $table->increments('id');

           /* $table->string('club_id');*/
            $table->string('club_name')->nullable();
            /*$table->string('docNo');*/
            $table->string('activity')->nullable();
           /* $table->string('location');*/
           
            $table->date('begin_date')->nullable();
            $table->date('end_date')->nullable();
            $table->string('act_place')->nullable();
            $table->string('budget_type')->nullable();
            $table->string('source_budget')->nullable();
            $table->string('budget_numeral')->nullable();
            /*$table->string('budget_alphabet');
            $table->string('stu_id');*/
            $table->string('Requirement_act')->nullable();
            $table->string('morals')->nullable();
            $table->string('social_skill')->nullable();
            $table->string('pride_institution')->nullable();
            $table->string('cultural')->nullable();
            $table->string('health_development')->nullable();
            $table->string('created')->nullable();
            /*$table->string('status_submit');*/
            $table->string('status_pass1')->nullable();
            $table->string('status_pass2')->nullable();
            $table->string('status_pass3')->nullable();
            $table->string('status_pass4')->nullable();
            $table->string('status_pass5')->nullable();
            $table->string('status_pass6')->nullable();
            $table->string('status_pass7')->nullable();
            $table->string('status_pass8')->nullable();
            

            $table->string('editor')->nullable();
            $table->date('approveTime')->nullable();
            $table->string('comment')->nullable();
            $table->string('Requirement_act4')->nullable();
            $table->string('morals4')->nullable();
            $table->string('social_skill4')->nullable();
            $table->string('pride_institution4')->nullable();
            $table->string('cultural4')->nullable();
            $table->string('health_development4')->nullable();
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
        Schema::dropIfExists('documents');
    }
}
