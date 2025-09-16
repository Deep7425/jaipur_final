<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->text('description')->nullable();
            $table->text('short_description')->nullable();
            $table->decimal('regular_price', 10, 2);
            $table->decimal('sale_price', 10, 2)->nullable();
            $table->string('sku')->unique();
            $table->integer('quantity')->default(0);
            $table->enum('stock_status', ['instock', 'outofstock'])->default('instock');
            
            // Image Fields
            $table->string('image')->nullable();
            $table->string('thumbnail_image')->nullable();
            
            // Status Fields
            $table->boolean('is_active')->default(true);
            $table->boolean('featured')->default(false);
            $table->enum('thumbnail_status', ['show', 'hide'])->default('show');
            
            // Additional Fields
            $table->unsignedBigInteger('category_id')->nullable();
            $table->unsignedBigInteger('brand_id')->nullable();
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->string('meta_keywords')->nullable();
            $table->integer('views')->default(0);
            $table->integer('sort_order')->default(0);
            
            $table->timestamps();
            $table->softDeletes();
            
            // Indexes for Performance
            $table->index(['thumbnail_status', 'is_active'], 'idx_thumbnail_display');
            $table->index(['featured', 'is_active'], 'idx_featured_active');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
