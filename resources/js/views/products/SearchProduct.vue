<template>
	<div class="container py-3">
		<div class="row">
			<div class="d-none d-xl-flex col-lg-3">
				<div>
					<div class="py-3 bg-white shadow-sm">
						<h3 class="px-4">Категории</h3>
						<router-link v-for="category in this.$store.state.categories" :key="category.id" :to="`/category/${category.id}`" class="dropdown-item text-wrap px-4">
							<span>{{ category.title }}</span>
						</router-link>
					</div>
				</div>
			</div>

			<div class="col">
				<!-- Products header -->

				<div class="row bg-white py-2 py-lg-3 mb-2 mb-lg-3 shadow-sm">
					<div class="col-12 col-md-6">
						<div class="d-flex align-items-center justify-content-between my-3">
							<div class="d-flex flex-column flex-md-row justify-content-between align-items-md-end">
								<h1 class="my-0 lh-1 text-truncate">По запросу «{{ this.$route.params.title }}»</h1>
								<div class="pl-md-2 text-nowrap">{{ this.products.length }} {{ getProductWord(this.products.length) }}</div>
							</div>
						</div>
					</div>

					<div class="col-12 col-md-6 d-flex justify-content-md-end">
						<div class="form-inline">
							<div class="form-group mb-0">
								<label for="exampleFormControlSelect2" class="mr-3 d-none d-lg-block"><small>Сортировка</small></label>
								<select class="form-control form-control-sm" id="exampleFormControlSelect2" v-model="selectedSort" @change="sortedList">
									<option value="nameUp" selected>▲ По названию</option>
									<option value="nameDown">▼ По названию</option>
									<option value="priceUp">▲ По цене</option>
									<option value="priceDown">▼ По цене</option>
								</select>
							</div>
							<div class="d-lg-none ml-2">
								<button class="btn btn-danger btn-sm toggle-show" data-show="open-mobile-filters">
									<strong>
										<i class="icon icon-text-align-center"></i>
										<span class="d-none d-sm-inline-block">Фильтр</span>
									</strong>
								</button>
							</div>
						</div>
					</div>
				</div>

				<div v-if="products.length > 0" class="row row-cols-1 row-cols-xl-2 row-cols-xxl-3 gy-2 gy-xl-4">
					<template v-for="product in products" :key="product.id">
						<div class="col px-0 px-lg-2" v-if="product.published" @click="addHistory(product)">
							<div class="rowcard h-100 bg-white d-flex flex-row flex-xl-column justify-content-between p-2 p-xl-3 shadow-sm">
								<div class="card-img-top col-4 col-md-2 col-xl-12 position-relative flex-xl-fill px-0">
									<img :src="'storage/' + product.preview_image ?? 'storage/images/main/none.png'" class="fit-img" />
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
				</div>
				<div v-else class="row bg-white d-flex justify-content-center align-items-center pb-4">
					<div class="col d-flex flex-column justify-content-center align-items-center">
						<img class="w-25 py-5" src="storage/images/main/search.png" />
						<h4>По запросу ничего не найдено</h4>
						<p class="w-50 text-center">Вернитесь в каталог или воспользуйтесь поиском снова.</p>
						<router-link class="btn btn-danger rounded-3" to="/">На главную страницу</router-link>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Products collection -->

	<!-- Pagination -->

	<div v-if="pages && pages.last_page > 1" class="row">
		<nav aria-label="Page navigation example">
			<ul class="pagination justify-content-center py-3 py-lg-4">
				<template v-for="page in pages.links" :key="page.label">
					<li class="page-item" :class="page.active ? 'active' : ''">
						<template v-if="page.url">
							<div
								v-if="page.label === 'pagination.previous' || page.label === 'pagination.next'"
								@click.prevent="getProductFromCategory(this.$route, page.label === 'pagination.previous' ? page.prev_page_url : page.next_page_url)"
								type="button"
								class="page-link"
							>
								<i class="fa-solid" :class="page.label === 'pagination.previous' ? 'fa-chevron-left' : 'fa-chevron-right'"></i>
							</div>
							<div v-else @click.prevent="getProductFromCategory(this.$route, page.label)" type="button" class="page-link">{{ page.label }}</div>
						</template>
					</li>
				</template>
			</ul>
		</nav>
	</div>
</template>
<script>
export default {
	name: "category",
	data() {
		return {
			products: [],
			category: [],
			pages: [],
			selectedSort: "nameUp",
		};
	},
	mounted() {
		this.getSearchProduct();
	},
	watch: {
		$route(to, from) {
			this.getSearchProduct();
		},
	},
	beforeUpdate() {
		this.sortedList();
	},
	methods: {
		sortedList() {
			switch (this.selectedSort) {
				case "nameUp":
					this.products.sort((a, b) => a.title.localeCompare(b.title));
					break;
				case "nameDown":
					this.products.sort((a, b) => b.title.localeCompare(a.title));
					break;
				case "priceUp":
					this.products.sort((a, b) => a.price - b.price);
					break;
				case "priceDown":
					this.products.sort((a, b) => b.price - a.price);
					break;
			}
		},
		getSearchProduct() {
			this.axios
				.post("/api/search", {
					title: this.$route.params.title,
				})
				.then((res) => {
					this.products = res.data;
				});
		},
	},
};
</script>
<style></style>
