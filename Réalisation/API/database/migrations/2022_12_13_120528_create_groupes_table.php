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
        Schema::create('groupes', function (Blueprint $table) {
             $table->increments('id');
            $table->string('Nom_groupe')->nullable();
            $table->unsignedInteger("anne_formation_id")->nullable();
            $table->foreign("anne_formation_id")
                ->references("id")
                ->on('anne_formation')
                ->onDelete('cascade');
            $table->unsignedInteger("formateur_id")->nullable();
            $table->foreign("formateur_id")
                ->references("id")
                ->on('formateur')
                ->onDelete('cascade');

            $table->string('Logo')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('groupes');
    }
};
