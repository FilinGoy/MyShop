import { createApp } from 'vue';
import { createStore } from 'vuex';
import './bootstrap';

import router from './router';
import App from './App.vue';
import axios from 'axios';

import { debounce } from "lodash";

import VueTheMask from 'vue-the-mask';

const app = createApp(App);
const store = createStore({
    state: {
        cart: [],
        countCartAll: 0,
        countCartDiff: 0,
        totalPrice: 0,

        favourite: [],
        countFavourite: 0,

        history: null,

        isLoginUser: false,
        user: null,
        tokenRefreshed: false,

    },
    mutations: {
        //SECTION - Профль
        ADD_AUTH: (state, value) => {
            localStorage.setItem('access_token', value.token)
        },
        SET_IS_LOGED_IN: (state, value) => {
            state.isLoginUser = value;
        },
        GET_INFO_USER: (state, value) => {
            state.user = value
        },
        SET_TOKEN_REFRESHED: (state, value) => {
            state.tokenRefreshed = value
        },
        LOGOUT: (state) => {
            axios.post('/api/auth/logout', {}, {
                headers: {
                    'authorization': `Bearer ${localStorage.getItem('access_token') ?? sessionStorage.getItem('access_token')}`
                },
                responseType: 'json'
            })
                .then(res => {
                    if (localStorage.getItem('access_token')) {
                        localStorage.removeItem('access_token');
                    } else {
                        sessionStorage.removeItem('access_token');
                    }
                    state.isLoginUser = false;
                    state.user = null;
                })
        },
        //!SECTION


        //SECTION - Корзина
        GET_CART: (state) => {
            let cart = localStorage.getItem('cart') || '[]';
            state.cart = JSON.parse(cart)
        },
        ADD_TO_CART: (state, product) => {
            let index = state.cart.findIndex(productInCart => productInCart.id === product[0].id);
            if (index !== -1) {
                return
            } else {
                state.cart.push(product[0]);
            }
            localStorage.setItem('cart', JSON.stringify(state.cart));
        },

        UPDATE_PRODUCT_IN_CART: (state, product) => {
            let index = state.cart.findIndex(productInCart => productInCart.id === product[0].id);
            if (index !== -1) {
                state.cart[index].quantity = product[0].quantity;
            } else {
                return
            }
            localStorage.setItem('cart', JSON.stringify(state.cart));
        },

        UPDATE_TOTAL_CART: (state) => {
            state.totalPrice = state.cart?.reduce((sum, product) => sum + product.price * product.quantity, 0).toFixed(2);
            state.countCartAll = state.cart?.reduce((quantity, product) => quantity + product.quantity, 0);
            state.countCartDiff = state.cart?.length;
        },
        //!SECTION

        //SECTION - Избранное
        GET_FAVOURITE: (state) => {
            let favourite = localStorage.getItem('favourite') || '[]';
            state.favourite = JSON.parse(favourite)
        },
        ADD_TO_FAVOURITE: (state, product) => {
            let index = state.favourite.findIndex(productInFav => productInFav.id === product[0].id);
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

        //SECTION - История
        ADD_TO_HISTORY: (state, category) => {
            if (category == localStorage.getItem('history')) {
                return;
            } else {
                state.history = category;
            }
            localStorage.setItem('history', JSON.stringify(state.history));
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
            commit('GET_FAVOURITE');
            commit('UPDATE_TOTAL_FAVOURITE');
        },
        initializeCategories: ({ commit }) => {
            commit('GET_CATEGORIES');
        },

        getUserInfo: debounce(({ commit, state }) => {
            let token = localStorage.getItem('access_token');
            if (!token) {
                if (sessionStorage.getItem('access_token')) token = sessionStorage.getItem('access_token');
            }
            if (token) {
                axios.post("/api/auth/me", null, {
                    headers: {
                        'authorization': `Bearer ${token}`,
                        'Accept': 'application/json'
                    },
                    responseType: 'json'
                })
                    .then(res => {
                        commit('SET_IS_LOGED_IN', true);
                        commit('GET_INFO_USER', res.data);
                    })
                    .catch(err => {
                        if (err.response.data.message === 'Unauthenticated.') {
                            commit('SET_IS_LOGED_IN', false);
                            axios.post('/api/auth/refresh', null, {
                                headers: {
                                    'authorization': `Bearer ${token}`,
                                    'Accept': 'application/json'
                                },
                                responseType: 'json'
                            })
                                .then(res => {
                                    localStorage.setItem('access_token', res.data.access_token);
                                    axios.post("/api/auth/me", {}, {
                                        headers: {
                                            'authorization': `Bearer ${res.data.access_token}`,
                                            'Accept': 'application/json'
                                        },
                                        responseType: 'json'
                                    })
                                        .then(res => {
                                            commit('SET_IS_LOGED_IN', true);
                                            commit('GET_INFO_USER', res.data);
                                        })
                                        .catch(err => {
                                            commit('SET_IS_LOGED_IN', false);
                                        })
                                })
                                .catch(err => {
                                    commit('SET_IS_LOGED_IN', false);
                                })
                        }
                    });
            } else {
                commit('SET_IS_LOGED_IN', false);
            }
        }, 1000)
    },
    getters: {
        statusUser(state) {
            return state.isLoginUser;
        },
        userGetter(state) {
            return state.user;
        },
    }
});

app.use(router)
    .use(store)
    .use(VueTheMask)

app.config.globalProperties.axios = axios
app.mount('#app')

app.mixin({
    data() {
        return {
            product: [],
            cart: [],
            favourite: [],
            totalPrice: 0,
            totalCount: 0
        };
    },
    created: function () {
        this.$store.dispatch('initializeCart')
        this.$store.dispatch('initializeFavourite')
        this.$store.dispatch('initializeCategories')

        this.$store.dispatch('getUserInfo')

        $(window).scroll(this.scrollFunction)

        $('#btn-back-to-top').on("click", this.backToTop)
    },
    methods: {
        scrollFunction() {
            if (
                document.body.scrollTop > 20 ||
                document.documentElement.scrollTop > 20
            ) {
                $('#btn-back-to-top').show();
            } else {
                $('#btn-back-to-top').hide();
            }
        },

        backToTop() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        },

        info(text) {
            console.log(text);
        },

        //SECTION - Общие (методы)
        getProductWord(count) {
            return count % 10 == 1 && count % 100 != 11 ? 'товар' :
                (count % 10 >= 2 && count % 10 <= 4 && (count % 100 < 10 || count % 100 >= 20) ? 'товара' : 'товаров');
        },

        checkToHaving(product, place) {
            switch (place) {
                case 'favourite': {
                    let index = this.$store.state.favourite?.findIndex(p => p.id == product.id);
                    if (index !== -1)
                        return index;
                    else
                        return;
                };

                case 'cart': {
                    let index = this.$store.state.cart?.findIndex(p => p.id == product.id);
                    if (index !== -1)
                        return index;
                    else
                        return;
                };

                default:
                    return;
            }
        },

        formattedDate(datetime) {
            const date = new Date(datetime);
            const year = String(date.getFullYear()).padStart(2, "0");
            const month = String(date.getMonth() + 1).padStart(2, "0");
            const day = String(date.getDate()).padStart(2, "0");
            const hours = String(date.getHours()).padStart(2, "0");
            const minutes = String(date.getMinutes()).padStart(2, "0");

            return `${day}.${month}.${year} ${hours}:${minutes}`;
        },
        //!SECTION

        //SECTION - Действие с продуктом
        getValue(product) {
            return this.$store.state.cart[this.checkToHaving(product, 'cart')].quantity;
        },
        addQuantity(product) {
            let index = this.$store.state.cart?.findIndex(p => p.id == product.id);
            this.getCart();
            if (this.$store.state.cart[index].quantity < (product.count < 999 ? product.count : 999)) {
                let editProduct = [
                    {
                        id: product.id,
                        quantity: ++this.$store.state.cart[index].quantity,
                    },
                ];
                this.$store.commit("UPDATE_PRODUCT_IN_CART", editProduct);
                $('#editQuantity' + product.id).val(this.$store.state.cart[index].quantity);
                this.getCart();
                this.$store.dispatch('initializeCart');
            } else {
                return;
            }

        },
        subtractQuantity(product) {
            let index = this.$store.state.cart?.findIndex(p => p.id == product.id);
            this.getCart();
            if (this.$store.state.cart[index].quantity > 1) {
                let editProduct = [
                    {
                        id: product.id,
                        quantity: --this.$store.state.cart[index].quantity,
                    },
                ];
                this.$store.commit("UPDATE_PRODUCT_IN_CART", editProduct);
                $('#editQuantity' + product.id).val(this.$store.state.cart[index].quantity);
                this.getCart();
                this.$store.dispatch('initializeCart');
            } else {
                this.cleanFromCart(product);
            }

        },
        setProduct(product, e) {
            let index = this.$store.state.cart?.findIndex(p => p.id == product.id);
            let count = e.target.value;
            this.getCart();
            if (count < 1) {
                this.cleanFromCart(product);
            } else {
                if (count > (product.count > 999 ? 999 : product.count)) { count = (product.count > 999 ? 999 : product.count); }
                let editProduct = [
                    {
                        id: product.id,
                        quantity: parseInt(count),
                    },
                ];
                this.$store.commit("UPDATE_PRODUCT_IN_CART", editProduct);
                $('#editQuantity' + product.id).val(this.$store.state.cart[index].quantity);
                this.getCart();
                this.$store.dispatch('initializeCart');
            }

        },
        checkValue(e, count) {
            if (e.target.value > (count > 999 ? 999 : count)) {
                e.target.value = count;
                return;
            }

            if (e.target.value < 0) {
                e.target.value = 0;
                return;
            }
        },
        //!SECTION

        //SECTION - Корзина
        getCart() {
            this.cart = JSON.parse(localStorage.getItem("cart"));
            this.totalCart();
        },
        clearCart() {
            localStorage.removeItem("cart");
            this.getCart();
            this.$store.dispatch('initializeCart');
        },
        totalCart() {
            this.totalPrice = this.cart?.reduce((sum, product) => sum + product.price * product.quantity, 0).toFixed(2);
            this.totalCount = this.cart?.reduce((sum, product) => sum + product.quantity, 0);
        },
        addToCart(product) {
            let newProduct = [
                {
                    id: product.id,
                    title: product.title,
                    price: product.price,
                    quantity: 1,
                    count: product.count,
                    preview_image: product.preview_image,
                },
            ];

            this.$store.commit("ADD_TO_CART", newProduct);
            this.$store.dispatch('initializeCart');
        },
        cleanFromCart(product) {
            this.getCart();
            this.cart = this.cart.filter(tempProduct => tempProduct.id !== product.id);
            localStorage.setItem("cart", JSON.stringify(this.cart));
            this.totalCart();
            this.$store.dispatch('initializeCart');
            if (localStorage.getItem('cart') == '[]') { localStorage.removeItem("cart"); this.cart = null }
        },
        //!SECTION

        //SECTION - Избранное
        getFavourite() {
            this.favourite = JSON.parse(localStorage.getItem("favourite"));
        },
        clearFavourite() {
            localStorage.removeItem("favourite");
            this.getFavourite();
            this.$store.dispatch('initializeFavourite');
        },
        toggleToFavourite(product) {
            if (this.checkToHaving(product, 'favourite') === undefined) {
                let newProduct = [
                    {
                        id: product.id,
                        title: product.title,
                        price: product.price,
                        preview_image: product.preview_image
                    },
                ];
                this.$store.commit("ADD_TO_FAVOURITE", newProduct);
                this.$store.commit("UPDATE_TOTAL_FAVOURITE");
            }
            else {
                this.getFavourite();
                this.favourite = this.favourite.filter(tempProduct => tempProduct.id !== product.id);
                localStorage.setItem("favourite", JSON.stringify(this.favourite));
                this.$store.dispatch('initializeFavourite');
                if (localStorage.getItem('favourite') == '[]') { localStorage.removeItem("favourite"); this.favourite = null }
            }
        },
        //!SECTION

        //SECTION - Профль
        quitAccount() {
            document.cookie = "user=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
            this.$store.commit("LOGOUT");
            this.$router.push({ name: "main" });
        },
        //!SECTION

        //SECTION - История
        addHistory(product) {
            this.$store.commit("ADD_TO_HISTORY", product.category?.id ?? product.category_id);
        },
        //!SECTION
    }
})
