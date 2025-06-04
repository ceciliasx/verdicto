import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js','resources/css/lawyer_style.css','resources/js/lawyer_script.js',],
            refresh: true,
        }),
    ],
});
