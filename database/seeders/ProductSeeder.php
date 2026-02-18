<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'category_id' => 1,
                'name' => 'Gemini Pro Account',
                'slug' => Str::slug('Gemini Pro Account'),
                'description' => 'Premium Google Gemini AI account with extended usage.',
                'description_fa' => 'اکانت حرفه‌ای جمینای گوگل با دسترسی نامحدود و سرعت بالا.',
                'price' => 1500000,
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 1,
                'name' => 'Cursor AI Pro License',
                'slug' => Str::slug('Cursor AI Pro License'),
                'description' => 'Premium Cursor AI coding assistant subscription.',
                'description_fa' => 'لایسنس حرفه‌ای کرسر برای برنامه‌نویسی با هوش مصنوعی.',
                'price' => 2200000,
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 1,
                'name' => 'ChatGPT Plus Account',
                'slug' => Str::slug('ChatGPT Plus Account'),
                'description' => 'ChatGPT Plus subscription with GPT-4 access.',
                'description_fa' => 'اشتراک چت جی‌پی‌تی پلاس با دسترسی به GPT-4.',
                'price' => 1800000,
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 1,
                'name' => 'Gemini Advanced Business',
                'slug' => Str::slug('Gemini Advanced Business'),
                'description' => 'Business plan for teams using Gemini AI.',
                'description_fa' => 'پلن تجاری جمینای مناسب تیم‌ها و شرکت‌ها.',
                'price' => 3500000,
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
