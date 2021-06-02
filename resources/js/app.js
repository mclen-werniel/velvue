require('./bootstrap');


import { createApp } from 'vue';
import App from '../vue/App.vue';
import router from '../vue/router.js';
import store from '../vue/store/index.js';

// material design
import '../../node_modules/material-design-lite/material.min.css';
import '../../node_modules/material-design-lite/material.min.js';
// iconfont
import '../../node_modules/material-icons/iconfont/material-icons.css'


// createApp(App).use(router, store).mount("#app")
const app = createApp(App)
app.use(router)
app.use(store)
app.mount("#app")
