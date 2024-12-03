import { defineConfig } from "vite";
import { resolve } from "path";

export default defineConfig({
  build: {
    outDir: "build",
    sourcemap: true,
    manifest: true,
    lib: {
      entry: resolve(__dirname, "./js/main.js"),
      name: "drupalTheme",
      formats: ["es"],
      fileName: () => "main.js",
    },
    rollupOptions: {
      output: {
        assetFileNames: (assetInfo) => {
          if (assetInfo.names?.some((name) => name.endsWith(".css"))) {
            return "styles.css";
          }
          return "[name].[ext]";
        },
      },
    },
  },
  define: {
    Alpine: "Alpine",
  },
  plugins: [],
  css: {
    devSourcemap: true,
    extract: "styles.css",
    postcss: true,
  },
  resolve: {
    alias: {
      alpinejs: "alpinejs",
    },
  },
});
