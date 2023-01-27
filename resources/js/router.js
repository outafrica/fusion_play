// Import the necessary files
import { createRouter, createWebHistory } from 'vue-router'

import HomePage from './components/pages/home/home.vue'
import Dashboard from './components/pages/home/dashboard.vue'
import NotFoundPage from './components/pages/errors/not_found.vue'

// create the routes to be loaded
const routes = [
    {
        path: '/',
        component: HomePage,
        name: 'home'
    },
    {
        path: '/dashboard',
        component: Dashboard,
        name: 'dashboard'
    },
    // will match everything and put it under `$route.params.pathMatch`
    {
        path: '/:pathMatch(.*)*',
        name: 'notfound',
        component: NotFoundPage,
    },

]

// export the routes to be loaded
export default new createRouter({
    history: createWebHistory(),
    routes,
    scrollBehavior(to) {
        const scroll = {};
        if (to.meta.toTop) scroll.top = 0;
        if (to.meta.smoothScroll) scroll.behavior = 'smooth';

        return scroll;
    },
})