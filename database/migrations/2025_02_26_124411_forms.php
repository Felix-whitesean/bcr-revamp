<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('form_fields', function (Blueprint $table) {
            $table->id();
            $table->string('form_type'); // signup, signin, verification
            $table->string('field_name'); // email, password, phone_number, etc.
            $table->string('field_label'); // 'Email', 'Password', etc.
            $table->string('field_type'); // text, password, email, checkbox, etc.
            $table->boolean('is_required')->default(false);
            $table->integer('maxlength')->nullable();
            $table->string('css_class')->nullable(); // Store styles dynamically
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('form_fields');
    }
};

    
