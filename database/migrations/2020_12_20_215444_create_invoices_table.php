<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->integer('invoicenumber')->primary('invoices_pkey');
            $table->integer('order_id');
            $table->smallInteger('order_details_id');
            $table->string('inv_format', 3)->default('.PDF');
            $table->string('productcode', 50);
            $table->date('date');
            $table->smallInteger('quantity')->default(1);
            $table->decimal('unitprice');
            $table->decimal('discount_rate', 2);
            $table->decimal('price');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invoices');
    }
}
