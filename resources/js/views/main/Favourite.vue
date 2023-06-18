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
				<a type="button" v-if="this.$store.state.isLoginUser" @click.prevent="this.quitAccount" class="dropdown-item mt-auto border-top text-wrap p-4">Выйти</a>
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
					<template v-if="this.favourite">
						<div class="row row-cols-1 g-2">
							<template v-for="product in favourite" :key="product.id">
								<div class="col px-0 card-line-item">
									<div class="rowcard h-100 bg-white d-flex flex-row justify-content-between p-2">
										<div class="card-img-top col-4 col-md-2 position-relative flex-xl-fill px-0">
											<img :src="product.preview_image ?? 'storage/images/main/none.png'" class="fit-img" />
											<div v-if="product.tags" class="position-absolute top-0 d-flex flex-wrap justify-content-start w-100 p-2 gap-2">
												<div v-for="tag in product.tags" :key="tag.tag_id" class="badge badge-danger">{{ tag.title }}</div>
											</div>

											<div class="position-absolute bottom-0 left-0 w-100 d-flex py-3 px-sm-3 justify-content-between">
												<div v-if="product.rate" class="d-none d-sm-flex align-items-center badge badge-white rounded-pill">
													<i class="fas fa-star text-warning pr-1"></i>
													<p class="text-black">{{ product.rate }}</p>
												</div>

												<div class="d-flex d-sm-none align-items-center badge badge-white rounded-pill">
													<p class="text-black">{{ product.price }} ₽</p>
												</div>

												<a
													@click="toggleToFavourite(product)"
													type="button"
													class="d-flex align-self-end align-items-center justify-content-center fs-4 position-relative favourite"
												>
													<i class="fas fa-heart text-white fs-5 favourite"></i>
													<i :class="checkToHaving(product, 'favourite') !== undefined ? 'fas text-danger' : 'fa-regular'" class="fa-heart position-absolute"></i>
												</a>
											</div>
										</div>
										<div class="card-body px-3 py-3 d-flex flex-column justify-content-between">
											<a :href="`/product/${product.id}`" class="text-wrap card-title h-50">
												{{ product.title }}
											</a>

											<div class="d-flex justify-content-between align-items-center h-25 w-100">
												<div class="d-none d-sm-flex flex-column flex-fill">
													<p class="fs-5 mb-0 text-nowrap">{{ product.price }} ₽</p>
													<small>за шт.</small>
												</div>

												<a v-if="product.count <= 0" class="d-flex align-items-center justify-content-center">
													<button class="btn btn-outline-primary text-nowrap d-flex align-items-center justify-content-center gap-2" disable>
														<small>Нет в наличии</small>
													</button>
												</a>
												<a v-else-if="checkToHaving(product, 'cart') === undefined" @click="addToCart(product)" class="d-flex align-items-center justify-content-center">
													<button class="btn btn-outline-primary text-nowrap d-flex align-items-center justify-content-center gap-2">
														<i class="fas fa-plus"></i>
														<i class="fas fa-shopping-basket fs-5"></i>
													</button>
												</a>

												<div v-else class="d-flex align-items-center justify-content-center border rounded-3 w-lg-25 w-md-50">
													<button
														@click.prevent="subtractQuantity(product)"
														class="btn btn-outline-primary text-nowrap border-0 rounded-3 d-flex align-items-center justify-content-center"
													>
														<i class="fas fa-minus flex-fill"></i>
													</button>
													<input
														type="number"
														class="item-edit rounded-0 border-0 shadow-none flex-fill text-center"
														min="0"
														max="999"
														:id="'editQuantity' + product.id"
														@input="checkValue"
														@change="setProduct(product, $event)"
														:value="checkToHaving(product, 'cart') === undefined ? 1 : getValue(product)"
													/>
													<button
														@click.prevent="addQuantity(product)"
														class="btn btn-outline-primary text-nowrap border-0 rounded-3 d-flex align-items-center justify-content-center"
													>
														<i class="fas fa-plus"></i>
													</button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</template>
						</div>
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
		//@click="cleanFromFavourite(product.id)"
	},
};
</script>
<style></style>
