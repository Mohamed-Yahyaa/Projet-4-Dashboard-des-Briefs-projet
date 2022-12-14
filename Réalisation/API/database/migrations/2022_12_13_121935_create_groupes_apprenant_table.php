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
        Schema::create('groupes_apprenant', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger("groupe_id")->nullable();
            $table->foreign("groupe_id")
            ->references("id")
            ->on('groupes')
            ->onDelete('cascade');

            $table->unsignedInteger("apprenant_id")->nullable();
            $table->foreign("apprenant_id")
            ->references("id")
            ->on('apprenant')
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
        Schema::dropIfExists('groupes_apprenant');
    }
};
