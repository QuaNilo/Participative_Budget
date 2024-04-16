
import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import path from "path";

export default defineConfig({
    build: {
        commonjsOptions: {
            include: ["frontend-tailwind.config.js", "node_modules/**"],
        },
    },
    optimizeDeps: {
        include: ["tailwind-config"],
    },
    plugins: [
        laravel({
            input: [
                'resources/tailwind-assets/scss/icons.scss',
                'resources/tailwind-assets/scss/app.scss',
                'resources/tailwind-assets/js/app.js',
                'resources/tailwind-assets/js/easy_background.js',
                'resources/tailwind-assets/js/plugins.init.js',
                // 'public/assets-frontend/images/saas/cta.jpg',
                //'public/assets-frontend/images/overlay.png',


                "resources/js/vendor/dom/index.js",

                "resources/js/vendor/lucide/index.js",
                "resources/js/components/lucide/index.js",

                //Tom Select
                "resources/js/vendor/tom-select/index.js",
                "resources/js/components/tom-select/index.js",
                "resources/js/vendor/toastify/index.js",

                // flatpickr
                "resources/js/vendor/flatpickr/index.js",
                "resources/js/components/flatpickr/index.js",
                "resources/css/components/_flatpickr.css",
            ],
            buildDirectory: '/frontend-assets',
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
            "tailwind-config": path.resolve(__dirname, "./frontend-tailwind.config.js"),
        },
    },
});
