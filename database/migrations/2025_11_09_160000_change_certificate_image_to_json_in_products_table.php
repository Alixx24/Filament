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
     Schema::table('products', function (Blueprint $table) {
    if (Schema::hasColumn('products', 'certificate_image')) {
        $table->renameColumn('certificate_image', 'certificate_images');
        $table->json('certificate_images')->nullable()->change();
    } else {
        $table->json('certificate_images')->nullable();
    }
});

    }

    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->string('certificate_image')->nullable();
            $table->dropColumn('certificate_images');
        });
    }
};
