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
    Schema::create('provinces', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->foreignId('country_id')->constrained()->onDelete('cascade');
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
        Schema::dropIfExists('provinces');
    }
};
