<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFlisolSchema extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $this->down();

        Schema::create('estado', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
        });

        Schema::create('discapacidad', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
        });

        Schema::create('municipio', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->unsignedInteger('fk_id_estado');

            $table->foreign('fk_id_estado')
                ->references('id')
                ->on('estado');
        });
        Schema::create('institucion', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('nom_contacto')->nullable();
            $table->string('correo')->nullable();
            $table->string('telefono', 15)->nullable();
            $table->unsignedInteger('fk_id_municipio');

            $table->foreign('fk_id_municipio')
                ->references('id')
                ->on('municipio');
        });
        Schema::create('usuario', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre')->nullable();
            $table->integer('edad')->nullable();
            $table->string('app')->nullable();
            $table->string('apm')->nullable();
            $table->string('correo');
            $table->string('sexo')->nullable();
            $table->string('QR')->nullable();
            $table->string('QR_url')->nullable();
            $table->timestamps();
            $table->unsignedInteger('fk_id_municipio')->nullable();
            $table->unsignedInteger('fk_id_institucion')->nullable();
            $table->unsignedInteger('fk_id_discapacidad')->nullable();

            $table->foreign('fk_id_municipio')
                ->references('id')
                ->on('municipio');

            $table->foreign('fk_id_discapacidad')
                ->references('id')
                ->on('discapacidad');

            $table->foreign('fk_id_institucion')
                ->references('id')
                ->on('institucion');
        });
        Schema::create('patrocinador', function (Blueprint $table) {
            $table->increments('id');
            $table->string('r_social');
            $table->string('nom_contacto');
            $table->string('correo');
            $table->string('telefono');
            $table->string('image_url', 1000);
            $table->string('descripcion', 1000);
            $table->string('url', 1000);
            $table->unsignedInteger('fk_id_estado');

            $table->foreign('fk_id_estado')
                ->references('id')
                ->on('estado');

        });
        Schema::create('ponente', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('correo');
            $table->string('telefono');
            $table->string('direccion', 1000)->nullable();
            $table->string('descripcion', 1000)->nullable();
            $table->string('empresa', 1000)->nullable();
            $table->string('image_url', 1000)->nullable();
            $table->unsignedInteger('fk_id_estado');

            $table->foreign('fk_id_estado')
                ->references('id')
                ->on('estado');

        });
        Schema::create('ubicacion', function (Blueprint $table) {
            $table->increments('id');
            $table->string('edificio');
            $table->string('aula');
        });
        Schema::create('tipo_evento', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
        });
        Schema::create('evento', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->integer('cupo');
            $table->integer('inscritos')->default(0);
            $table->dateTime('hora_inicio');
            $table->time('duracion');
            $table->text('requisitos')->nullable();
            $table->string('descripcion', 1000);
            $table->unsignedInteger('fk_id_tipo_evento');
            $table->unsignedInteger('fk_id_ubicacion');

            $table->foreign('fk_id_ubicacion')
                ->references('id')
                ->on('ubicacion');

            $table->foreign('fk_id_tipo_evento')
                ->references('id')
                ->on('tipo_evento');
        });
        Schema::create('evento_tiene_ponente', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('fk_id_evento');
            $table->unsignedInteger('fk_id_ponente');

            $table->foreign('fk_id_evento')
                ->references('id')
                ->on('evento');

            $table->foreign('fk_id_ponente')
                ->references('id')
                ->on('ponente');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('evento_tiene_patrocinador');
        Schema::dropIfExists('evento');
        Schema::dropIfExists('tipo_evento');
        Schema::dropIfExists('ubicacion');
        Schema::dropIfExists('ponente');
        Schema::dropIfExists('patrocinador');
        Schema::dropIfExists('usuario');
        Schema::dropIfExists('institucion');
        Schema::dropIfExists('municipio');
        Schema::dropIfExists('discapacidad');
        Schema::dropIfExists('estado');
    }
}
