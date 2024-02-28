<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWebHostingOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('web_hosting_orders', function (Blueprint $table) {
            $table->id();
            $table->integer('webhosting_id')->nullable();
            $table->string('domain_name')->nullable();
            $table->string('customer_name')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->text('address')->nullable();
            $table->string('bkash_number')->nullable();
            $table->string('customer_bkash_number')->nullable();
            $table->string('transaction_id')->nullable();
            $table->text('order_note')->nullable();
            $table->boolean('is_check')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('web_hosting_orders');
    }
}
