<template>
	<div class="container">
		<div class="row">
			<div class="d-none d-xl-flex col-lg-3">
				<div class="py-3 shadow-sm bg-white">
					<h3 class="px-4">Категории</h3>
					<router-link class="dropdown-item px-4" to="/products">
						<p>Все товары</p>
					</router-link>
					<router-link v-for="category in this.$store.state.categories" :key="category.id" :to="`/categories/${category.id}`" class="dropdown-item text-wrap px-4">
						<span>{{ category.title }}</span>
					</router-link>
				</div>
			</div>

			<div class="col">
				<!-- Products header -->

				<div class="bg-white p-2 p-lg-3 shadow-sm mb-2 mb-lg-4">
					<div class="d-flex justify-content-between">
						<!-- Left -->

						<div>
							<div class="form-inline">
								<div class="form-group mb-0">
									<select class="form-control form-control-sm" id="exampleFormControlSelect1">
										<option>20</option>
										<option>50</option>
										<option>100</option>
										<option>All</option>
									</select>
									<label for="exampleFormControlSelect1" class="ml-3 d-none d-lg-block"><small>Showing all 24 of 128 products</small></label>
								</div>
							</div>
						</div>

						<!-- Right -->

						<div>
							<div class="form-inline">
								<div class="mr-2">
									<a href="products-grid.html" class="btn btn-sm text-danger" data-toggle="tooltip" data-placement="top" title="Grid view">
										<i class="fa fa-th-large"></i>
									</a>
									<a href="products-list.html" class="btn btn-sm" data-toggle="tooltip" data-placement="top" title="List view">
										<i class="fa fa-list-ul"></i>
									</a>
								</div>
								<div class="form-group mb-0">
									<label for="exampleFormControlSelect2" class="mr-3 d-none d-lg-block"><small>Sort by</small></label>
									<select class="form-control form-control-sm" id="exampleFormControlSelect2">
										<option>Name</option>
										<option>Price</option>
									</select>
								</div>
								<div class="d-lg-none ml-2">
									<button class="btn btn-danger btn-sm toggle-show" data-show="open-mobile-filters">
										<strong>
											<i class="icon icon-text-align-center"></i>
											<span class="d-none d-sm-inline-block">Filters</span>
										</strong>
									</button>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Products collection -->

				<div v-if="products" class="row row-cols-1 row-cols-lg-3 gutters-mobile g-5">
					<template v-for="product in products" :key="product.id">
						<div class="col" v-if="product.published">
							<div class="card bg-white d-flex flex-column justify-content-between">
								<div class="card-img-top h-50 position-relative">
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
									<a :href="`/products/${product.id}`" class="text-wrap text-truncate card-title h-50">
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
												max="999"
												:id="'editQuantity' + product.id"
												@input="checkValue"
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

				<!-- Pagination -->

				<nav aria-label="Page navigation example">
					<ul class="pagination justify-content-center py-3 py-lg-4">
						<li class="page-item disabled">
							<a class="page-link page-link-first" href="#" tabindex="-1" aria-disabled="true">Prev</a>
						</li>
						<li class="page-item"><a class="page-link" href="#">1</a></li>
						<li class="page-item active"><a class="page-link" href="#">2</a></li>
						<li class="page-item"><a class="page-link" href="#">3</a></li>
						<li class="page-item"><a class="page-link" href="#">4</a></li>
						<li class="page-item">
							<a class="page-link" href="#">Next</a>
						</li>
					</ul>
				</nav>
			</div>
		</div>
	</div>
</template>
<script>
export default {
	name: "products",
	mounted() {
		this.getProducts();
	},
};
</script>
<style></style>
