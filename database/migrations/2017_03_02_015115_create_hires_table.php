<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHiresTable extends Migration
{

    public function up()
    {
        Schema::create('hires', function (Blueprint $table) {
            $table->increments('id');
            $table->string('names');
            $table->string('email');
            $table->string('subject');
            $table->string('message');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('hires');
    }
}
