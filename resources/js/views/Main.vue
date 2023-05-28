<template>
    <div class="container">
        <div class="row">
            <div id="carouselMain" class="carousel slide col px-0" data-bs-ride="carousel">
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
                    <button class="carousel-control-prev text-white d-flex justify-content-start ps-2" type="button" data-bs-target="#carouselMain" data-bs-slide="prev">
                        <i class="fa-solid fa-circle-chevron-left fa-3x"></i>
                        <span class="visually-hidden">Назад</span>
                    </button>
                    <button class="carousel-control-next text-white d-flex justify-content-end pe-2" type="button" data-bs-target="#carouselMain" data-bs-slide="next">
                        <i class="fa-solid fa-circle-chevron-right fa-3x"></i>
                        <span class="visually-hidden">Вперёд</span>
                    </button>
                </div>
            </div>
        </div>

        <div class="row my-3">
            <div class="col-12 col-md-4 btn btn-white rounded-0 d-flex align-items-center hover justify-content-evenly p-4">
                <i class="fa-solid fa-hand-holding-dollar fa-2x text-danger"></i>
                <p class="text-muted">Лучшие цены</p>
            </div>
            <div class="col-12 col-md-4  btn btn-white rounded-0 d-flex align-items-center hover justify-content-evenly p-4">
                <i class="fa-solid fa-truck fa-2x text-danger"></i>
                <p class="text-muted">Бесплатная доставка</p>
            </div>
            <div class="col-12 col-md-4 btn btn-white rounded-0 d-flex align-items-center hover justify-content-evenly p-4">
                <i class="fa-solid fa-wallet fa-2x text-danger"></i>
                <p class="text-muted">Удобная оплата</p>
            </div>
        </div>
        <div class="row">
            <recomend-products></recomend-products>
        </div>
    </div>
</template>
<script>
import RecomendProducts from './products/Recomend.vue';

export default {
	name: "mainPage",
    components: {
        RecomendProducts
    }
};
</script>
<style>

</style>
