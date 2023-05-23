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
        Schema::create('products', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('title');
            $table->integer('category_id')->index('products_fk0');
            $table->integer('brand_id')->nullable()->index('products_fk1');
            $table->integer('manufacturer_id')->index('products_fk2');
            $table->integer('expiration_date')->nullable();
            $table->integer('expiration_type_id')->nullable()->index('products_fk3');
            $table->string('article')->nullable();
            $table->integer('packaging_id')->nullable()->index('products_fk4');
            $table->text('ingredients');
            $table->integer('weight')->nullable();
            $table->integer('weight_type_id')->nullable()->index('products_fk5');
            $table->integer('calorie')->nullable();
            $table->integer('count')->default(0);
            $table->decimal('price', 10)->default(0);
            $table->text('description')->nullable();
            $table->boolean('published')->default(false);
            $table->string('preview_image')->nullable();
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
        Schema::dropIfExists('products');
    }
};
