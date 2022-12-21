import moment from 'moment';
import { createApp, h } from 'vue'
import { InertiaProgress } from '@inertiajs/progress'
import { createInertiaApp, Link, Head } from '@inertiajs/inertia-vue3';

createInertiaApp({
    resolve: name => require(`./pages/${name}`),
    setup({ el, App, props, plugin }) {
        let app = createApp({ render: () => h(App, props) });
        app.config.globalProperties.$route = window.route;
        app.config.globalProperties.$moment = moment;
        app
            .component('Link', Link)
            .component('Head', Head)
            .use(plugin)
            .mount(el);
    },
    title: title => `My Bank - ${title}`
});

InertiaProgress.init({
    color: 'red'
})
