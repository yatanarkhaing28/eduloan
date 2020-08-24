<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loans', function (Blueprint $table) {
            $table->id();
            $table->integer('amount');
            $table->tinyInteger('status')->default(0);
            $table->date('date');
            $table->integer('loantime');
            $table->unsignedBigInteger('financial_id');
            $table->timestamps();

            $table->foreign('financial_id')
                    ->references('id')
                    ->on('financials')
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
        Schema::dropIfExists('loans');
    }
}
