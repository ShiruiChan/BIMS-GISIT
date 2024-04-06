import Vue from 'vue'
import Router from 'vue-router'
import App from './src/App.vue'

Vue.use(Router)

export default new Router({
	mode: 'history',
	base: process.env.BASE_URL,
	routes: [
		{
			path: '/',
			name: 'App',
			component: App,
		},
		{
			path: '/login',
			name: 'login',
			meta: {layout: 'empty'},
			component: () => import('./src/Login.vue')
		},
		{
			path: '/registration',
			name: 'registration',
			meta: {layout: 'main'},
			component: () => import('./src/Registration.vue')
		}
	]
})