import { createApp, h } from 'vue'
import { InertiaProgress } from '@inertiajs/progress'
import { createInertiaApp, Link, Head } from '@inertiajs/inertia-vue3';

createInertiaApp({
    resolve: name => require(`./pages/${name}`),
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .component('Link', Link)
            .component('Head', Head)
            .use(plugin)
            .mount(el)
    },
    title: title => `My Bank - ${title}`
});

InertiaProgress.init()
