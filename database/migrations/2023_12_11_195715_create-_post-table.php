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
        Schema::create('Post', function (Blueprint $table) {
            $table->id();
            $table->string('Title', 100);
            $table->longText('Auther');
            $table->longText('Content');
            $table->longText('About');
            $table->longText('Comments');
            $table->boolean('Published');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Post');
    }
};
