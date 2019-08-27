<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id')->references('id')->on('users');
            $table->integer('subject_id')->references('id')->on('subjects');
            $table->integer('documentType_id')->references('id')->on('documentTypes');
            $table->dateTimeTz('deadline_datetime');
            $table->string('level');
            $table->decimal('suggested_price', 8, 2);
            $table->string('title');
            $table->longText('task');
            $table->integer('pages');
            $table->integer('spacing');
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
        Schema::dropIfExists('tasks');
    }
}
