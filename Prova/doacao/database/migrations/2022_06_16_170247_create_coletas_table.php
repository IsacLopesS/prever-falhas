<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coletas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->float('quantidade', 8, 2);
            $table->date('data');
            $table->unsignedBigInteger('item_id');
            $table->unsignedBigInteger('entidade_id');

            $table->foreign('item_id')->references('id')->on('items');
            $table->foreign('entidade_id')->references('id')->on('entidades');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('coletas');
    }
};
