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
        Schema::create('cocktails', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();
            $table->string('name')->unique();
            $table->text('image')->nullable();
            $table->tinyInteger('alcoholic_level')->unsigned();
            $table->string('type');
            $table->boolean('with_ice')->default(true);
            $table->string('glass_type');
            $table->float('crafting_difficulty', 2, 1)->unsigned();
            $table->tinyInteger('crafting_time')->unsigned();
            $table->float('price', 3, 2)->unsigned();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cocktails');
    }
};
