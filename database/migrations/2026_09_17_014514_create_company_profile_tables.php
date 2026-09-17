<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // Tabel Artikel
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('content');
            $table->string('image')->nullable();
            $table->timestamps();
        });

        // Tabel Event
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->date('event_date');
            $table->string('location');
            $table->text('description');
            $table->string('image')->nullable();
            $table->timestamps();
        });

        // Tabel Galeri
        Schema::create('galleries', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('image_url');
            $table->timestamps();
        });

        // Tabel Klien
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('logo_url')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('clients');
        Schema::dropIfExists('galleries');
        Schema::dropIfExists('events');
        Schema::dropIfExists('articles');
    }
};
