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
        Schema::create('orders', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('user_id')->index('orders_fk0');
            $table->integer('status_id')->index('orders_fk1');
            $table->date('datetime');
            $table->dateTime('datetime_delivery')->nullable();
            $table->decimal('total_price', 10, 0);
            $table->integer('payment_id')->index('orders_fk2');
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
        Schema::dropIfExists('orders');
    }
};
