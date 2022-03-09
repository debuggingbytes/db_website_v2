<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePushAlertsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('push_alerts', function (Blueprint $table) {
      $table->id();
      $table->integer('user_id')->nullable();
      $table->string('details');
      $table->string('icon_path');
      $table->integer('is_read')->unsigned()->nullable();
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
    Schema::dropIfExists('push_alerts');
  }
}
