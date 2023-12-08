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
        Schema::create('estudiante', function (Blueprint $table) {
            $table->string('codestudiante', 2);
            $table->string('nomestudiante', 100);
            $table->integer('edaestudiante');
            $table->date('fechaestudiante');
            $table->char('sexestudiante', 2);
            $table->string('programa', 2);
            $table->primary('codestudiante');
            $table->foreign('programa')
            ->references('codprograma')->on('programa');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estudiante');
    }
};
