import { createRouter, createWebHistory } from "vue-router";

const router = createRouter({
    history: createWebHistory(process.env.BASE_URL),
    routes: [
        {
            path: '/',
            name: 'main',
            component: () => import('../views/Main.vue')
        },
        {
            path: '/products',
            name: 'products',
            component: () => import('../views/products/Products.vue')
        },
        {
            path: '/products/:id',
            name: 'products.show',
            component: () => import('../views/products/Product.vue')
        }
    ]
})

export default router
