<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->string('payment_type', 4)->default('VISA');
            $table->string('cardname', 30);
            $table->integer('nationalcardid');
            $table->integer('invoicenumber')->nullable()->unique('payments_invoicenumber_key');
            $table->date('expiration_date');
            $table->decimal('payprice');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payments');
    }
}
