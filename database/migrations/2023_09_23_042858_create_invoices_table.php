<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->string('number');
            $table->integer('product_id');
            $table->integer('customer_id')->unsigned();
            $table->date('date');
            $table->date('due_date');
            $table->string('reference')->nullable();
            $table->double('sub_total_usd');
            $table->double('discount_usd')->default(0);
            $table->double('total_usd');
            $table->double('sub_total_pln');
            $table->double('discount_pln')->default(0);
            $table->double('total_pln');
            $table->string('vat');
            $table->string('exchange_rate');
            $table->string('say_total');
            $table->integer('quantity')->unsigned()->default(1);
            $table->string('uom')->default('szt');
            $table->string('cn_code')->nullable();
            $table->string('signature');
            $table->text('notes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
};
