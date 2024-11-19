import './bootstrap';
import 'flowbite';

import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/vue3';
import AppLayout from './App.vue';  

createInertiaApp({
    resolve: name => {
        const pages = import.meta.glob('./Pages/**/*.vue', { eager: true });
        const page = pages[`./Pages/${name}.vue`];
        page.default.layout = AppLayout;
        return page;
    },
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .mount(el)
    },
});

import Splide from '@splidejs/splide';
document.addEventListener('DOMContentLoaded', function () {
    new Splide('#default-carousel', {
        type: 'loop',
        perPage: 1,
        autoplay: true,
        interval: 3000,
        speed: 1000,
    }).mount();
})
