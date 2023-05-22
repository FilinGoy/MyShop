<template>
    <main class="mb-auto">
        <div class="container">
            <div class="row pb-2">
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
                <div class="col btn btn-white rounded-0 d-flex align-items-center justify-content-evenly p-4">
                    <i class="fa-solid fa-hand-holding-dollar fa-2x text-danger"></i>
                    <p class="text-muted">Лучшие цены</p>
                </div>
                <div class="col btn btn-white rounded-0 d-flex align-items-center justify-content-evenly p-4">
                    <i class="fa-solid fa-truck fa-2x text-danger"></i>
                    <p class="text-muted">Бесплатная доставка</p>
                </div>
                <div class="col btn btn-white rounded-0 d-flex align-items-center justify-content-evenly p-4">
                    <i class="fa-solid fa-wallet fa-2x text-danger"></i>
                    <p class="text-muted">Удобная оплата</p>
                </div>
            </div>
        </div>
    </main>
</template>
<script>
export default {
	name: "mainPage",
};
</script>
<style></style>
