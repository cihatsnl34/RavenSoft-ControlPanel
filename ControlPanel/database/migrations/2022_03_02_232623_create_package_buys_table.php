<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackageBuysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('package_buys', function (Blueprint $table) {
            $table->id();
            $table->string('buyerName');
            $table->string('email');
            $table->string('phone');
            $table->string('packageTitle');
            $table->integer('packetDuration');
            $table->string('licenseKey')->unique();
            $table->integer('price');
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
        Schema::dropIfExists('package_buys');
    }
}
