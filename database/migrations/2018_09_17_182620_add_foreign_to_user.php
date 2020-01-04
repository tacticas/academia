<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignToUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->foreign('server_id')->references('id')->on('servers');
            $table->foreign('role_id')->references('id')->on('roles');
            $table->foreign('league_id')->references('id')->on('leagues');
            $table->foreign('type_id')->references('id')->on('types');
        });
        Schema::table('descriptions', function (Blueprint $table) {
            $table->foreign('idUser')->references('id')->on('users')->onDelete('cascade');
   
        });
        schema::table('reviews',function (Blueprint $table){
            $table->foreign('stud_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('coach_id')->references('id')->on('users')->onDelete('cascade');
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
            $table->dropForeign(['server_id']);
            $table->dropForeign(['role_id']);
            $table->dropForeign(['league_id']);
        });
        Schema::table('descriptions', function (Blueprint $table) {
            $table->dropForeign(['idUser']);
   
        });
        Schema::table('reviews', function (Blueprint $table) {
            $table->dropForeign(['stud_id']);
            $table->dropForeign(['coach_id']);
   
        });
    }
}
