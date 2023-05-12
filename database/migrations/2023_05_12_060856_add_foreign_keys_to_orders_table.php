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
        Schema::table('orders', function (Blueprint $table) {
            $table->foreign(['status_id'], 'orders_fk1')->references(['id'])->on('statuses');
            $table->foreign(['user_id'], 'orders_fk0')->references(['id'])->on('users')->onDelete('cascade');
            $table->foreign(['payment_id'], 'orders_fk2')->references(['id'])->on('payment_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->dropForeign('orders_fk1');
            $table->dropForeign('orders_fk0');
            $table->dropForeign('orders_fk2');
        });
    }
};
