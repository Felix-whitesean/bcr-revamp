import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
            server: {
                host: '0.0.0.0',
                hmr: {
                    protocol: 'wss',
                    host: 'https://48a7-102-208-183-98.ngrok-free.app', // Replace with your actual ngrok URL
                }
            }
        }),
    ],
      
});
