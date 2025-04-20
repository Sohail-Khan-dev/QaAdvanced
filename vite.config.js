import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    build: {
        // Enable minification
        minify: 'terser',
        // Enable chunk splitting
        rollupOptions: {
            output: {
                manualChunks: {
                    vendor: ['alpinejs', 'axios']
                }
            }
        },
        // Enable source maps for production
        sourcemap: false
    }
});

