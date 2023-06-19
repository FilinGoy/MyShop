<template>
	<h4 class="my-3 p-3 bg-white"><i class="fas fa-star text-warning"></i> Популярные товары</h4>
	<div class="row row-cols-1 row-cols-xl-4 gy-2 gy-xl-4">
		<template v-if="products">
			<template v-for="product in products" :key="product.id">
				<div class="col px-0 px-lg-2" v-if="product.published" @click="addHistory(product)">
					<div class="rowcard h-100 bg-white d-flex flex-row flex-xl-column justify-content-between p-2 p-xl-3 shadow-sm">
						<div class="card-img-top col-4 col-md-2 col-xl-12 position-relative flex-xl-fill px-0">
							<img :src="product.preview_image ?? 'storage/images/main/none.png'" class="fit-img" />
							<div v-if="product.tags" class="position-absolute top-0 d-flex flex-wrap justify-content-start w-100 p-2 gap-2">
								<div v-for="tag in product.tags" :key="tag.tag_id" class="badge badge-danger">{{ tag.title }}</div>
							</div>

							<div class="position-absolute bottom-0 left-0 w-100 d-flex p-3" :class="product.rate ? 'justify-content-between' : 'justify-content-end'">
								<div v-if="product.rate" class="d-flex align-items-center badge badge-white rounded-pill">
									<i class="fas fa-star text-warning pr-1"></i>
									<p class="text-black">{{ product.rate }}</p>
								</div>

								<a @click="toggleToFavourite(product)" type="button" class="d-flex align-self-end align-items-center justify-content-center fs-4 position-relative favourite">
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
								<div class="d-flex flex-column flex-fill">
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

								<div v-else class="d-flex align-items-center justify-content-center border rounded-3 w-lg-25 w-50">
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
										:max="product.count > 999 ? 999 : product.count"
										:id="'editQuantity' + product.id"
										@input="checkValue($event, product.count)"
										@change="setProduct(product, $event)"
										:value="checkToHaving(product, 'cart') === undefined ? 1 : getValue(product)"
									/>
									<button @click.prevent="addQuantity(product)" class="btn btn-outline-primary text-nowrap border-0 rounded-3 d-flex align-items-center justify-content-center">
										<i class="fas fa-plus"></i>
									</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</template>
		</template>
	</div>
</template>
<script>
export default {
	name: "RandomProducts",
	data() {
		return {
			products: [],
		};
	},
	mounted() {
		this.getProductFromRate();
	},
	watch: {
		$route() {
			this.getProductFromRate();
		},
	},
	methods: {
		getProductFromRate() {
			this.axios.get(`../../api/getProductFromRate`).then((res) => {
				this.products = res.data.products;
			});
		},
	},
};
</script>
<style></style>
