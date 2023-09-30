<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePreinscriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('preinscriptions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('eco_id');
            $table->unsignedBigInteger('prog_id');
            $table->unsignedBigInteger('opt_id');
            $table->string('preins_nom');
            $table->string('preins_prenom');
            $table->string('preins_nation');
            $table->string('preins_datenais');
            $table->string('preins_lieunais');
            $table->string('preins_parcours');
            $table->string('preins_email');
            $table->string('preins_niveau');
            $table->text('preins_desc');
            $table->timestamps();

            $table->foreign('eco_id')
            ->references('id')
            ->on('ecoles')
            ->onDelete('cascade');

            $table->foreign('prog_id')
            ->references('id')
            ->on('programmes')
            ->onDelete('cascade');

            $table->foreign('opt_id')
            ->references('id')
            ->on('options')
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
        Schema::dropIfExists('preinscriptions');
    }
}
