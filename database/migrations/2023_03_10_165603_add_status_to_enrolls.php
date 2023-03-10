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
        Schema::table('enrolls', function (Blueprint $table) {
            $table->enum('status', ['accepted', 'pending', 'cancelled'])->default('pending');
            $table->string('order_number')->nullable();
            $table->string('payment_number')->nullable();
            $table->string('transaction_id')->nullable();
            $table->string('reference_number')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('enrolls', function (Blueprint $table) {
            //
        });
    }
};
