<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeasonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('season', function (Blueprint $table)
        {
            $table->integer('series_id')->unsigned();
            $table->integer('number')->default(1);
            $table->integer('episodes_quantity')->default(1);
            $table->text('notes')->nullable();
            $table->timestamps();

            $table->primary(['series_id', 'number']);

            $table->foreign('series_id')
                  ->references('id')->on('series')
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
        Schema::dropIfExists('season');
    }
}
