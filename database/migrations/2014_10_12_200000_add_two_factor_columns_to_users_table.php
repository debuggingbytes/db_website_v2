<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

<<<<<<< HEAD
class AddTwoFactorColumnsToUsersTable extends Migration
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
        Schema::table('users', function (Blueprint $table) {
            $table->text('two_factor_secret')
                    ->after('password')
                    ->nullable();

            $table->text('two_factor_recovery_codes')
                    ->after('two_factor_secret')
                    ->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('two_factor_secret', 'two_factor_recovery_codes');
        });
    }
<<<<<<< HEAD
}
=======
};
>>>>>>> 0677a04 (Rebuild of dashboard to include home page route, changed routes to use controllers, huge rebuild)
