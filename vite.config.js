import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import path from "path";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/css/app.css",
                "resources/scss/app.scss",
                "resources/js/app.js",
            ],
            refresh: ["resources/views/**"],
        }),
    ],
    resolve: {
        alias: {
            // Tambahkan alias untuk Bootstrap jika diperlukan
            "bootstrap-css": path.resolve(
                __dirname,
                "node_modules/bootstrap/dist/css/bootstrap.min.css"
            ),
            "bootstrap-js": path.resolve(
                __dirname,
                "node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"
            ),
        },
    },
});
