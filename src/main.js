import { createApp } from 'vue'
import { createRouter, createWebHistory } from 'vue-router'
import { createYmaps } from 'vue-yandex-maps'

import App from './App.vue'
import Main from './layouts/Main.vue'
import Registration from './layouts/Reg.vue'
import Authorisation from './layouts/Auth.vue'
import Map from './layouts/Map.vue'
import Statisctics from './layouts/Statisctics.vue'
import Analytics from './layouts/Analytics.vue'
import Prognos from './layouts/Prognos.vue'

import './assets/main.css'

const router = createRouter({
  history: createWebHistory(),
  routes: [
    {
      name: 'Main',
      path: '/',
      component: Main
    },
    {
      name: 'Reg',
      path: '/Registration',
      component: Registration
    },
    {
      name: 'Auth',
      path: '/Authorisation',
      component: Authorisation
    },
    {
      name: 'Map',
      path: '/Map',
      component: Map
    },
    {
      name: 'Statisctics',
      path: '/Statisctics',
      component: Statisctics
    },
    {
      name: 'Analytics',
      path: '/Analytics',
      component: Analytics
    },
    {
      name: 'Prognos',
      path: '/Prognos',
      component: Prognos
    }
  ]
})

const app = createApp(App).use(router).mount('#app')
