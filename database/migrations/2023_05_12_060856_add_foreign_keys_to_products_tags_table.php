<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products_tags', function (Blueprint $table) {
            $table->foreign(['tag_id'], 'products_tags_fk1')->references(['id'])->on('tags')->onDelete('cascade');
            $table->foreign(['product_id'], 'products_tags_fk0')->references(['id'])->on('products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products_tags', function (Blueprint $table) {
            $table->dropForeign('products_tags_fk1');
            $table->dropForeign('products_tags_fk0');
        });
    }
};
