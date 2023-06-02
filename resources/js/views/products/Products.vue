<template>
	<div>
		<section class="py-3">
			<div class="container">
				<div class="row">
					<!-- Product sidebar -->

					<div class="col-lg-3 sidebar sidebar-mobile" id="open-mobile-filters">
						<div class="sidebar-content">
							<!-- Header -->

							<div class="sidebar-header clearfix d-lg-none">
								<button type="button" class="close toggle-show p-3" data-show="open-mobile-filters" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>

							<!-- Slider range -->

							<div class="bg-white p-2 p-lg-3 mb-2 mb-lg-4 shadow-sm br-sm">
								<a class="pre-label px-0" data-toggle="collapse" href="#collapseExamplePrice" role="button" aria-expanded="false" aria-controls="collapseExamplePrice">
									<small>Slider range</small>
								</a>

								<div class="collapse show" id="collapseExamplePrice">
									<div class="pt-3">
										<div class="d-flex justify-content-between">
											<span>Price</span>
											<span>
												<b class="price-value"></b>
											</span>
										</div>
										<input type="range" class="custom-range price-range" id="customRange1" min="0" max="500" step="5" />
										<div class="d-flex justify-content-between">
											<small>$ 0</small>
											<small>$ 500</small>
										</div>
									</div>
								</div>
							</div>

							<!-- Checkbox group -->

							<div class="bg-white p-2 p-lg-3 mb-2 mb-lg-4 shadow-sm br-sm">
								<a class="pre-label px-0" data-toggle="collapse" href="#collapseExampleCheckbox" role="button" aria-expanded="false" aria-controls="collapseExampleCheckbox">
									<small>Checkboxes</small>
								</a>

								<div class="collapse show" id="collapseExampleCheckbox">
									<ul class="list-group list-group-clean pt-4">
										<li class="list-group-item d-flex justify-content-between align-items-center">
											<span class="custom-control custom-control-sm custom-control-light custom-checkbox">
												<input type="checkbox" class="custom-control-input" id="customCheckGroup1" />
												<label class="custom-control-label" for="customCheckGroup1">Men</label>
											</span>
											<span class="badge badge-light badge-pill">14</span>
										</li>

										<li class="list-group-item d-flex justify-content-between align-items-center">
											<span class="custom-control custom-control-sm custom-control-light custom-checkbox">
												<input type="checkbox" class="custom-control-input" id="customCheckGroup2" />
												<label class="custom-control-label" for="customCheckGroup2">Woman</label>
											</span>
											<span class="badge badge-light badge-pill">250</span>
										</li>

										<li class="list-group-item d-flex justify-content-between align-items-center">
											<span class="custom-control custom-control-sm custom-control-light custom-checkbox">
												<input type="checkbox" class="custom-control-input" id="customCheckGroup3" />
												<label class="custom-control-label" for="customCheckGroup3">Kid&#x27;s</label>
											</span>
											<span class="badge badge-light badge-pill">313</span>
										</li>

										<li class="list-group-item">
											<hr />
										</li>

										<li class="list-group-item d-flex justify-content-between align-items-center">
											<span class="custom-control custom-control-sm custom-control-light custom-checkbox">
												<input type="checkbox" class="custom-control-input" id="customCheckCategory1" />
												<label class="custom-control-label" for="customCheckCategory1">Clothing</label>
											</span>
											<span class="badge badge-light badge-pill">150</span>
										</li>

										<li class="list-group-item d-flex justify-content-between align-items-center">
											<span class="custom-control custom-control-sm custom-control-light custom-checkbox">
												<input type="checkbox" class="custom-control-input" id="customCheckCategory2" />
												<label class="custom-control-label" for="customCheckCategory2">Shoes</label>
											</span>
											<span class="badge badge-light badge-pill">184</span>
										</li>

										<li class="list-group-item d-flex justify-content-between align-items-center">
											<span class="custom-control custom-control-sm custom-control-light custom-checkbox">
												<input type="checkbox" class="custom-control-input" id="customCheckCategory3" />
												<label class="custom-control-label" for="customCheckCategory3">Bags</label>
											</span>
											<span class="badge badge-light badge-pill">164</span>
										</li>

										<li class="list-group-item d-flex justify-content-between align-items-center">
											<span class="custom-control custom-control-sm custom-control-light custom-checkbox">
												<input type="checkbox" class="custom-control-input" id="customCheckCategory4" />
												<label class="custom-control-label" for="customCheckCategory4">Accessories</label>
											</span>
											<span class="badge badge-light badge-pill">212</span>
										</li>

										<li class="list-group-item d-flex justify-content-between align-items-center">
											<span class="custom-control custom-control-sm custom-control-light custom-checkbox">
												<input type="checkbox" class="custom-control-input" id="customCheckCategory5" />
												<label class="custom-control-label" for="customCheckCategory5">Collection</label>
											</span>
											<span class="badge badge-light badge-pill">50</span>
										</li>
									</ul>
								</div>
							</div>

							<!-- Radio buttons group -->

							<div class="bg-white p-2 p-lg-3 mb-2 mb-lg-4 shadow-sm br-sm">
								<a class="pre-label px-0" data-toggle="collapse" href="#collapseExampleRadio" role="button" aria-expanded="false" aria-controls="collapseExampleRadio">
									<small>Radio buttons</small>
								</a>

								<div class="collapse show" id="collapseExampleRadio">
									<ul class="list-group list-group-clean pt-4">
										<li class="list-group-item d-flex justify-content-between align-items-center">
											<span class="custom-control custom-control-sm custom-control-light custom-radio">
												<input type="radio" id="customRadio1" name="customRadio" class="custom-control-input" />
												<label class="custom-control-label" for="customRadio1">In stock</label>
											</span>
											<span class="badge badge-light badge-pill">1250</span>
										</li>

										<li class="list-group-item d-flex justify-content-between align-items-center">
											<span class="custom-control custom-control-sm custom-control-light custom-radio">
												<input type="radio" id="customRadio2" name="customRadio" class="custom-control-input" />
												<label class="custom-control-label" for="customRadio2">Upcomming</label>
											</span>
											<span class="badge badge-light badge-pill">245</span>
										</li>

										<li class="list-group-item d-flex justify-content-between align-items-center">
											<span class="custom-control custom-control-sm custom-control-light custom-radio">
												<input type="radio" id="customRadio3" name="customRadio" class="custom-control-input" />
												<label class="custom-control-label" for="customRadio3">Presale</label>
											</span>
											<span class="badge badge-light badge-pill">86</span>
										</li>
									</ul>
								</div>
							</div>

							<!-- Checkbox group -->

							<div class="bg-white p-2 p-lg-3 mb-2 mb-lg-4 shadow-sm br-sm">
								<a class="pre-label px-0" data-toggle="collapse" href="#collapseExampleSize" role="button" aria-expanded="false" aria-controls="collapseExampleSize">
									<small>Sizes</small>
								</a>

								<div class="collapse show" id="collapseExampleSize">
									<div class="d-flex justify-content-between pt-4">
										<span class="btn-group-toggle" data-toggle="buttons">
											<label class="btn btn-outline-danger active"> <input type="checkbox" checked /> S </label>
										</span>

										<span class="btn-group-toggle" data-toggle="buttons">
											<label class="btn btn-outline-danger active"> <input type="checkbox" /> M </label>
										</span>

										<span class="btn-group-toggle" data-toggle="buttons">
											<label class="btn btn-outline-danger active"> <input type="checkbox" /> L </label>
										</span>

										<span class="btn-group-toggle" data-toggle="buttons">
											<label class="btn btn-outline-danger active"> <input type="checkbox" /> XL </label>
										</span>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Products content -->

					<div class="col-lg-9">
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

						<div v-if="products" class="row gutters-mobile">
							<template v-for="product in products" :key="product.id">
								<div class="col-6 col-xl-4" v-if="product.published">
									<div class="card bg-white d-flex flex-column justify-content-between">
										<div class="card-img-top h-50 position-relative">
											<img :src="product.preview_image ?? 'storage/images/main/none.png'" class="fit-img" />
											<div v-if="product.tags" class="position-absolute top-0 d-flex flex-wrap justify-content-start w-100 p-2 gap-2">
												<div v-for="tag in product.tags" :key="tag.tag_id" class="badge badge-danger">{{ tag.title }}</div>
											</div>

											<div class="position-absolute bottom-0 left-2 d-flex justify-content-start w-100 p-3 gap-2">
												<div class="d-flex align-items-center badge badge-white rounded-pill">
													<i class="fas fa-star text-warning pr-1"></i>
													<p class="text-black">0,0</p>
												</div>
											</div>
										</div>
										<div class="card-body pb-3 pt-0 px-3 d-flex flex-column justify-content-between"></div>
										<!-- 										<div class="card-body p-3 d-flex flex-column justify-content-between h-100">
											<a :href="`/products/${product.id}`" class="text-wrap text-truncate card-title">
												{{ product.title }}
											</a>
											<div class="text-muted">
												<span>{{ product.price }} ₽</span>
											</div>

											<div>
												<button @click.prevent="subtractProduct(product)" class="btn btn-outline-danger"><i class="fas fa-minus"></i></button>
												<input type="number" min="1" max="999" :value="product.quantity" />
												<button @click.prevent="appendProduct(product)" class="btn btn-outline-danger"><i class="fas fa-plus"></i></button>
											</div>
										</div>

										<div @click="addToCart(product)" type="button" class="btn btn-outline-danger">
											<i class="fa-solid fa-plus"></i>
											<i class="fa-solid fa-basket-shopping"></i>
										</div>
										<div @click="addToFavourite(product)" type="button" class="btn btn-outline-danger">
											<i class="fa-regular fa-heart"></i>
										</div> -->
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
		</section>
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
