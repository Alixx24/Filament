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
        Schema::create('posts', function (Blueprint $table) {
           
            $table->string('title'); 
            $table->string('slug')->unique(); 
            $table->text('summary')->nullable(); 
            $table->longText('content'); 

            // اطلاعات نویسنده و دسته‌بندی
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); 
            $table->foreignId('category_id')->nullable()->constrained()->nullOnDelete(); 

       
            $table->enum('status', ['draft', 'published', 'archived'])->default('draft');
            $table->timestamp('published_at')->nullable(); 

            // seo
            $table->string('meta_title')->nullable(); 
            $table->string('meta_description', 300)->nullable(); 
            $table->string('meta_keywords')->nullable(); 
            $table->string('canonical_url')->nullable(); 

            // images info
            $table->string('thumbnail')->nullable(); // تصویر شاخص
            $table->string('alt_text')->nullable(); // متن جایگزین برای تصویر (برای SEO تصاویر)

            // static
            $table->unsignedBigInteger('views')->default(0); // تعداد بازدید
            $table->boolean('is_featured')->default(false); // important post or no

            $table->timestamps();
            $table->softDeletes(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
