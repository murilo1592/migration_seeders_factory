<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ContrangeDepartmentsCategory extends Migration
{
    public function up()
    {
        Schema::table('departments', function (Blueprint $table) {

            $table->unsignedInteger('category');
            $table->foreign('category')
                ->references('id')
                ->on('categories')
                ->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::table('categories', function (Blueprint $table) {

            $table->dropColumn('category');
        });
    }
}
