<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConventionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('conventions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('lettre', 300)->nullable();
            $table->string('copie_attest_enrolement', 300)->nullable();
            $table->string('copie_plan', 300)->nullable();
            $table->string('copie_rapport', 300)->nullable();
            $table->string('copie_projet', 300)->nullable();
            $table->string('commentaires')->nullable();
            $table->string('convention_partenariat', 300)->nullable();
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
        Schema::dropIfExists('conventions');
    }
}
