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
        Schema::create('sliders', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->text('features');
            $table->text('dimension');
            $table->decimal('price', 10, 2);
            $table->unsignedTinyInteger('rating')->nullable();
            $table->string('color_scheme')->nullable();
            $table->timestamps();
        });
    
        // Creazione della tabella slider_images
        Schema::create('slider_images', function (Blueprint $table) {
            $table->id();
            $table->foreignId('slider_id')->constrained()->onDelete('cascade');
            $table->string('image_path');
            $table->timestamps();
        });
    }
    
    public function down(): void
    {
        // Assicurati di eseguire il rollback in ordine inverso rispetto alla creazione
        Schema::dropIfExists('slider_images');
        Schema::dropIfExists('sliders');
    }
    
};
