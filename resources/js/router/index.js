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
            path: '/search/:title',
            name: 'products.search',
            component: () => import('../views/products/SearchProduct.vue')
        },
        {
            path: '/cart',
            name: 'cart',
            component: () => import('../views/main/Cart.vue')
        },
        {
            path: '/checkout',
            name: 'checkout',
            component: () => import('../views/main/Checkout.vue')
        },
        {
            path: '/profile',
            name: 'profile',
            component: () => import('../views/profile/Profile.vue')
        },
        {
            path: '/profile/orders',
            name: 'orders',
            component: () => import('../views/profile/Orders.vue')
        },
        {
            path: '/profile/order/:id',
            name: 'order',
            component: () => import('../views/profile/Order.vue')
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
