<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('clients', function (Blueprint $table) {
      $table->id();
      $table->string('fullName');
      $table->string('email');
      $table->string('phone');
      $table->string('website');
      $table->string('cost');
      $table->tinyInteger('completed')->unsigned()->default(0);
      $table->timestamp('due_date')->nullable();
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('clients');
  }
}
