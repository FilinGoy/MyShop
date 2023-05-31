import { createRouter, createWebHistory } from "vue-router";

const router = createRouter({
    history: createWebHistory(process.env.BASE_URL),
    routes: [
        {
            path: '/',
            name: 'main',
            component: () => import('../views/main/Main.vue')
        },
        {
            path: '/about',
            name: 'about',
            component: () => import('../views/main/About.vue')
        },
        {
            path: '/contacts',
            name: 'contacts',
            component: () => import('../views/main/Contacts.vue')
        },
        {
            path: '/delivery',
            name: 'delivery',
            component: () => import('../views/main/Delivery.vue')
        },
        {
            path: '/how-to-buy',
            name: 'howToBuy',
            component: () => import('../views/main/HowToBuy.vue')
        },
        {
            path: '/return-and-trade',
            name: 'returnAndTrade',
            component: () => import('../views/main/ReturnAndTrade.vue')
        },
        {
            path: '/payment-orders',
            name: 'paymentOrders',
            component: () => import('../views/main/PaymentOrders.vue')
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
        },
        {
            path: '/cart',
            name: 'cart',
            component: () => import('../views/main/Cart.vue')
        },
    ]
})

export default router
