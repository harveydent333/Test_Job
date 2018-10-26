<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('files', function (Blueprint $table) {
          $table->engine = 'InnoDB';
            $table->increments('id_file');
            $table->string('has_file')->unique();
            $table->string('name');
            $table->integer('size');
            $table->string('path');
            $table->string('description');
            $table->integer('id_client')->unsigned()->nullable();
            $table->timestamps();
        });
        Schema::table('files', function($table) {
      $table->foreign('id_client')->references('id_client')->on('clients');
  });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('files');
    }
}
