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
        Schema::table('reviews', function (Blueprint $table) {
            $table->foreign(['product_id'], 'reviews_fk1')->references(['id'])->on('products')->onDelete('cascade');
            $table->foreign(['user_id'], 'reviews_fk0')->references(['id'])->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('reviews', function (Blueprint $table) {
            $table->dropForeign('reviews_fk1');
            $table->dropForeign('reviews_fk0');
        });
    }
};
