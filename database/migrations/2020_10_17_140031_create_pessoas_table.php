<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePessoasTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('pessoas', function (Blueprint $table) {
      $table->id();
      $table->string('nome');
      $table->string('endereco_casa')->nullable();
      $table->string('endereco_trabalho')->nullable();
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
    Schema::dropIfExists('pessoas');
  }
}
