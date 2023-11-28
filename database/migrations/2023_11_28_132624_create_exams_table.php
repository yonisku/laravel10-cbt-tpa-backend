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
        Schema::create('exams', function (Blueprint $table) {
            $table->id();
            //user_id
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            //grade of numeric, verbal & logical
            $table->integer('grade_numeric')->nullable();
            $table->integer('grade_verbal')->nullable();
            $table->integer('grade_logical')->nullable();
            //result
            $table->string('result')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exams');
    }
};
