<template>
	<div class="row g-2">
		<div class="col-12 col-lg-4">
			<div class="d-flex flex-column justify-content-between bg-white p-4">
				<h4 class="d-none d-lg-block mb-0">Итого:</h4>
				<p class="text-muted d-none d-lg-block">
					<span>{{ totalCount ?? "0" }}</span> {{ getProductWord(totalCount) }}
				</p>
				<div class="mb-0 py-2 d-flex justify-content-between align-items-center flex-wrap">
					<p class="mb-0 d-lg-none">Сумма заказа:</p>
					<p class="mb-0 d-none d-lg-block">На сумму:</p>
					<div class="fs-2 text-wrap text-danger d-flex align-items-center">
						<span class="fs-2">{{ totalPrice ?? "0" }}</span
						>₽
					</div>
				</div>
			</div>
		</div>
		<div class="col-12 col-lg-8">
			<div class="bg-white px-4 py-2">
				<div class="d-flex justify-content-between align-items-center py-2">
					<div class="d-flex align-items-end">
						<h1 class="my-0 lh-1">Избранное</h1>
						<div class="pl-2">{{ this.$store.state.countFavourite }}</div>
					</div>
					<div>
						<div class="btn btn-outline-danger" @click="clearFavourite()">Очистить избранное</div>
					</div>
				</div>
				<hr />
				<div class="w-100">
					<div class="flex-column align-items-center p-md-5" :class="this.$store.state.countFavourite == 0 ? 'd-flex' : 'd-none'">
						<img class="w-25 py-5" src="storage/images/main/favourite-none.png" />
						<h4>В избранном пока ничего нет</h4>
						<p class="w-50 text-center">Здесь будут храниться товары, которые вас заинтересовали.</p>
						<router-link class="btn btn-danger rounded-3" to="/">На главную страницу</router-link>
					</div>
					<template v-if="products">
						<template v-for="product in products" :key="product.id">
							<div class="row">
								<div class="col-2"><img :src="product.preview_image ?? 'storage/images/main/none.png'" class="fit-img" /></div>
								<div class="col-4">{{ product.title }}</div>
								<div class="col-2">{{ product.price }}</div>
								<div class="col-1" @click="cleanFromFavourite(product.id)">
									<div class="btn"><i class="fa-solid fa-xmark text-danger"></i></div>
								</div>
							</div>
						</template>
					</template>
				</div>
			</div>
		</div>
	</div>
</template>
<script>
export default {
	name: "favourite",
	mounted() {
		this.getFavourite();
	},
};
</script>
<style></style>
