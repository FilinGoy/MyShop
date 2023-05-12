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
        Schema::table('products', function (Blueprint $table) {
            $table->foreign(['brand_id'], 'products_fk1')->references(['id'])->on('brands');
            $table->foreign(['expiration_type_id'], 'products_fk3')->references(['id'])->on('time_types');
            $table->foreign(['weight_type_id'], 'products_fk5')->references(['id'])->on('weight_types');
            $table->foreign(['category_id'], 'products_fk0')->references(['id'])->on('categories');
            $table->foreign(['manufacturer_id'], 'products_fk2')->references(['id'])->on('manufacturers');
            $table->foreign(['packaging_id'], 'products_fk4')->references(['id'])->on('packaging_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropForeign('products_fk1');
            $table->dropForeign('products_fk3');
            $table->dropForeign('products_fk5');
            $table->dropForeign('products_fk0');
            $table->dropForeign('products_fk2');
            $table->dropForeign('products_fk4');
        });
    }
};
