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
        Schema::create('announcements', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sender_id');
            $table->string('title');
            $table->text('content');
            $table->boolean('isPublished')->default(false);
            $table->timestamp('published_at')->nullable();
            $table->timestamps(); //  Laravel will create both the created_at and updated_at columns.
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('announcements');
    }
};
