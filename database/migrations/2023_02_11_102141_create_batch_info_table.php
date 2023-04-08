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
        Schema::create('batch_info', function (Blueprint $table) {
            $table->id();
            $table->string('batch_name');
            $table->string('batch_detail');
            $table->date('from_batch');
            $table->date('to_batch');
            $table->integer('status');
            $table->timestamps();
        });
    }

    // ['batch_name','batch_detail','batch_start','duration','status','start_time','end_time'];

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('batch_info');
    }
};
