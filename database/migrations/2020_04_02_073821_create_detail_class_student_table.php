<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailClassStudentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_class_student', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('student_id');
            $table->unsignedInteger('detail_class_id');
            $table->tinyInteger('is_rolled_up');
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
        Schema::dropIfExists('detail_class_student');
    }
}
