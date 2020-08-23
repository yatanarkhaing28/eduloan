<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEducationDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('education__details', function (Blueprint $table) {
            $table->id();
            $table->string('rollno');
            $table->text('year');
            $table->text('university');
            $table->text('semester');
            $table->unsignedBigInteger('student_id');
            $table->timestamps();
            $table->foreign('student_id')
                ->references('id')
                ->on('student__infos')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('education__details');
    }
}
