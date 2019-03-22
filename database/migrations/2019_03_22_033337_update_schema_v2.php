<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateSchemaV2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evento_tiene_usuario', function (Blueprint $table) {
            $table->unsignedInteger('fk_id_usuario');
            $table->unsignedInteger('fk_id_evento');
            $table->timestamps();

            $table->foreign('fk_id_usuario')
                ->references('id')
                ->on('usuario');
            $table->foreign('fk_id_evento')
                ->references('id')
                ->on('evento');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('evento_tiene_usuario');
    }
}
