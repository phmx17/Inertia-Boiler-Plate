// this is from updated laravel docs since the inertia is incomplete:
// https://laravel.com/docs/10.x/vite#vue
import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';
import VueDevtools from 'vite-plugin-vue-devtools' // chrome extension

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        vue({
            template: {
                transformAssetUrls: {
                    base: null,
                    includeAbsolute: false,
                },
            },
        }),
        VueDevtools(),
    ],
    // Enable Vue Devtools for development
    server: {
        proxy: {
            '/__open-in-editor': 'http://localhost:8098'
        },
    },
});


