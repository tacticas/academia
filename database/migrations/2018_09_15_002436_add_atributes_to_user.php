<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAtributesToUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('apellido',50)->default('Anon');
            $table->string('nombre_de_invocador',70)->unique();
            $table->integer('server_id')->unsigned();
            $table->integer('role_id')->unsigned();
            $table->integer('league_id')->unsigned();
            $table->float('price')->length(11)->nullable();
            $table->string('img',256)->nullable();
            $table->longText('about')->nullable();
            $table->integer('type_id')->unsigned();;
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
            $table->dropColumn('apellido');
            $table->dropColumn('nombre_de_invocador');
            $table->dropColumn('server_id');
            $table->dropColumn('role_id');
            $table->dropColumn('league_id');
            $table->dropColumn('price');
            $table->dropColumn('img');
            $table->dropColumn('about');
            $table->dropColumn('type_id');
        });
    }
}
