<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ReferenceCategoriesPosts extends Migration
{
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {

            $table->unsignedInteger('category');

            $table->foreign('category')
                ->references('id')
                ->on('categories')
                ->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {

            $table->dropForeign('posts_category_foreign');
            $table->dropColumn('category');
        });
    }
}
