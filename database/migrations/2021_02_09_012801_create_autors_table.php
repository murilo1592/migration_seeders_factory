<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAutorsTable extends Migration
{
    public function up()
    {
        Schema::create('autors', function (Blueprint $table) {
            $table->increments('id');
            $table->char('name', '191');
            $table->string('email');
            $table->string('construction');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('autors');
    }
}
