<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

<<<<<<< HEAD
class CreatePasswordResetsTable extends Migration
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
        Schema::create('password_resets', function (Blueprint $table) {
            $table->string('email')->index();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('password_resets');
    }
<<<<<<< HEAD
}
=======
};
>>>>>>> 0677a04 (Rebuild of dashboard to include home page route, changed routes to use controllers, huge rebuild)
