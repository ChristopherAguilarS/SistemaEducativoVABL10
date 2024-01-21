<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('genericas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descripcion');
            $table->string('codigo',6);
            $table->boolean('estado');
            $table->unsignedInteger('tipo_transaccion_id'); 
            $table->foreign('tipo_transaccion_id')->references('id')->on('tipo_transacciones');
            $table->integer('created_by');
            $table->integer('updated_by')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('genericas');
    }
};
