<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBankcardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bankcards', function (Blueprint $table) {
            $table->integer('nationalcardid')->primary('bankcards_pkey');
            $table->string('cardnumber', 10);
            $table->string('threedigitcode', 3);
            $table->date('expiration_date');
            $table->string('card_username', 30);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bankcards');
    }
}
