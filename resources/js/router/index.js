import { createRouter, createWebHistory } from "vue-router";

const router = createRouter({
    history: createWebHistory(process.env.BASE_URL),
    routes: [
        {
            path: '/',
            name: 'main',
            component: () => import('../App.vue')
        },
        {
            path: '/products',
            name: 'products',
            component: () => import('../views/Products.vue')
        }
    ]
})

export default router
