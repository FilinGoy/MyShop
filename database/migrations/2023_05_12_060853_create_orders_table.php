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
            $table->integer('user_id')->index('orders_fk0')->nullable();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('address');
            $table->string('description')->nullable();
            $table->integer('status_id')->index('orders_fk1');
            $table->dateTime('datetime_delivery')->nullable();
            $table->decimal('total_price');
            $table->decimal('price', 10)->default(0);
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
