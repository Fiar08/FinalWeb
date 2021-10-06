<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHp extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hp', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('type');
            $table->string('vga');
            $table->string('cpu');
            $table->string('ram');
            $table->string('storage');
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
        Schema::dropIfExists('hp');
    }
}
