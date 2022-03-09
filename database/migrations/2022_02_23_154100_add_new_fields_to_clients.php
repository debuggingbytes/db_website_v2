<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNewFieldsToClients extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::table('clients', function (Blueprint $table) {
      //
      $table->string('responsive')->nullable();
      $table->string('domain')->nullable();
      $table->string('tech_support')->nullable();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::table('clients', function (Blueprint $table) {
      //
      $table->string('responsive');
      $table->string('domain');
      $table->string('tech_support');
    });
  }
}
