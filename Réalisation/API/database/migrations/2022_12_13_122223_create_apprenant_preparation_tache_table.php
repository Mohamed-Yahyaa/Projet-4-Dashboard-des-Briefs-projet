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
        Schema::create('apprenant_preparation_tache', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger("preparation_tache_id");
            $table->unsignedInteger("apprenant_id");
            $table->unsignedInteger("apprenant_Brief_id");
            $table->foreign('preparation_tache_id')->references('id')->on('preparation_tache')->onDelete('cascade');
            $table->foreign('apprenant_Brief_id')->references('id')->on('apprenant_preparation_brief')->onDelete('cascade');
            $table->foreign('apprenant_id')->references('id')->on('apprenant')->onDelete('cascade');
            $table->string('Etat')->default('en pause');
            $table->timestamp("date_debut")->nullable();
            $table->timestamp("date_fin")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('apprenant_preparation_tache');
    }
};
