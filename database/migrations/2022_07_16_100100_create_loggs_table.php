<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoggsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loggs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->default(0);      // user performing the action or zero
            $table->unsignedBigInteger('target_id')->default(0);    // user action is performed on or zero
            $table->string('type', 50);                             // type of action
            $table->string('title', 100);                           // short descriptive title of action
            $table->text('content');                                // full details of action
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
        Schema::dropIfExists('loggs');
    }
}
