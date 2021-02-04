<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContatosTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('contatos', function (Blueprint $table) {
      $table->id();
      $table->string('contato')->unique();
      $table->Integer('pessoa_id');
      $table->foreign('pessoa_id')->references('id')->on('pessoas');
      $table->Integer('tipo_contato_id');
      $table->foreign('tipo_contato_id')->references('id')->on('tipos_contatos');
      $table->softDeletes('deleted_at', 0);
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('contatos');
  }
}
