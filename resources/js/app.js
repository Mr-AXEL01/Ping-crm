import { createApp, h } from 'vue';
import {createInertiaApp, Head , Link} from '@inertiajs/vue3';

createInertiaApp({
    resolve: name => {
        const pages = import.meta.glob('./Pages/**/*.vue', { eager: true })
        return pages[`./Pages/${name}.vue`]
    },
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .component("Link", Link)
            .component("Head", Head)
            .mount(el)
    },

    title: title => `My App - ${title}`,

    progress: {
        delay: 40,
        color: 'red',
        includeCSS: true,
        showSpinner: true,
    },
})
