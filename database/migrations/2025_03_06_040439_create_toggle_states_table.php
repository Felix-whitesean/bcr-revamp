<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('toggle_states', function (Blueprint $table) {
            $table->id();
            $table->boolean('is_on')->default(false);
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('toggle_states');
    }
};
