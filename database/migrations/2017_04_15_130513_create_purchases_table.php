<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePurchasesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('purchases', function (Blueprint $table) {
            $table->increments('id');
            $table->string('customerName', 255);
            $table->integer('offeringID')->unsigned();
            $table->integer('quantity');
            $table->timestamps();

//            $table->foreign('offeDringID')
//                    ->references('id')
//                    ->on('offerings')
//                    ->onUpdate('set null')
//                    ->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('purchases');
    }

}
