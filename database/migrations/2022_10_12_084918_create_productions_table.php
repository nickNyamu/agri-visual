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
        Schema::create('productions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('produce_id');
            $table->unsignedBigInteger('region_id');
            $table->string('quantity');
            $table->string('units');
            $table->date('year');
            $table->timestamps();
            $table->foreign('produce_id')
            ->references('id')
            ->on('produces')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreign('region_id')
            ->references('id')
            ->on('regions')
            ->onUpdate('cascade')
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
        Schema::dropIfExists('productions');
    }
};
