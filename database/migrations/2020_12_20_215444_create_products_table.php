<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->string('productcode', 50)->primary('products_pkey');
            $table->string('description', 150);
            $table->date('indate');
            $table->smallInteger('quantityonhand');
            $table->decimal('price')->nullable();
            $table->decimal('discount', 2)->default(0.00);
            $table->string('supplier', 20);
            $table->string('path')->nullable();
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
}
