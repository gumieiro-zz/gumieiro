<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cards', function (Blueprint $table) {
            $table->id();
            $table->double('limit', 12, 0, TRUE)->default(0);
            $table->integer('paymentDay', FALSE, TRUE);
            $table->foreignId('account_id');
            $table->double('late_interest',8,3)->default(0); // Juros de atraso
            $table->double('installment_interest',8,3)->default(0); // Juros de parcelamento
            $table->double('annuity', 8,2)->default(0); // anuidade
            $table->double('fine', 8,2)->default(0); // multa de atraso
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cards');
    }
}
