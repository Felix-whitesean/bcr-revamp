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
        //
        Schema::create('input-fields', function (Blueprint $table) {
            $table->id();
            $table->string('form_id')->default(0);
            $table->string('name')->default(0);
            $table->integer('phone_number')->default(0);
            $table->string('email')->default(0);
            $table->string('password')->default(0);
            $table->integer('agreement')->default(0);
            $table->integer('subscription')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
