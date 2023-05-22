import { createApp } from 'vue';
import { createStore } from 'vuex';
import './bootstrap';

import router from './router';
import App from './App.vue';
import axios from 'axios';

const app = createApp(App);
const store = createStore();

app.use(router)
    .use(store)

app.config.globalProperties.axios = axios
app.mount('#app')
