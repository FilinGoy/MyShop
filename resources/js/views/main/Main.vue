<template>
	<div>
		<router-link to="category/1" class="row">
			<img src="storage/images/main/newProduct.jpg" class="px-0" />
		</router-link>
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
