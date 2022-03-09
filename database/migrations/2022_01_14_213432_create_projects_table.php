<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('projects', function (Blueprint $table) {
      $table->id();
      $table->integer('user_id')->nullable();
      $table->integer('from_id')->nullable();
      $table->string('title');
      $table->text('details');
      $table->timestamp('sent_time');
      $table->timestamp('due_date')->nullable();
      $table->enum('completed', [0, 1]);
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('projects');
  }
}
