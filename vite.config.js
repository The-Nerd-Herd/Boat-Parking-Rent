import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/js/user-delete-popup.js',
                'resources/js/jquery.min.js',
                'resources/js/edit.js',
            ],
            refresh: true,
        }),
    ],
});

