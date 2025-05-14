import { defineConfig, loadEnv } from 'vite';
import laravel from 'laravel-vite-plugin';
import { svelte } from '@sveltejs/vite-plugin-svelte';

export default defineConfig(( { mode }) => {

    const env = loadEnv(mode, process.cwd());

    return {
        server: {
            host: '0.0.0.0', // listen on all interfaces (inside Docker)
            port: 5173,      // default Vite port
            hmr: {
                host: 'rex.localhost', // or the hostname you use in your browser (e.g. app.test)
                protocol: 'ws',
                port: 5173,
            },
        },
        plugins: [
            laravel({
                input: ['resources/css/app.scss', 'resources/js/app.js'],
                refresh: true,
            }),
            svelte(),
        ],
    };

});
