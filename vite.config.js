import { defineConfig } from 'vite';
import react from '@vitejs/plugin-react';
import laravel from 'laravel-vite-plugin';
import react from '@vitejs/plugin-react';

export default defineConfig({
    plugins: [
        react(), // Ensure React is handled
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.jsx',
                'resources/sass/styling.scss',
            ],
            refresh: true,
        }),
        react(),
    ],
    esbuild: {
        loader: {
            '.js': 'jsx',  // Ensure .js files are parsed as JSX
        },
    },
});
