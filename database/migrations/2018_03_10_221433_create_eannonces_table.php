<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateeannoncesTable extends Migration
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
            $table->string('aw_title');
            $table->longText('aw_core');
            $table->string('aw_img')->nullable();
            $table->integer('entreprise_id')->unsigned();
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
