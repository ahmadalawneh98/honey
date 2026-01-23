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
        Schema::create('products', function (Blueprint $table) {
            $table->id();

            $table->foreignId('category_id')
                ->constrained()
                ->cascadeOnDelete();

            // العناوين
            $table->string('title_ar');
            $table->string('title_en');
            $table->string('title_fr');
            $table->string('title_es');

            // الأوصاف
            $table->text('description_ar')->nullable();
            $table->text('description_en')->nullable();
            $table->text('description_fr')->nullable();
            $table->text('description_es')->nullable();

            // أحجام العبوات (مثال: 250ml, 500ml, 1L)
            $table->json('sizes')->nullable();

            // صور المنتج
            $table->json('images')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
