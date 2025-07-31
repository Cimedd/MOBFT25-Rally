import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from "@tailwindcss/vite";

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/css/style-jungle-clash.css','resources/js/app.js', 'resources/js/jungle-clash.js'],
            refresh: true,
        }),
        tailwindcss()
    ],
});
