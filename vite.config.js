import { defineConfig } from 'vite'
import laravel, { refreshPaths } from 'laravel-vite-plugin'

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: [
                ...refreshPaths,
                'app/Filament/**',
                'app/Forms/Components/**',
                'app/Livewire/**',
                'app/Infolists/Components/**',
                'app/Providers/Filament/**',
                'app/Tables/Columns/**',
                'resources/js/tiptap/custom-extensions.js',
            ],
        }),
    ],
    build: {
        rollupOptions: {
            input: {
                app: 'resources/js/app.js',
                tiptapExtensions: 'resources/js/tiptap-extensions.js',
            },
        },
    },
})
