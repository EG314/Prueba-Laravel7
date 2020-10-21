<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Relations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Migration for table mediables (media_id - foreing key) to table media (id - primary key)
        schema::table('mediables', function(Blueprint $table){
            $table->foreign('media_id')->references('id')->on('media');
        });
        //Migration for table media (status_id - foreing key) to table statuses (id - primary key)
        Schema::table('media', function(Blueprint $table){
            $table->foreign('status_id')->references('id')->on('statuses');
        });

        Schema::table('users', function(Blueprint $table){
            $table->foreign('status_id')->references('id')->on('statuses');
            $table->foreign('role_id')->references('id')->on('roles');
            $table->foreign('career_id')->references('id')->on('careers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Reverse the migration for table mediables (media_id - foreing key) to table media(id - primary key)
        Schema::table('mediables', function(Blueprint $table){
            $table->dropForeign(['media_id']);
        });

        Schema::table('media', function(Blueprint $table){
            $table->dropForeign(['status_id']);
        });

        Schema::table('users', function(Blueprint $table){
            $table->dropForeign(['status_id']);
            $table->dropForeign(['role_id']);
            $table->dropForeign(['career_id']);
        });
    }
}
