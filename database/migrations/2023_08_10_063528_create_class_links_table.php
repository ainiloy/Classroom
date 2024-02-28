<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassLinksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('class_links', function (Blueprint $table) {
            $table->id();
            $table->integer('course_id')->nullable();
            $table->integer('batch_id')->nullable();
            $table->integer('class_lesson_id')->nullable();
            $table->integer('vanue_id')->nullable();
            $table->text('class_link')->nullable();
            $table->text('join_link')->nullable();
            $table->text('host_id')->nullable();
            $table->text('meeting_id')->nullable();
            $table->text('meeting_password')->nullable();
            $table->text('meeting_user')->nullable();
            $table->date('start_date')->nullable();
            $table->time('start_time')->nullable();
            $table->date('end_date')->nullable();
            $table->time('end_time')->nullable();
            $table->boolean('status')->default(1);
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
        Schema::dropIfExists('class_links');
    }
}
