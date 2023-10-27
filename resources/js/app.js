import { createApp, h } from 'vue';
import { createInertiaApp, Link, Head } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';


// this is from updated laravel docs since the inertia is incomplete:
// https://laravel.com/docs/10.x/vite#vue

createInertiaApp({
    resolve: (name) => resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue')),
    // progress bar options
    progress: {
        color: '#DC143C',
        showSpinner: true
    },
    setup({ el, App, props, plugin }) {
        return createApp({ render: () => h(App, props) })
            .mixin({ methods: {route} })
            .use(plugin)
            .component('Link', Link) // auto import components
            .component('Head', Head)
            .mount(el)
    },
    // concat a prefix for page title; title is specified on each vue in <title>
    title: (title) => `My App- ${title}`
});

// progress bar
import NProgress from 'nprogress'
import { router } from '@inertiajs/vue3'
router.on('start', () => NProgress.start())
router.on('finish', () => NProgress.done())
