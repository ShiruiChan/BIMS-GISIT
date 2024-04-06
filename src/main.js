import { createApp } from 'vue'
import { createRouter, createWebHistory } from 'vue-router'

import App from './App.vue'
import Main from './layouts/Main.vue'
import Registration from './layouts/Reg.vue'
import Authorisation from './layouts/Auth.vue'

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
    }
  ]
})

const app = createApp(App).use(router).mount('#app')
