<template>
	<div class="row">
		<div id="carouselMain" class="carousel slide col px-0" data-bs-ride="carousel">
			<div class="carousel-inner" style="max-height: 450px;">
				<div class="carousel-item active">
					<img src="/storage/images/main/slider1.jpg" class="d-block w-100" />
				</div>
				<div class="carousel-item">
					<img src="/storage/images/main/slider2.jpg" class="d-block w-100" />
				</div>
				<div class="carousel-item">
					<img src="/storage/images/main/slider3.jpg" class="d-block w-100" />
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
		<router-link class="col-4 btn btn-white rounded-0 d-flex flex-wrap align-items-start justify-content-evenly p-4" to="/how-to-buy">
			<div>
				<i class="fa-solid fa-hand-holding-dollar fa-2x text-danger"></i>
				<p class="text-muted">Простота покупки</p>
			</div>
		</router-link>
		<router-link class="col-4 btn btn-white rounded-0 d-flex flex-wrap align-items-start justify-content-evenly p-4" to="/delivery">
			<div>
				<i class="fa-solid fa-truck fa-2x text-danger"></i>
				<p class="text-muted">Бесплатная доставка</p>
			</div>
		</router-link>
		<router-link class="col-4 btn btn-white rounded-0 d-flex flex-wrap align-items-start justify-content-evenly p-4" to="/payment-orders">
			<div>
				<i class="fa-solid fa-wallet fa-2x text-danger"></i>
				<p class="text-muted">Удобная оплата</p>
			</div>
		</router-link>
	</div>
	<div class="row">
		<recomend-products></recomend-products>
	</div>
</template>
<script>
import RecomendProducts from "../products/Recomend.vue";

export default {
	name: "mainPage",
	components: {
		RecomendProducts,
	},
};
</script>
<style></style>
