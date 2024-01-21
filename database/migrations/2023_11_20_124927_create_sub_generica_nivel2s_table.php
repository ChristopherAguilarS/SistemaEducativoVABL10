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
        Schema::create('sub_genericas_nivel_2', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descripcion');
            $table->string('codigo',10);
            $table->boolean('estado');
            $table->unsignedInteger('sub_generica_nivel_1_id'); 
            $table->foreign('sub_generica_nivel_1_id')->references('id')->on('sub_genericas_nivel_1');
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
        Schema::dropIfExists('sub_genericas_nivel_2');
    }
};
