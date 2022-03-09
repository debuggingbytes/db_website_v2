<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

<<<<<<< HEAD
class CreateUsersTable extends Migration
=======
return new class extends Migration
>>>>>>> 0677a04 (Rebuild of dashboard to include home page route, changed routes to use controllers, huge rebuild)
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('users', function (Blueprint $table) {
      $table->id();
      $table->string('name');
      $table->string('email')->unique();
      $table->timestamp('email_verified_at')->nullable();
      $table->string('password');
      $table->rememberToken();
<<<<<<< HEAD
      $table->foreignId('current_team_id')->nullable();
      $table->string('profile_photo_path', 2048)->nullable();
=======
      $table->string('profile_photo_path', 2048)->nullable();
      $table->boolean('is_admin')->default(false);
>>>>>>> 0677a04 (Rebuild of dashboard to include home page route, changed routes to use controllers, huge rebuild)
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
    Schema::dropIfExists('users');
  }
<<<<<<< HEAD
}
=======
};
>>>>>>> 0677a04 (Rebuild of dashboard to include home page route, changed routes to use controllers, huge rebuild)
