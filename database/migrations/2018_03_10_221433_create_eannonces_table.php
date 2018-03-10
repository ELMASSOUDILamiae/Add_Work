<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEannoncesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eannonces', function (Blueprint $table) {
            $table->increments('id');
            $table->string('aw_title')->unique();
            $table->string('aw_core');
            $table->string('aw_img')->nullable();
            $table->integer('entreprises_id')->unsigned();
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
        Schema::dropIfExists('eannonces');
    }
}
