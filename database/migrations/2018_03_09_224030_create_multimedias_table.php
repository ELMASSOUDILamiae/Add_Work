<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMultimediasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('multimedias', function (Blueprint $table) {
            $table->increments('id');
            $table->string('aw_title')->unique();
            $table->string('aw_desc');
            $table->string('aw_typ')->nullable();
            $table->string('aw_link');
            $table->integer('admin_id')->unsigned();

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
        Schema::dropIfExists('multimedias');
    }
}
