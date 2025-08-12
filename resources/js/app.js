import './bootstrap';
import App from './App.vue';
import router from './router';
import axios from 'axios';
import { createApp } from 'vue';
import Toast from "vue-toastification";
import "vue-toastification/dist/index.css";


const app = createApp(App);
app.config.globalProperties.$axios = axios;
axios.defaults.withCredentials = true;
axios.defaults.withXSRFToken = true;
axios.interceptors.request.use((config) => {
    config.headers.Accept = 'application/json';
    const token = localStorage.getItem('token');
    if (token) {
        config.headers.Authorization = `Bearer ${token}`;
        config.headers.token = `Bearer ${token}`;
    }
    return config;
});
const options = {
    // You can set your default options here
};

app.use(Toast, options);
app.use(router);
app.mount('#app');