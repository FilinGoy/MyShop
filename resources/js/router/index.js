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
            path: '/category/:id',
            name: 'category.show',
            component: () => import('../views/products/Category.vue')
        },
        {
            path: '/product/:id',
            name: 'product.show',
            component: () => import('../views/products/Product.vue')
        },
        {
            path: '/cart',
            name: 'cart',
            component: () => import('../views/main/Cart.vue')
        },
        {
            path: '/profile',
            name: 'profile',
            component: () => import('../views/main/Profile.vue')
        },
        {
            path: '/profile/favorite',
            name: 'favourite',
            component: () => import('../views/main/Favourite.vue')
        },
        {
            path: '/signin',
            name: 'signIn',
            component: () => import('../views/main/SignIn.vue')
        },
    ]
})

export default router
