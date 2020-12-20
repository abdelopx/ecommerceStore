<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_details', function (Blueprint $table) {
            $table->integer('order_id')->unique('order_details_order_id_key');
            $table->smallInteger('order_details_id');
            $table->string('o_productcode', 50);
            $table->smallInteger('quantity')->default(1);
            $table->decimal('unitprice');
            $table->decimal('discount', 2);
            $table->primary(['order_id', 'order_details_id', 'o_productcode'], 'order_details_pkey');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_details');
    }
}
