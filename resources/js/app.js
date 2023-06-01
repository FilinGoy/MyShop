import { createApp } from 'vue';
import { createStore } from 'vuex';
import './bootstrap';

import router from './router';
import App from './App.vue';
import axios from 'axios';

const app = createApp(App);
const store = createStore({
    state: {
        categories: [],

        cart: [],
        countCartAll: 0,
        countCartDiff: 0,
        totalPrice: 0,

        favourite: [],
        countFavourite: 0,

        history: [],

        isLogedIn: false,
        user: null,
        isLoadingUser: false,
        tokenRefreshed: true,

    },
    mutations: {
        //SECTION - Корзина
        GET_CART: (state) => {
            let cart = localStorage.getItem('cart') || '[]';
            state.cart = JSON.parse(cart)
        },
        ADD_TO_CART: (state, product) => {
            let index = state.cart.findIndex(productInCart => productInCart.id === product[0].id);
            if (index !== -1) {
                state.cart[index].count += parseInt(product[0].count, 10);
            } else {
                state.cart.push(product[0]);
            }
            localStorage.setItem('cart', JSON.stringify(state.cart));
        },
        UPDATE_TOTAL_CART: (state) => {
            state.totalPrice = state.cart.reduce((sum, product) => sum + product.price * product.count, 0);
            state.countCartAll = state.cart.reduce((count, product) => count + product.count, 0);
            state.countCartDiff = state.cart.length;
        },
        //!SECTION

        //SECTION - Избранное
        GET_FAVOURITE: (state) => {
            let favourite = localStorage.getItem('favourite') || '[]';
            state.favourite = JSON.parse(favourite)
        },
        ADD_TO_FAVOURITE: (state, product) => {
            let index = state.favourites.findIndex(productInFav => productInFav.id === product[0].id);
            if (index !== -1) {
                return;
            } else {
                state.favourite.push(product[0])
            }
            localStorage.setItem('favourite', JSON.stringify(state.favourite));
        },
        UPDATE_TOTAL_FAVOURITE: (state) => {
            state.countFavourite = state.favourite.length;
        },
        //!SECTION

        //SECTION - Категории
        GET_CATEGORIES: (state) => {
            axios.get("/api/categories").then((res) => {
                state.categories = res.data.data;
            });
        },
        //!SECTION
    },
    actions: {
        initializeCart: ({ commit }) => {
            commit('GET_CART');
            commit('UPDATE_TOTAL_CART');
        },
        initializeFavourite: ({ commit }) => {
            commit('GET_FAVOURITES');
            commit('UPDATE_TOTAL_FAVOURITE');
        },
        initializeCategories: ({ commit }) => {
            commit('GET_CATEGORIES');
        }
    }
});

app.use(router)
    .use(store)

app.config.globalProperties.axios = axios
app.mount('#app')

app.mixin({
    data() {
        return {
            categories: [],
            products: [],
            favourite: [],
            totalPrice: 0,
            totalCount: 0
        };
    },
    created: function () {
        this.$store.dispatch('initializeCart')
        this.$store.dispatch('initializeFavourite')
        this.$store.dispatch('initializeCategories')
    },
    methods: {
        //SECTION - Общие (методы)
        getProducts() {
            this.axios.post("/api/products").then((res) => {
                this.products = res.data.data;
            });
        },
        //!SECTION

        //SECTION - Корзина
        getCart() {
            this.products = JSON.parse(localStorage.getItem("cart"));
            this.totalCart();
        },
        updateCart() {
            localStorage.setItem("cart", JSON.stringify(this.products));
        },
        clearCart() {
            localStorage.removeItem("cart");
            this.getCart();
            this.$store.dispatch('initializeCart');
        },
        totalCart() {
            this.totalPrice = this.products?.reduce((sum, product) => sum + product.price * product.count, 0);
            this.totalCount = this.products?.reduce((sum, product) => sum + product.count, 0);
        },
        addToCart(product) {
            let newProduct = [
                {
                    id: product.id,
                    preview_image: product.preview_image,
                    title: product.title,
                    price: product.price,
                    count: 1,
                },
            ];

            this.$store.commit("ADD_TO_CART", newProduct);
            this.$store.commit("UPDATE_TOTAL_CART");
        },
        removeFromCart(id) {
            this.products = this.products.filter((product) => {
                return product.id !== id;
            });
            this.updateCart();
            this.totalCart();
            this.$store.dispatch('initializeCart');
            if (localStorage.getItem('cart') == '[]') { localStorage.removeItem("cart"); }
        },
        //!SECTION

        //SECTION - Избранное
        getFavourite() {
            this.products = JSON.parse(localStorage.getItem("favourite"));
            this.totalFavourite();
        },
        updateFavourite() {
            localStorage.setItem("favourite", JSON.stringify(this.products));
        },
        clearFavourite() {
            localStorage.removeItem("favourite");
            this.getFavourite();
            this.$store.dispatch('initializeFavourite');
        },
        totalFavourite() {
            this.totalCount = this.products?.reduce((sum, product) => sum + product.count, 0);
        },
        addToFavourite(product) {
            let newProduct = [
                {
                    id: product.id,
                    preview_image: product.preview_image,
                    title: product.title,
                    price: product.price,
                },
            ];

            this.$store.commit("ADD_TO_FAVOURITE", newProduct);
            this.$store.commit("UPDATE_TOTAL_FAVOURITE");
        },
        removeFromFavourite(id) {
            this.products = this.products.filter((product) => {
                return product.id !== id;
            });
            this.updateFavourite();
            this.totalFavourite();
            this.$store.dispatch('initializeFavourite');
            if (localStorage.getItem('favourite') == '[]') { localStorage.removeItem("favourite"); }
        },
        //!SECTION
    }
})
