<template>
	<div class="row flex-fill g-2">
		<div class="d-none d-lg-block col-12 col-lg-4">
			<div class="d-flex flex-column bg-white">
				<h4 class="d-none d-lg-block mb-0 p-4">Личный кабинет</h4>
				<div class="d-flex flex-column flex-fill">
					<router-link to="/profile/orders" class="dropdown-item text-wrap py-3 px-4">Мои заказы</router-link>
					<router-link to="/profile/favorite" class="dropdown-item text-wrap py-3 px-4 active">Избранное</router-link>
					<router-link to="/profile" class="dropdown-item text-wrap py-3 px-4">Учётная запись</router-link>
				</div>
				<a type="button" @click="quitAccount" class="dropdown-item mt-auto border-top text-wrap p-4">Выйти</a>
			</div>
		</div>
		<div class="d-flex col-12 col-lg-8 flex-fill">
			<div class="bg-white flex-fill px-4 pt-2 pb-4">
				<div v-if="favourite" class="row">
					<div class="d-flex justify-content-between align-items-center py-4 flex-wrap">
						<div class="d-flex align-items-end my-3">
							<h1 class="my-0 lh-1">Избранное</h1>
							<div class="pl-2">{{ this.$store.state.countFavourite }} {{ getProductWord(this.$store.state.countFavourite) }}</div>
						</div>
						<div>
							<div class="btn btn-outline-danger" @click="clearFavourite()">Очистить избранное</div>
						</div>
					</div>
				</div>
				<div class="row">
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
