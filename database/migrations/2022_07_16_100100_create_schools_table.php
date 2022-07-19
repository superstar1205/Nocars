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
        Schema::create('schools', function (Blueprint $table) {
            $table->id();
            $table->string('name', 63);
            $table->string('seed', 15);
            $table->unsignedSmallInteger('pupils');
            $table->string('address', 254);
            $table->string('town', 127);
            $table->string('county', 63);
            $table->string('postcode', 15);
            $table->string('contact_name', 31);
            $table->string('contact_email', 254);
            $table->string('office_email', 254);
            $table->string('telephone', 15);
            $table->boolean('modeshift');
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
        Schema::dropIfExists('schools');
    }
};
