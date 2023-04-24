// import './bootstrap';

import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/vue3'

createInertiaApp({
  resolve: async(name) => {
    // const pages = import.meta.glob('./Pages/**/*.vue', { eager: true })
    const pages = import.meta.glob('./Pages/**/*.vue')
    return (await pages[`./Pages/${name}.vue`]())
  },
  setup({ el, App, props, plugin }) {
    createApp({ render: () => h(App, props) })
      .use(plugin)
      .mount(el)
  },
})