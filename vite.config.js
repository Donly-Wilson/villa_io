import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
// import path from "path";

export default defineConfig({
    plugins: [
        laravel({
            input: ["resources/css/styles.scss", "resources/js/app.js"],
            refresh: true,
        }),
    ],
    // server: {
    //     host: "localhost:8080",
    //     watch: {
    //         usePolling: true,
    //     },
    // },
    // resolve: {
    //     alias: {
    //         "~bootstrap": path.resolve(__dirname, "node_modules/bootstrap"),
    //     },
    // },
});
