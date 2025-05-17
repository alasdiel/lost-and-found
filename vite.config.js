import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                // Path to CSS files
                'resources/css/app.css',
                'resources/css/profile-styles.css',
                'resources/css/styles.css',
                'resources/css/log-styles.css',
                'resources/css/form_styles.css',
                'resources/css/admin_styles.css',
                // Path to JS files
                'resources/js/app.js',
                'resources/js/bootstrap.js',
                'resources/js/profile-script.js',
                'resources/js/script.js',
            ],
            refresh: true,
        }),
    ],
});
