<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServersTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('servers', function (Blueprint $table) {
      $table->id();
      $table->boolean('services')->default(true);
      $table->boolean('clients')->default(true);
      $table->boolean('login')->default(true);
      $table->string('title')->nullable();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('servers');
  }
}
