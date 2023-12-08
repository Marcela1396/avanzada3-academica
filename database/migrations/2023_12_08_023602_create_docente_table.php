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
        Schema::create('docente', function (Blueprint $table) {
            $table->string('codprofesor', 2);
            $table->char('nomprofesor', 100);
            $table->string('cateprofesor', 100);
            $table->string('fotoprofesor', 30);
            $table->string('programa', 2);
            $table->primary('codprofesor');
            $table->foreign('programa')
            ->references('codprograma')->on('programa');
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
        Schema::dropIfExists('docente');
    }
};
