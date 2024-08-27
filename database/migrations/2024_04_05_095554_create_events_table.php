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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('title', 255);
            $table->text('description', 255)->nullable();
            $table->string('place')->nullable();
            $table->datetime('date')->nullable();
            $table->datetime('end_time')->nullable();
            $table->unsignedInteger('capacity')->nullable()-> default(50);
            $table->string('organizer',100)->nullable();
            $table->string('image_url')->nullable();
            $table->timestamps();
        });

        // Relationship 
        

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
