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
        Schema::table('orders_products', function (Blueprint $table) {
            $table->foreign(['order_id'], 'orders_products_fk1')->references(['id'])->on('orders')->onDelete('cascade');
            $table->foreign(['product_id'], 'orders_products_fk0')->references(['id'])->on('products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('orders_products', function (Blueprint $table) {
            $table->dropForeign('orders_products_fk1');
            $table->dropForeign('orders_products_fk0');
        });
    }
};
