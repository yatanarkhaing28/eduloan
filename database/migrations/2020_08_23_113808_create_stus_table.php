<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stus', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->text('photo');
            $table->text('fathername');
            $table->string('nrcno');
            $table->text('state');
            $table->text('city');
            $table->integer('phoneno');
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
        Schema::dropIfExists('stus');
    }
}
