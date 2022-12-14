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
        Schema::create('groupes_preparation_brief', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger("apprenant_preparation_brief_id")->nullable();
            $table->foreign("apprenant_preparation_brief_id")
            ->references("id")
            ->on('apprenant_preparation_brief')
            ->onDelete('cascade');

            $table->unsignedInteger("groupe_id")->nullable();
            $table->foreign("groupe_id")
            ->references("id")
            ->on('groupes')
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
        Schema::dropIfExists('groupes_preparation_brief');
    }
};
