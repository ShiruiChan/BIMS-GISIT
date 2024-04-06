import { createApp } from 'vue';
import { createYmaps } from 'vue-yandex-maps';
import App from './src/App.vue';

const app = createApp(App);

app.use(createYmaps({
  apikey: 'c0bf1893-d2f2-4b9d-9ab9-a84f466f8b2a',
}));

app.mount('#app');