<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('work_offers', function (Blueprint $table) {
            $table->id();
            $table->string('nameGiver');
            $table->string('nameWorker');
            $table->string('phoneGiver');
            $table->string('emailGiver');
            $table->string('emailWorker');
            $table->string('phoneWorker');
            $table->string('message');
            $table->integer('idGiver');
            $table->integer('idWorker');
            $table->string('status')->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('work_offers');
    }
};
