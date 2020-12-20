<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToPaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('payments', function (Blueprint $table) {
            $table->foreign('nationalcardid', 'usernamepaid')->references('nationalcardid')->on('bankcards')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign('invoicenumber', 'paymentofinvoice')->references('invoicenumber')->on('invoices')->onUpdate('CASCADE')->onDelete('SET NULL');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('payments', function (Blueprint $table) {
            $table->dropForeign('usernamepaid');
            $table->dropForeign('paymentofinvoice');
        });
    }
}
