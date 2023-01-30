<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAvispermanentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('avispermanents', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('lettre', 300)->nullable();
            $table->string('attestation', 300)->nullable();
            $table->string('bien_exonerer', 300)->nullable();
            $table->string('commentaire')->nullable();
            $table->string('arrete_min', 300)->nullable();
            $table->string('notification', 300)->nullable();
            $table->string('statut')->default('soumis');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('restrict')
                ->unUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('avispermanents');
    }
}
