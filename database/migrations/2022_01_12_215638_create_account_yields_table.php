<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccountYieldsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('account_yields', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->double('percentage', 6, 2)->default(0);
            $table->double('taxAmount', 8,4)->default(0);
            $table->string('frequency', 1)->default('m');
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
        Schema::dropIfExists('account_yields');
    }
}
