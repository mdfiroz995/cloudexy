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
        Schema::create('customisations', function (Blueprint $table) {
            $table->id();
            $table->string('headerlogo')->nullable();
            $table->string('footerlogo')->nullable();
            $table->string('adminlogo')->nullable();
            $table->string('email')->nullable();
            $table->string('phoneno')->nullable();
            $table->string('address')->nullable();
            $table->string('copyright')->nullable();
            $table->string('facebook')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('instagram')->nullable();
            $table->string('twitter')->nullable();
            $table->string('youtube')->nullable();
            $table->integer('creative_score')->nullable();
            $table->integer('trackable_score')->nullable();
            $table->integer('guaranteed_score')->nullable();
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
        Schema::dropIfExists('customisations');
    }
};
