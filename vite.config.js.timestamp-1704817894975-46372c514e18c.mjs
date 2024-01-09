// vite.config.js
import { defineConfig } from "file:///C:/Projects/noop/Laravel/OP_project/orcamento_participativo_wstarter/orcamento_participativo_wstarter/node_modules/vite/dist/node/index.js";
import laravel, { refreshPaths } from "file:///C:/Projects/noop/Laravel/OP_project/orcamento_participativo_wstarter/orcamento_participativo_wstarter/node_modules/laravel-vite-plugin/dist/index.mjs";
import { viteStaticCopy } from "file:///C:/Projects/noop/Laravel/OP_project/orcamento_participativo_wstarter/orcamento_participativo_wstarter/node_modules/vite-plugin-static-copy/dist/index.js";
import path from "path";
var __vite_injected_original_dirname = "C:\\Projects\\noop\\Laravel\\OP_project\\orcamento_participativo_wstarter\\orcamento_participativo_wstarter";
var vite_config_default = defineConfig({
  build: {
    commonjsOptions: {
      include: ["tailwind.config.js", "node_modules/**"]
    }
  },
  optimizeDeps: {
    include: ["tailwind-config"]
  },
  plugins: [
    viteStaticCopy({
      targets: [
        { src: "resources/js/vendor/ckeditor/custom/build/ckeditor.js", dest: "js/ckeditor" }
      ]
    }),
    laravel({
      input: [
        // General
        "resources/css/app.css",
        "resources/js/app.js",
        // Vendor
        "resources/js/vendor/accordion/index.js",
        "resources/js/vendor/alert/index.js",
        "resources/js/vendor/calendar/index.js",
        "resources/js/vendor/calendar/index.js",
        "resources/js/vendor/calendar/plugins/day-grid.js",
        "resources/js/vendor/calendar/plugins/interaction.js",
        "resources/js/vendor/calendar/plugins/list.js",
        "resources/js/vendor/calendar/plugins/time-grid.js",
        "resources/js/vendor/chartjs/index.js",
        "resources/js/vendor/ckeditor/balloon/index.js",
        "resources/js/vendor/ckeditor/balloon-block/index.js",
        "resources/js/vendor/ckeditor/classic/index.js",
        "resources/js/vendor/ckeditor/document/index.js",
        "resources/js/vendor/ckeditor/inline/index.js",
        "resources/js/vendor/dom/index.js",
        "resources/js/vendor/dropdown/index.js",
        "resources/js/vendor/dropzone/index.js",
        "resources/js/vendor/highlight/index.js",
        "resources/js/vendor/image-zoom/index.js",
        "resources/js/vendor/leaflet-map/index.js",
        "resources/js/vendor/litepicker/index.js",
        "resources/js/vendor/lucide/index.js",
        "resources/js/vendor/modal/index.js",
        "resources/js/vendor/pristine/index.js",
        "resources/js/vendor/simplebar/index.js",
        "resources/js/vendor/svg-loader/index.js",
        "resources/js/vendor/tab/index.js",
        "resources/js/vendor/tabulator/index.js",
        "resources/js/vendor/tailwind-merge/index.js",
        "resources/js/vendor/tiny-slider/index.js",
        "resources/js/vendor/tippy/index.js",
        "resources/js/vendor/toastify/index.js",
        "resources/js/vendor/tom-select/index.js",
        "resources/js/vendor/transition/index.js",
        "resources/js/vendor/xlsx/index.js",
        //custom
        //"resources/js/vendor/laravel-livewire-tables/index.js",
        "resources/js/vendor/flatpickr/index.js",
        "resources/js/components/flatpickr/index.js",
        "resources/css/components/_flatpickr.css",
        //"resources/js/vendor/editorjs/index.js",
        //"resources/js/components/editorjs/index.js",
        //"resources/js/vendor/tinymce/index.js",
        //"resources/js/components/tinymce/index.js",
        //"resources/js/vendor/ckeditor/custom/build/ckeditor.js", // usado no viteStaticCopy
        // Pages
        "resources/js/pages/chat/index.js",
        "resources/js/pages/login/index.js",
        "resources/js/pages/modal/index.js",
        "resources/js/pages/notification/index.js",
        "resources/js/pages/slideover/index.js",
        "resources/js/pages/tabulator/index.js",
        "resources/js/pages/validation/index.js",
        // Layouts
        "resources/js/layouts/side-menu/index.js",
        // Components
        "resources/js/components/calendar/index.js",
        "resources/js/components/calendar/draggable/index.js",
        "resources/js/components/balloon-block-editor/index.js",
        "resources/js/components/balloon-editor/index.js",
        "resources/js/components/classic-editor/index.js",
        "resources/js/components/dark-mode-switcher/index.js",
        "resources/js/components/document-editor/index.js",
        "resources/js/components/donut-chart/index.js",
        "resources/js/components/dropzone/index.js",
        "resources/js/components/highlight/index.js",
        "resources/js/components/horizontal-bar-chart/index.js",
        "resources/js/components/inline-editor/index.js",
        "resources/js/components/leaflet-map-loader/index.js",
        "resources/js/components/line-chart/index.js",
        "resources/js/components/litepicker/index.js",
        "resources/js/components/lucide/index.js",
        "resources/js/components/mobile-menu/index.js",
        "resources/js/components/pie-chart/index.js",
        "resources/js/components/preview-component/index.js",
        "resources/js/components/report-bar-chart/index.js",
        "resources/js/components/report-bar-chart-1/index.js",
        "resources/js/components/report-donut-chart/index.js",
        "resources/js/components/report-donut-chart-1/index.js",
        "resources/js/components/report-donut-chart-2/index.js",
        "resources/js/components/report-line-chart/index.js",
        "resources/js/components/report-pie-chart/index.js",
        "resources/js/components/simple-line-chart/index.js",
        "resources/js/components/simple-line-chart-1/index.js",
        "resources/js/components/simple-line-chart-2/index.js",
        "resources/js/components/simple-line-chart-3/index.js",
        "resources/js/components/simple-line-chart-4/index.js",
        "resources/js/components/source/index.js",
        "resources/js/components/stacked-bar-chart/index.js",
        "resources/js/components/stacked-bar-chart-1/index.js",
        "resources/js/components/tiny-slider/index.js",
        "resources/js/components/tippy/index.js",
        "resources/js/components/tippy-content/index.js",
        "resources/js/components/tom-select/index.js",
        "resources/js/components/top-bar/index.js",
        "resources/js/components/vertical-bar-chart/index.js",
        "resources/tailwind-assets/scss/icons.scss",
        "resources/tailwind-assets/scss/app.scss",
        "resources/tailwind-assets/js/app.js",
        // 'resources/tailwind-assets/js/easy_background.js',
        "resources/tailwind-assets/js/plugins.init.js"
      ],
      refresh: [
        ...refreshPaths,
        "app/Livewire/**"
      ]
    })
  ],
  resolve: {
    alias: {
      "tailwind-config": path.resolve(__vite_injected_original_dirname, "./tailwind.config.js")
    }
  }
});
export {
  vite_config_default as default
};
//# sourceMappingURL=data:application/json;base64,ewogICJ2ZXJzaW9uIjogMywKICAic291cmNlcyI6IFsidml0ZS5jb25maWcuanMiXSwKICAic291cmNlc0NvbnRlbnQiOiBbImNvbnN0IF9fdml0ZV9pbmplY3RlZF9vcmlnaW5hbF9kaXJuYW1lID0gXCJDOlxcXFxQcm9qZWN0c1xcXFxub29wXFxcXExhcmF2ZWxcXFxcT1BfcHJvamVjdFxcXFxvcmNhbWVudG9fcGFydGljaXBhdGl2b193c3RhcnRlclxcXFxvcmNhbWVudG9fcGFydGljaXBhdGl2b193c3RhcnRlclwiO2NvbnN0IF9fdml0ZV9pbmplY3RlZF9vcmlnaW5hbF9maWxlbmFtZSA9IFwiQzpcXFxcUHJvamVjdHNcXFxcbm9vcFxcXFxMYXJhdmVsXFxcXE9QX3Byb2plY3RcXFxcb3JjYW1lbnRvX3BhcnRpY2lwYXRpdm9fd3N0YXJ0ZXJcXFxcb3JjYW1lbnRvX3BhcnRpY2lwYXRpdm9fd3N0YXJ0ZXJcXFxcdml0ZS5jb25maWcuanNcIjtjb25zdCBfX3ZpdGVfaW5qZWN0ZWRfb3JpZ2luYWxfaW1wb3J0X21ldGFfdXJsID0gXCJmaWxlOi8vL0M6L1Byb2plY3RzL25vb3AvTGFyYXZlbC9PUF9wcm9qZWN0L29yY2FtZW50b19wYXJ0aWNpcGF0aXZvX3dzdGFydGVyL29yY2FtZW50b19wYXJ0aWNpcGF0aXZvX3dzdGFydGVyL3ZpdGUuY29uZmlnLmpzXCI7aW1wb3J0IHsgZGVmaW5lQ29uZmlnIH0gZnJvbSAndml0ZSc7XG5pbXBvcnQgbGFyYXZlbCwgeyByZWZyZXNoUGF0aHMgfSBmcm9tICdsYXJhdmVsLXZpdGUtcGx1Z2luJztcbmltcG9ydCB7IHZpdGVTdGF0aWNDb3B5IH0gZnJvbSAndml0ZS1wbHVnaW4tc3RhdGljLWNvcHknXG5pbXBvcnQgcGF0aCBmcm9tIFwicGF0aFwiO1xuXG5leHBvcnQgZGVmYXVsdCBkZWZpbmVDb25maWcoe1xuICAgIGJ1aWxkOiB7XG4gICAgICAgIGNvbW1vbmpzT3B0aW9uczoge1xuICAgICAgICAgICAgaW5jbHVkZTogW1widGFpbHdpbmQuY29uZmlnLmpzXCIsIFwibm9kZV9tb2R1bGVzLyoqXCJdLFxuICAgICAgICB9LFxuICAgIH0sXG4gICAgb3B0aW1pemVEZXBzOiB7XG4gICAgICAgIGluY2x1ZGU6IFtcInRhaWx3aW5kLWNvbmZpZ1wiXSxcbiAgICB9LFxuICAgIHBsdWdpbnM6IFtcbiAgICAgICAgdml0ZVN0YXRpY0NvcHkoe1xuICAgICAgICAgICAgdGFyZ2V0czogW1xuICAgICAgICAgICAgICAgIHsgc3JjOiAncmVzb3VyY2VzL2pzL3ZlbmRvci9ja2VkaXRvci9jdXN0b20vYnVpbGQvY2tlZGl0b3IuanMnLCBkZXN0OiAnanMvY2tlZGl0b3InIH1cbiAgICAgICAgICAgIF1cbiAgICAgICAgfSksXG4gICAgICAgIGxhcmF2ZWwoe1xuICAgICAgICAgICAgaW5wdXQ6IFtcbiAgICAgICAgICAgICAgICAvLyBHZW5lcmFsXG4gICAgICAgICAgICAgICAgJ3Jlc291cmNlcy9jc3MvYXBwLmNzcycsXG4gICAgICAgICAgICAgICAgJ3Jlc291cmNlcy9qcy9hcHAuanMnLFxuXG4gICAgICAgICAgICAgICAgLy8gVmVuZG9yXG4gICAgICAgICAgICAgICAgXCJyZXNvdXJjZXMvanMvdmVuZG9yL2FjY29yZGlvbi9pbmRleC5qc1wiLFxuICAgICAgICAgICAgICAgIFwicmVzb3VyY2VzL2pzL3ZlbmRvci9hbGVydC9pbmRleC5qc1wiLFxuICAgICAgICAgICAgICAgIFwicmVzb3VyY2VzL2pzL3ZlbmRvci9jYWxlbmRhci9pbmRleC5qc1wiLFxuICAgICAgICAgICAgICAgIFwicmVzb3VyY2VzL2pzL3ZlbmRvci9jYWxlbmRhci9pbmRleC5qc1wiLFxuICAgICAgICAgICAgICAgIFwicmVzb3VyY2VzL2pzL3ZlbmRvci9jYWxlbmRhci9wbHVnaW5zL2RheS1ncmlkLmpzXCIsXG4gICAgICAgICAgICAgICAgXCJyZXNvdXJjZXMvanMvdmVuZG9yL2NhbGVuZGFyL3BsdWdpbnMvaW50ZXJhY3Rpb24uanNcIixcbiAgICAgICAgICAgICAgICBcInJlc291cmNlcy9qcy92ZW5kb3IvY2FsZW5kYXIvcGx1Z2lucy9saXN0LmpzXCIsXG4gICAgICAgICAgICAgICAgXCJyZXNvdXJjZXMvanMvdmVuZG9yL2NhbGVuZGFyL3BsdWdpbnMvdGltZS1ncmlkLmpzXCIsXG4gICAgICAgICAgICAgICAgXCJyZXNvdXJjZXMvanMvdmVuZG9yL2NoYXJ0anMvaW5kZXguanNcIixcbiAgICAgICAgICAgICAgICBcInJlc291cmNlcy9qcy92ZW5kb3IvY2tlZGl0b3IvYmFsbG9vbi9pbmRleC5qc1wiLFxuICAgICAgICAgICAgICAgIFwicmVzb3VyY2VzL2pzL3ZlbmRvci9ja2VkaXRvci9iYWxsb29uLWJsb2NrL2luZGV4LmpzXCIsXG4gICAgICAgICAgICAgICAgXCJyZXNvdXJjZXMvanMvdmVuZG9yL2NrZWRpdG9yL2NsYXNzaWMvaW5kZXguanNcIixcbiAgICAgICAgICAgICAgICBcInJlc291cmNlcy9qcy92ZW5kb3IvY2tlZGl0b3IvZG9jdW1lbnQvaW5kZXguanNcIixcbiAgICAgICAgICAgICAgICBcInJlc291cmNlcy9qcy92ZW5kb3IvY2tlZGl0b3IvaW5saW5lL2luZGV4LmpzXCIsXG4gICAgICAgICAgICAgICAgXCJyZXNvdXJjZXMvanMvdmVuZG9yL2RvbS9pbmRleC5qc1wiLFxuICAgICAgICAgICAgICAgIFwicmVzb3VyY2VzL2pzL3ZlbmRvci9kcm9wZG93bi9pbmRleC5qc1wiLFxuICAgICAgICAgICAgICAgIFwicmVzb3VyY2VzL2pzL3ZlbmRvci9kcm9wem9uZS9pbmRleC5qc1wiLFxuICAgICAgICAgICAgICAgIFwicmVzb3VyY2VzL2pzL3ZlbmRvci9oaWdobGlnaHQvaW5kZXguanNcIixcbiAgICAgICAgICAgICAgICBcInJlc291cmNlcy9qcy92ZW5kb3IvaW1hZ2Utem9vbS9pbmRleC5qc1wiLFxuICAgICAgICAgICAgICAgIFwicmVzb3VyY2VzL2pzL3ZlbmRvci9sZWFmbGV0LW1hcC9pbmRleC5qc1wiLFxuICAgICAgICAgICAgICAgIFwicmVzb3VyY2VzL2pzL3ZlbmRvci9saXRlcGlja2VyL2luZGV4LmpzXCIsXG4gICAgICAgICAgICAgICAgXCJyZXNvdXJjZXMvanMvdmVuZG9yL2x1Y2lkZS9pbmRleC5qc1wiLFxuICAgICAgICAgICAgICAgIFwicmVzb3VyY2VzL2pzL3ZlbmRvci9tb2RhbC9pbmRleC5qc1wiLFxuICAgICAgICAgICAgICAgIFwicmVzb3VyY2VzL2pzL3ZlbmRvci9wcmlzdGluZS9pbmRleC5qc1wiLFxuICAgICAgICAgICAgICAgIFwicmVzb3VyY2VzL2pzL3ZlbmRvci9zaW1wbGViYXIvaW5kZXguanNcIixcbiAgICAgICAgICAgICAgICBcInJlc291cmNlcy9qcy92ZW5kb3Ivc3ZnLWxvYWRlci9pbmRleC5qc1wiLFxuICAgICAgICAgICAgICAgIFwicmVzb3VyY2VzL2pzL3ZlbmRvci90YWIvaW5kZXguanNcIixcbiAgICAgICAgICAgICAgICBcInJlc291cmNlcy9qcy92ZW5kb3IvdGFidWxhdG9yL2luZGV4LmpzXCIsXG4gICAgICAgICAgICAgICAgXCJyZXNvdXJjZXMvanMvdmVuZG9yL3RhaWx3aW5kLW1lcmdlL2luZGV4LmpzXCIsXG4gICAgICAgICAgICAgICAgXCJyZXNvdXJjZXMvanMvdmVuZG9yL3Rpbnktc2xpZGVyL2luZGV4LmpzXCIsXG4gICAgICAgICAgICAgICAgXCJyZXNvdXJjZXMvanMvdmVuZG9yL3RpcHB5L2luZGV4LmpzXCIsXG4gICAgICAgICAgICAgICAgXCJyZXNvdXJjZXMvanMvdmVuZG9yL3RvYXN0aWZ5L2luZGV4LmpzXCIsXG4gICAgICAgICAgICAgICAgXCJyZXNvdXJjZXMvanMvdmVuZG9yL3RvbS1zZWxlY3QvaW5kZXguanNcIixcbiAgICAgICAgICAgICAgICBcInJlc291cmNlcy9qcy92ZW5kb3IvdHJhbnNpdGlvbi9pbmRleC5qc1wiLFxuICAgICAgICAgICAgICAgIFwicmVzb3VyY2VzL2pzL3ZlbmRvci94bHN4L2luZGV4LmpzXCIsXG4gICAgICAgICAgICAgICAgLy9jdXN0b21cbiAgICAgICAgICAgICAgICAvL1wicmVzb3VyY2VzL2pzL3ZlbmRvci9sYXJhdmVsLWxpdmV3aXJlLXRhYmxlcy9pbmRleC5qc1wiLFxuICAgICAgICAgICAgICAgIFwicmVzb3VyY2VzL2pzL3ZlbmRvci9mbGF0cGlja3IvaW5kZXguanNcIixcbiAgICAgICAgICAgICAgICBcInJlc291cmNlcy9qcy9jb21wb25lbnRzL2ZsYXRwaWNrci9pbmRleC5qc1wiLFxuICAgICAgICAgICAgICAgIFwicmVzb3VyY2VzL2Nzcy9jb21wb25lbnRzL19mbGF0cGlja3IuY3NzXCIsXG4gICAgICAgICAgICAgICAgLy9cInJlc291cmNlcy9qcy92ZW5kb3IvZWRpdG9yanMvaW5kZXguanNcIixcbiAgICAgICAgICAgICAgICAvL1wicmVzb3VyY2VzL2pzL2NvbXBvbmVudHMvZWRpdG9yanMvaW5kZXguanNcIixcbiAgICAgICAgICAgICAgICAvL1wicmVzb3VyY2VzL2pzL3ZlbmRvci90aW55bWNlL2luZGV4LmpzXCIsXG4gICAgICAgICAgICAgICAgLy9cInJlc291cmNlcy9qcy9jb21wb25lbnRzL3RpbnltY2UvaW5kZXguanNcIixcbiAgICAgICAgICAgICAgICAvL1wicmVzb3VyY2VzL2pzL3ZlbmRvci9ja2VkaXRvci9jdXN0b20vYnVpbGQvY2tlZGl0b3IuanNcIiwgLy8gdXNhZG8gbm8gdml0ZVN0YXRpY0NvcHlcblxuICAgICAgICAgICAgICAgIC8vIFBhZ2VzXG4gICAgICAgICAgICAgICAgXCJyZXNvdXJjZXMvanMvcGFnZXMvY2hhdC9pbmRleC5qc1wiLFxuICAgICAgICAgICAgICAgIFwicmVzb3VyY2VzL2pzL3BhZ2VzL2xvZ2luL2luZGV4LmpzXCIsXG4gICAgICAgICAgICAgICAgXCJyZXNvdXJjZXMvanMvcGFnZXMvbW9kYWwvaW5kZXguanNcIixcbiAgICAgICAgICAgICAgICBcInJlc291cmNlcy9qcy9wYWdlcy9ub3RpZmljYXRpb24vaW5kZXguanNcIixcbiAgICAgICAgICAgICAgICBcInJlc291cmNlcy9qcy9wYWdlcy9zbGlkZW92ZXIvaW5kZXguanNcIixcbiAgICAgICAgICAgICAgICBcInJlc291cmNlcy9qcy9wYWdlcy90YWJ1bGF0b3IvaW5kZXguanNcIixcbiAgICAgICAgICAgICAgICBcInJlc291cmNlcy9qcy9wYWdlcy92YWxpZGF0aW9uL2luZGV4LmpzXCIsXG5cbiAgICAgICAgICAgICAgICAvLyBMYXlvdXRzXG4gICAgICAgICAgICAgICAgXCJyZXNvdXJjZXMvanMvbGF5b3V0cy9zaWRlLW1lbnUvaW5kZXguanNcIixcblxuICAgICAgICAgICAgICAgIC8vIENvbXBvbmVudHNcbiAgICAgICAgICAgICAgICBcInJlc291cmNlcy9qcy9jb21wb25lbnRzL2NhbGVuZGFyL2luZGV4LmpzXCIsXG4gICAgICAgICAgICAgICAgXCJyZXNvdXJjZXMvanMvY29tcG9uZW50cy9jYWxlbmRhci9kcmFnZ2FibGUvaW5kZXguanNcIixcbiAgICAgICAgICAgICAgICBcInJlc291cmNlcy9qcy9jb21wb25lbnRzL2JhbGxvb24tYmxvY2stZWRpdG9yL2luZGV4LmpzXCIsXG4gICAgICAgICAgICAgICAgXCJyZXNvdXJjZXMvanMvY29tcG9uZW50cy9iYWxsb29uLWVkaXRvci9pbmRleC5qc1wiLFxuICAgICAgICAgICAgICAgIFwicmVzb3VyY2VzL2pzL2NvbXBvbmVudHMvY2xhc3NpYy1lZGl0b3IvaW5kZXguanNcIixcbiAgICAgICAgICAgICAgICBcInJlc291cmNlcy9qcy9jb21wb25lbnRzL2RhcmstbW9kZS1zd2l0Y2hlci9pbmRleC5qc1wiLFxuICAgICAgICAgICAgICAgIFwicmVzb3VyY2VzL2pzL2NvbXBvbmVudHMvZG9jdW1lbnQtZWRpdG9yL2luZGV4LmpzXCIsXG4gICAgICAgICAgICAgICAgXCJyZXNvdXJjZXMvanMvY29tcG9uZW50cy9kb251dC1jaGFydC9pbmRleC5qc1wiLFxuICAgICAgICAgICAgICAgIFwicmVzb3VyY2VzL2pzL2NvbXBvbmVudHMvZHJvcHpvbmUvaW5kZXguanNcIixcbiAgICAgICAgICAgICAgICBcInJlc291cmNlcy9qcy9jb21wb25lbnRzL2hpZ2hsaWdodC9pbmRleC5qc1wiLFxuICAgICAgICAgICAgICAgIFwicmVzb3VyY2VzL2pzL2NvbXBvbmVudHMvaG9yaXpvbnRhbC1iYXItY2hhcnQvaW5kZXguanNcIixcbiAgICAgICAgICAgICAgICBcInJlc291cmNlcy9qcy9jb21wb25lbnRzL2lubGluZS1lZGl0b3IvaW5kZXguanNcIixcbiAgICAgICAgICAgICAgICBcInJlc291cmNlcy9qcy9jb21wb25lbnRzL2xlYWZsZXQtbWFwLWxvYWRlci9pbmRleC5qc1wiLFxuICAgICAgICAgICAgICAgIFwicmVzb3VyY2VzL2pzL2NvbXBvbmVudHMvbGluZS1jaGFydC9pbmRleC5qc1wiLFxuICAgICAgICAgICAgICAgIFwicmVzb3VyY2VzL2pzL2NvbXBvbmVudHMvbGl0ZXBpY2tlci9pbmRleC5qc1wiLFxuICAgICAgICAgICAgICAgIFwicmVzb3VyY2VzL2pzL2NvbXBvbmVudHMvbHVjaWRlL2luZGV4LmpzXCIsXG4gICAgICAgICAgICAgICAgXCJyZXNvdXJjZXMvanMvY29tcG9uZW50cy9tb2JpbGUtbWVudS9pbmRleC5qc1wiLFxuICAgICAgICAgICAgICAgIFwicmVzb3VyY2VzL2pzL2NvbXBvbmVudHMvcGllLWNoYXJ0L2luZGV4LmpzXCIsXG4gICAgICAgICAgICAgICAgXCJyZXNvdXJjZXMvanMvY29tcG9uZW50cy9wcmV2aWV3LWNvbXBvbmVudC9pbmRleC5qc1wiLFxuICAgICAgICAgICAgICAgIFwicmVzb3VyY2VzL2pzL2NvbXBvbmVudHMvcmVwb3J0LWJhci1jaGFydC9pbmRleC5qc1wiLFxuICAgICAgICAgICAgICAgIFwicmVzb3VyY2VzL2pzL2NvbXBvbmVudHMvcmVwb3J0LWJhci1jaGFydC0xL2luZGV4LmpzXCIsXG4gICAgICAgICAgICAgICAgXCJyZXNvdXJjZXMvanMvY29tcG9uZW50cy9yZXBvcnQtZG9udXQtY2hhcnQvaW5kZXguanNcIixcbiAgICAgICAgICAgICAgICBcInJlc291cmNlcy9qcy9jb21wb25lbnRzL3JlcG9ydC1kb251dC1jaGFydC0xL2luZGV4LmpzXCIsXG4gICAgICAgICAgICAgICAgXCJyZXNvdXJjZXMvanMvY29tcG9uZW50cy9yZXBvcnQtZG9udXQtY2hhcnQtMi9pbmRleC5qc1wiLFxuICAgICAgICAgICAgICAgIFwicmVzb3VyY2VzL2pzL2NvbXBvbmVudHMvcmVwb3J0LWxpbmUtY2hhcnQvaW5kZXguanNcIixcbiAgICAgICAgICAgICAgICBcInJlc291cmNlcy9qcy9jb21wb25lbnRzL3JlcG9ydC1waWUtY2hhcnQvaW5kZXguanNcIixcbiAgICAgICAgICAgICAgICBcInJlc291cmNlcy9qcy9jb21wb25lbnRzL3NpbXBsZS1saW5lLWNoYXJ0L2luZGV4LmpzXCIsXG4gICAgICAgICAgICAgICAgXCJyZXNvdXJjZXMvanMvY29tcG9uZW50cy9zaW1wbGUtbGluZS1jaGFydC0xL2luZGV4LmpzXCIsXG4gICAgICAgICAgICAgICAgXCJyZXNvdXJjZXMvanMvY29tcG9uZW50cy9zaW1wbGUtbGluZS1jaGFydC0yL2luZGV4LmpzXCIsXG4gICAgICAgICAgICAgICAgXCJyZXNvdXJjZXMvanMvY29tcG9uZW50cy9zaW1wbGUtbGluZS1jaGFydC0zL2luZGV4LmpzXCIsXG4gICAgICAgICAgICAgICAgXCJyZXNvdXJjZXMvanMvY29tcG9uZW50cy9zaW1wbGUtbGluZS1jaGFydC00L2luZGV4LmpzXCIsXG4gICAgICAgICAgICAgICAgXCJyZXNvdXJjZXMvanMvY29tcG9uZW50cy9zb3VyY2UvaW5kZXguanNcIixcbiAgICAgICAgICAgICAgICBcInJlc291cmNlcy9qcy9jb21wb25lbnRzL3N0YWNrZWQtYmFyLWNoYXJ0L2luZGV4LmpzXCIsXG4gICAgICAgICAgICAgICAgXCJyZXNvdXJjZXMvanMvY29tcG9uZW50cy9zdGFja2VkLWJhci1jaGFydC0xL2luZGV4LmpzXCIsXG4gICAgICAgICAgICAgICAgXCJyZXNvdXJjZXMvanMvY29tcG9uZW50cy90aW55LXNsaWRlci9pbmRleC5qc1wiLFxuICAgICAgICAgICAgICAgIFwicmVzb3VyY2VzL2pzL2NvbXBvbmVudHMvdGlwcHkvaW5kZXguanNcIixcbiAgICAgICAgICAgICAgICBcInJlc291cmNlcy9qcy9jb21wb25lbnRzL3RpcHB5LWNvbnRlbnQvaW5kZXguanNcIixcbiAgICAgICAgICAgICAgICBcInJlc291cmNlcy9qcy9jb21wb25lbnRzL3RvbS1zZWxlY3QvaW5kZXguanNcIixcbiAgICAgICAgICAgICAgICBcInJlc291cmNlcy9qcy9jb21wb25lbnRzL3RvcC1iYXIvaW5kZXguanNcIixcbiAgICAgICAgICAgICAgICBcInJlc291cmNlcy9qcy9jb21wb25lbnRzL3ZlcnRpY2FsLWJhci1jaGFydC9pbmRleC5qc1wiLFxuXG5cbiAgICAgICAgICAgICAgICAncmVzb3VyY2VzL3RhaWx3aW5kLWFzc2V0cy9zY3NzL2ljb25zLnNjc3MnLFxuICAgICAgICAgICAgICAgICdyZXNvdXJjZXMvdGFpbHdpbmQtYXNzZXRzL3Njc3MvYXBwLnNjc3MnLFxuICAgICAgICAgICAgICAgICdyZXNvdXJjZXMvdGFpbHdpbmQtYXNzZXRzL2pzL2FwcC5qcycsXG4gICAgICAgICAgICAgICAgLy8gJ3Jlc291cmNlcy90YWlsd2luZC1hc3NldHMvanMvZWFzeV9iYWNrZ3JvdW5kLmpzJyxcbiAgICAgICAgICAgICAgICAncmVzb3VyY2VzL3RhaWx3aW5kLWFzc2V0cy9qcy9wbHVnaW5zLmluaXQuanMnLFxuXG5cbiAgICAgICAgICAgIF0sXG4gICAgICAgICAgICByZWZyZXNoOiBbXG4gICAgICAgICAgICAgICAgLi4ucmVmcmVzaFBhdGhzLFxuICAgICAgICAgICAgICAgICdhcHAvTGl2ZXdpcmUvKionLFxuICAgICAgICAgICAgXSxcbiAgICAgICAgfSksXG4gICAgXSxcbiAgICByZXNvbHZlOiB7XG4gICAgICAgIGFsaWFzOiB7XG4gICAgICAgICAgICBcInRhaWx3aW5kLWNvbmZpZ1wiOiBwYXRoLnJlc29sdmUoX19kaXJuYW1lLCBcIi4vdGFpbHdpbmQuY29uZmlnLmpzXCIpLFxuICAgICAgICB9LFxuICAgIH0sXG59KTtcbiJdLAogICJtYXBwaW5ncyI6ICI7QUFBK2UsU0FBUyxvQkFBb0I7QUFDNWdCLE9BQU8sV0FBVyxvQkFBb0I7QUFDdEMsU0FBUyxzQkFBc0I7QUFDL0IsT0FBTyxVQUFVO0FBSGpCLElBQU0sbUNBQW1DO0FBS3pDLElBQU8sc0JBQVEsYUFBYTtBQUFBLEVBQ3hCLE9BQU87QUFBQSxJQUNILGlCQUFpQjtBQUFBLE1BQ2IsU0FBUyxDQUFDLHNCQUFzQixpQkFBaUI7QUFBQSxJQUNyRDtBQUFBLEVBQ0o7QUFBQSxFQUNBLGNBQWM7QUFBQSxJQUNWLFNBQVMsQ0FBQyxpQkFBaUI7QUFBQSxFQUMvQjtBQUFBLEVBQ0EsU0FBUztBQUFBLElBQ0wsZUFBZTtBQUFBLE1BQ1gsU0FBUztBQUFBLFFBQ0wsRUFBRSxLQUFLLHlEQUF5RCxNQUFNLGNBQWM7QUFBQSxNQUN4RjtBQUFBLElBQ0osQ0FBQztBQUFBLElBQ0QsUUFBUTtBQUFBLE1BQ0osT0FBTztBQUFBO0FBQUEsUUFFSDtBQUFBLFFBQ0E7QUFBQTtBQUFBLFFBR0E7QUFBQSxRQUNBO0FBQUEsUUFDQTtBQUFBLFFBQ0E7QUFBQSxRQUNBO0FBQUEsUUFDQTtBQUFBLFFBQ0E7QUFBQSxRQUNBO0FBQUEsUUFDQTtBQUFBLFFBQ0E7QUFBQSxRQUNBO0FBQUEsUUFDQTtBQUFBLFFBQ0E7QUFBQSxRQUNBO0FBQUEsUUFDQTtBQUFBLFFBQ0E7QUFBQSxRQUNBO0FBQUEsUUFDQTtBQUFBLFFBQ0E7QUFBQSxRQUNBO0FBQUEsUUFDQTtBQUFBLFFBQ0E7QUFBQSxRQUNBO0FBQUEsUUFDQTtBQUFBLFFBQ0E7QUFBQSxRQUNBO0FBQUEsUUFDQTtBQUFBLFFBQ0E7QUFBQSxRQUNBO0FBQUEsUUFDQTtBQUFBLFFBQ0E7QUFBQSxRQUNBO0FBQUEsUUFDQTtBQUFBLFFBQ0E7QUFBQSxRQUNBO0FBQUE7QUFBQTtBQUFBLFFBR0E7QUFBQSxRQUNBO0FBQUEsUUFDQTtBQUFBO0FBQUE7QUFBQTtBQUFBO0FBQUE7QUFBQTtBQUFBLFFBUUE7QUFBQSxRQUNBO0FBQUEsUUFDQTtBQUFBLFFBQ0E7QUFBQSxRQUNBO0FBQUEsUUFDQTtBQUFBLFFBQ0E7QUFBQTtBQUFBLFFBR0E7QUFBQTtBQUFBLFFBR0E7QUFBQSxRQUNBO0FBQUEsUUFDQTtBQUFBLFFBQ0E7QUFBQSxRQUNBO0FBQUEsUUFDQTtBQUFBLFFBQ0E7QUFBQSxRQUNBO0FBQUEsUUFDQTtBQUFBLFFBQ0E7QUFBQSxRQUNBO0FBQUEsUUFDQTtBQUFBLFFBQ0E7QUFBQSxRQUNBO0FBQUEsUUFDQTtBQUFBLFFBQ0E7QUFBQSxRQUNBO0FBQUEsUUFDQTtBQUFBLFFBQ0E7QUFBQSxRQUNBO0FBQUEsUUFDQTtBQUFBLFFBQ0E7QUFBQSxRQUNBO0FBQUEsUUFDQTtBQUFBLFFBQ0E7QUFBQSxRQUNBO0FBQUEsUUFDQTtBQUFBLFFBQ0E7QUFBQSxRQUNBO0FBQUEsUUFDQTtBQUFBLFFBQ0E7QUFBQSxRQUNBO0FBQUEsUUFDQTtBQUFBLFFBQ0E7QUFBQSxRQUNBO0FBQUEsUUFDQTtBQUFBLFFBQ0E7QUFBQSxRQUNBO0FBQUEsUUFDQTtBQUFBLFFBQ0E7QUFBQSxRQUdBO0FBQUEsUUFDQTtBQUFBLFFBQ0E7QUFBQTtBQUFBLFFBRUE7QUFBQSxNQUdKO0FBQUEsTUFDQSxTQUFTO0FBQUEsUUFDTCxHQUFHO0FBQUEsUUFDSDtBQUFBLE1BQ0o7QUFBQSxJQUNKLENBQUM7QUFBQSxFQUNMO0FBQUEsRUFDQSxTQUFTO0FBQUEsSUFDTCxPQUFPO0FBQUEsTUFDSCxtQkFBbUIsS0FBSyxRQUFRLGtDQUFXLHNCQUFzQjtBQUFBLElBQ3JFO0FBQUEsRUFDSjtBQUNKLENBQUM7IiwKICAibmFtZXMiOiBbXQp9Cg==
