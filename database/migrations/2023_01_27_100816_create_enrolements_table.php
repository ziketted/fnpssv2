<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnrolementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    { /*

        ected $fillable = [
        'user_id',
        'lettre',
        'copie_statut',
        'copie_arrete_aff_soc',
        'copie_arrete_justice',
        'copie_plan_action',
        'copie_rapport_annuel',
        'copie_numero_impot',
        'attestation_enrolement',
        'commentaires',
        'notification',
        //Etat de validation au niveau de l'administration
        'statut',
        //attribut complémentaire pour le design.
        'validite',
        */
        Schema::create('enrolements', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('lettre', 300)->nullable();
            $table->string('copie_statut', 300)->nullable();
            $table->string('copie_arrete_aff_soc', 300)->nullable();
            $table->string('copie_arrete_justice', 300)->nullable();
            $table->string('copie_plan_action', 300)->nullable();
            $table->string('copie_rapport_annuel', 300)->nullable();
            $table->string('copie_numero_impot', 300)->nullable();
            $table->string('attestation_enrolement', 300)->nullable();
            $table->string('validite')->default('2025');
            $table->string('commentaires')->nullable();
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
        Schema::dropIfExists('enrolements');
    }
}
