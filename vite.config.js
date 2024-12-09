import { defineConfig } from 'vite';
import react from '@vitejs/plugin-react';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        react(), // Ensure React is handled
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
                'resources/sass/styling.scss',
            ],
            refresh: true,
        }),
    ],
    esbuild: {
        loader: {
            '.js': 'jsx',  // Ensure .js files are parsed as JSX
        },
    },
});
