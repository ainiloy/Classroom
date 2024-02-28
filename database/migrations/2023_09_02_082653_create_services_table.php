<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('slug')->nullable();
            $table->text('image')->nullable();
            $table->longText('short_description')->nullable();
            $table->longText('business_plan')->nullable();
            $table->longText('service_feature')->nullable();
            $table->string('additional_cost_one')->nullable();
            $table->string('cost_one')->nullable();
            $table->string('additional_cost_two')->nullable();
            $table->string('cost_two')->nullable();
            $table->string('additional_cost_three')->nullable();
            $table->string('cost_three')->nullable();
            $table->string('additional_cost_four')->nullable();
            $table->string('cost_four')->nullable();
            $table->longText('support_charge')->nullable();
            $table->longText('training')->nullable();

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
        Schema::dropIfExists('services');
    }
}
