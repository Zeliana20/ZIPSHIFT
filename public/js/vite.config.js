import { defineConfig } from 'vite';

export default defineConfig({
  build: {
    rollupOptions: {
      input: './index.html',  // Menentukan bahwa 'index.html' adalah entry point
    },
  },
});
