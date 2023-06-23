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
        Schema::create('subpages', function (Blueprint $table) {
            $table->id();
            $table->integer('mainmenuid');
            $table->integer('submenuid');
            $table->integer('pageid');
            $table->text('subpagename');
            $table->text('slug');
            $table->text('meta');
            $table->text('content');
            $table->integer('priority');
            $table->integer('isactive');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subpages');
    }
};
