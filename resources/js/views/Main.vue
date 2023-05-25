<template>
    <main class="mb-auto">
        <div class="container">
            <div class="row py-2">
                <div id="carouselMain" class="carousel slide px-4 col-12" data-bs-ride="carousel">
                    <div class="carousel-inner" style="max-height: 450px;">
                        <div class="carousel-item active">
                            <img src='/storage/images/main/slider1.jpg' class="d-block w-100" />
                        </div>
                        <div class="carousel-item">
                            <img src='/storage/images/main/slider2.jpg' class="d-block w-100" />
                        </div>
                        <div class="carousel-item">
                            <img src='/storage/images/main/slider3.jpg' class="d-block w-100" />
                        </div>
                    </div>
                    <button class="carousel-control-prev text-white d-flex justify-content-start" type="button" data-bs-target="#carouselMain" data-bs-slide="prev">
                        <i class="fa-solid fa-circle-chevron-left fa-3x"></i>
                        <span class="visually-hidden">Назад</span>
                    </button>
                    <button class="carousel-control-next text-white d-flex justify-content-end" type="button" data-bs-target="#carouselMain" data-bs-slide="next">
                        <i class="fa-solid fa-circle-chevron-right fa-3x"></i>
                        <span class="visually-hidden">Вперёд</span>
                    </button>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-4 btn btn-white rounded-0 d-flex align-items-center justify-content-evenly p-4">
                    <i class="fa-solid fa-hand-holding-dollar fa-2x text-danger"></i>
                    <p class="text-muted">Лучшие цены</p>
                </div>
                <div class="col-12 col-md-4  btn btn-white rounded-0 d-flex align-items-center justify-content-evenly p-4">
                    <i class="fa-solid fa-truck fa-2x text-danger"></i>
                    <p class="text-muted">Бесплатная доставка</p>
                </div>
                <div class="col-12 col-md-4 btn btn-white rounded-0 d-flex align-items-center justify-content-evenly p-4">
                    <i class="fa-solid fa-wallet fa-2x text-danger"></i>
                    <p class="text-muted">Удобная оплата</p>
                </div>
            </div>
            <div class="row text-center py-3">
                    <h4>Товары в ассортименте</h4>
                        <div v-if="products" class="row gutters-mobile">

                            <div v-for="product in products" :key="product.id" class="col-12 col-md-6 col-xl-4">
                                <div class="card card-fill border-0 mb-2 mb-lg-4" v-if="product.published" style="min-height: 350px">
                                    <div class="card-image">
                                        <router-link :to="`/products/${product.id}`">
                                            <img :src="product.preview_image ?? 'storage/images/main/none.png'" class="card-img-top" alt="...">
                                        </router-link>
                                    </div>
                                    <div class="card-body p-3 p-lg-4">
                                        <div class="d-flex justify-content-evenly align-items-center text-center">
                                            <div>
                                                <h2 class="card-title mb-1 h5">
                                                    <a :href="`/products/${product.id}`">
                                                        {{ product.title }}
                                                    </a>
                                                </h2>
                                                <small class="text-muted">
                                                    <span>{{ product.price }} ₽</span>
                                                </small>
                                            </div>
                                            <div>
                                                <a :href="`/products/${product.id}`" class="d-inline-block" data-toggle="tooltip" data-placement="top" title="Add to cart">
                                                    <i class="icon icon-cart font-size-xl"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
            </div>
        </div>
    </main>
</template>
<script>
export default {
	name: "mainPage",
	data() {
		return {
            products: []
		};
	},
	mounted() {
        this.getProducts();
	},
	methods: {
        getProducts() {
            this.axios.post('../api/products').then(res => {
                this.products = res.data.data;
            })
        }
	},
};
</script>
<style></style>
