import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/style.css',
                'resources/css/common.css',
                'resources/css/guide.css',
                'resources/css/dashboard.css',

                'resources/js/app.js',
                'resources/js/firebase.js',
                'resources/js/main.js',
                'resources/js/dashboard.js',
                'resources/js/lazy-load.js'
            ],
            refresh: true,
        }),
    ]
});
