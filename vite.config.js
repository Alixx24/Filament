import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
  plugins: [
    laravel({
      input: [
        'resources/views/customer/layouts/js/app.ts', // مسیر فایل TypeScript شما
        'resources/css/app.css'             // مسیر فایل CSS شما
      ],
      refresh: true,
    }),
  ],
});
