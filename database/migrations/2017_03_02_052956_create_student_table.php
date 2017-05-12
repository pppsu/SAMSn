<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('stu_id');
            $table->string('psu_passport');
            $table->string('title');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('faculty');
            $table->string('major');
            $table->string('org_id');
            $table->string('position');
            $table->string('role');
            $table->date('begin_date');
            $table->date('end_date');
            $table->string('phone');
            $table->string('email');
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
        Schema::dropIfExists('students');
    }
}
