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
        Schema::create('topic_name', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description')->nullable();
            $table->string('topic_id'); // this is the ID used in the front of the topic syllabus . 
            // Add the learning_category_id column first
            $table->unsignedBigInteger('learning_category_id');

            // Define the foreign key properly
            $table->foreign('learning_category_id')->references('id')->on('learning_categories');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('topic_name');
    }
};
