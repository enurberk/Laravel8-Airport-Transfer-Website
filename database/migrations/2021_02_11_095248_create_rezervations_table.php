<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRezervationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rezervations', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->integer('user_id')->nullable();
            $table->integer('transfer_id')->nullable();
            $table->string('pick_up_location', 100)->nullable();
            $table->string('drop_off_location', 100)->nullable();
            $table->float('price')->nullable();
            $table->date('pick_up_date')->nullable();
            $table->time('pick_up_time')->nullable();
            $table->string('note', 100)->nullable();
            $table->string('ip', 100)->nullable();
            $table->string('status', 30)->nullable()->default('New');
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
        Schema::dropIfExists('rezervations');
    }
}
