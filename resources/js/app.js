import { createApp, h } from 'vue'
import {  createInertiaApp, Link, Head } from '@inertiajs/vue3'
import Layout from "./Pages/Shared/Layout.vue"

createInertiaApp({
    //resolve: name => require(`./Pages/${name}`),
    resolve: async name => {
      let page = (await import(`./Pages/${name}`)).default;

      page.layout ??= Layout;
      return page;
    },


//   resolve: name => {
//     const pages = import.meta.glob('./Pages/**/*.vue', { eager: true })
//     return pages[`./Pages/${name}.vue`]
//   },
  setup({ el, App, props, plugin }) {
    createApp({ render: () => h(App, props) })
      .use(plugin)
      .component("Link", Link)
      .component("Head", Head)
      .mount(el)
  },

  progress:{
    color: 'red',
    showSpinner: true,
  },
  
  title: title => "My App - " + title
})