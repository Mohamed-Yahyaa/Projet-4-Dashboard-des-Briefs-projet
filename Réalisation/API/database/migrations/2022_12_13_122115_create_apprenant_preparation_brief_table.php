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
        Schema::create('apprenant_preparation_brief', function (Blueprint $table) {
            $table->id();
            $table->date('Date_affectation')->nullable();
            $table->unsignedInteger("preparation_brief_id")->nullable();
            $table->unsignedInteger("apprenant_id")->nullable();
            $table->foreign('apprenant_id')->references('id')->on('apprenant')->onDelete('cascade');
            $table->foreign('preparation_brief_id')->references('id')->on('preparation_brief')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('apprenant_preparation_brief');
    }
};
