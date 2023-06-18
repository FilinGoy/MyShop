<template>
	<div>
		<!-- Content -->

		<section class="bg-white p-0 sider sider-right">
			<div class="container">
				<div class="row align-items-lg-center">
					<!-- Product gallery -->

					<div class="col-lg-7 bg-white">
						<div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
							<div class="carousel-inner">
								<div class="carousel-item active">
									<img :src="product.preview_image" class="d-block w-100" />
								</div>
								<div class="carousel-item" v-for="image in product.images" :key="image.id">
									<img v-if="image" :src="`storage/` + image.url" class="d-block w-100" />
								</div>
							</div>
							<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="visually-hidden">Предыдущий</span>
							</button>
							<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="visually-hidden">Следующий</span>
							</button>
						</div>
					</div>

					<!-- Product info -->

					<div class="col-lg-5 pl-lg-6 pl-xl-7">
						<div class="px-lg-4 py-6">
							<!-- Product order -->

							<div class="clearfix">
								<!-- Product price -->

								<div class="h2 mb-0">
									<span>{{ product.title }}</span>
									<hr />
									<p>
										Цена: <span class="text-danger">{{ product.price }} ₽</span>
									</p>
								</div>

								<hr />

								<!-- Product brand -->

								<div class="row">
									<div class="col-12">
										<div class="row mb-2">
											<div class="col-xl-4">
												<span class="text-muted">Категория</span>
											</div>
											<div v-if="product.category" class="col-xl-8">{{ product.category.title }}</div>
										</div>
									</div>
								</div>

								<div class="row" v-if="product.brand">
									<div class="col-12">
										<div class="row mb-2">
											<div class="col-xl-4">
												<span class="text-muted">Бренд</span>
											</div>
											<div v-if="product.brand" class="col-xl-8">{{ product.brand.title }}</div>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-12">
										<div class="row mb-2">
											<div class="col-xl-4">
												<span class="text-muted">Производитель</span>
											</div>
											<div v-if="product.manufacturer" class="col-xl-8">{{ product.manufacturer.name }}</div>
										</div>
									</div>
								</div>

								<div class="row" v-if="product.expiration_date">
									<div class="col-12">
										<div class="row mb-2">
											<div class="col-xl-4">
												<span class="text-muted">Срок хранения</span>
											</div>
											<div v-if="product.expiration_date" class="col-xl-8">{{ product.expiration_date + " " + product.expiration_type.title }}</div>
										</div>
									</div>
								</div>

								<div class="row" v-if="product.article">
									<div class="col-12">
										<div class="row mb-2">
											<div class="col-xl-4">
												<span class="text-muted">Артикул</span>
											</div>
											<div v-if="product.article" class="col-xl-8">{{ product.article }}</div>
										</div>
									</div>
								</div>

								<div class="row" v-if="product.packaging">
									<div class="col-12">
										<div class="row mb-2">
											<div class="col-xl-4">
												<span class="text-muted">Упаковка</span>
											</div>
											<div v-if="product.packaging" class="col-xl-8">{{ product.packaging.title }}</div>
										</div>
									</div>
								</div>

								<div class="row" v-if="product.weight">
									<div class="col-12">
										<div class="row mb-2">
											<div class="col-xl-4">
												<span class="text-muted">Вес</span>
											</div>
											<div v-if="product.weight" class="col-xl-8">{{ product.weight + " " + product.weight_type.title }}</div>
										</div>
									</div>
								</div>

								<div class="row" v-if="product.weight">
									<div class="col-12">
										<div class="row mb-2">
											<div class="col-xl-4">
												<span class="text-muted">Калории</span>
											</div>
											<div v-if="product.weight" class="col-xl-8">{{ product.calorie + " ккал" }}</div>
										</div>
									</div>
								</div>

								<div class="row" v-if="product.count">
									<div class="col-12">
										<div class="row mb-2">
											<div class="col-xl-4">
												<span class="text-muted">На складе</span>
											</div>
											<div v-if="product.count" class="col-xl-8">{{ product.count + " шт" }}</div>
										</div>
									</div>
								</div>

								<div class="row" v-if="product.tags">
									<div class="col-12">
										<div class="row mb-2">
											<div class="col-xl-4">
												<span class="text-muted">Теги</span>
											</div>
											<div v-if="product.tags" class="col-xl-8">
												<p href="#" v-for="tag in product.tags" :key="tag.id">{{ tag.title }}</p>
											</div>
										</div>
									</div>
								</div>

								<hr />

								<!-- Product quantity -->

								<div class="mb-2">
									<div class="row">
										<a v-if="product.count <= 0" class="bg-white d-flex flex-fill align-items-center justify-content-center px-0">
											<button class="btn btn-outline-primary text-nowrap d-flex align-items-center justify-content-center gap-2 w-100" disable>
												<small>Нет в наличии</small>
											</button>
										</a>
										<a
											v-else-if="checkToHaving(product, 'cart') === undefined"
											@click="addToCart(product)"
											class="bg-white d-flex flex-fill align-items-center justify-content-center px-0"
										>
											<button class="btn btn-outline-danger text-nowrap d-flex align-items-center justify-content-center gap-2 w-100">
												<i class="fas fa-plus"></i>
												<i class="fas fa-shopping-basket fs-5"></i>
											</button>
										</a>

										<div v-else class="d-flex flex-fill align-items-center justify-content-center border rounded-3 bg-white px-0">
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

								<div class="mb-2">
									<div class="row">
										<a @click="toggleToFavourite(product)" class="bg-white d-flex flex-fill align-items-center justify-content-center px-0">
											<button
												class="btn btn-outline-danger text-nowrap d-flex align-items-center justify-content-center gap-2 w-100"
												:class="checkToHaving(product, 'favourite') === undefined ? '' : 'active'"
											>
												<i class="fas fa-heart"></i>
												<p>{{ checkToHaving(product, "favourite") === undefined ? "Добавить в избранное" : "Удалить из избранного" }}</p>
											</button>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<hr class="divider" />

		<!-- Product details -->

		<section>
			<div class="container mt-5">
				<ul class="nav nav-tabs nav-lavalamp justify-content-center mb-4" id="productTab" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" id="composition-tab" data-toggle="tab" href="#composition" role="tab" aria-controls="composition" aria-selected="true">
							Состав продукта
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="description-tab" data-toggle="tab" href="#description" role="tab" aria-controls="description" aria-selected="false">
							Описание
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="review-tab" data-toggle="tab" href="#review" role="tab" aria-controls="review" aria-selected="false">
							Отзывы
						</a>
					</li>
				</ul>

				<!-- Product tab content -->

				<div class="tab-content" id="productTabContent">
					<div class="tab-pane fade show active" id="composition" role="tabpanel" aria-labelledby="composition-tab">
						<div class="row justify-content-center">
							<div class="col-lg-8">
								<div class="py-3 py-lg-4">
									<header>
										<div class="h3 mb-1">Состав продукта (на 100 г.)</div>
									</header>

									<div class="py-3 py-lg-4">
										<p v-html="product.ingredients"></p>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="tab-pane fade" id="description" role="tabpanel" aria-labelledby="description-tab">
						<div class="row justify-content-center">
							<div class="col-lg-8">
								<div class="py-3 py-lg-4">
									<header>
										<div class="h3 mb-1">Описание</div>
									</header>

									<div class="py-3 py-lg-4">
										<p v-html="product.description"></p>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="tab-pane fade" id="review" role="tabpanel" aria-labelledby="review-tab">
						<!-- Widget rating -->

						<div class="row justify-content-center">
							<div class="col-lg-8">
								<div class="rating-overall">
									<!-- Comments -->

									<div class="py-3 py-lg-4">
										<!-- Comments header -->

										<header>
											<div class="h3 mb-1 d-flex">
												Отзывы (
												<p class="text-black">{{ product.rate }}<i class="fas fa-star text-warning pr-1"></i></p>
												)
											</div>
											<p class="text-muted"><small>Новые отзывы</small></p>
										</header>

										<!-- Comments feedback -->

										<div class="pt-3 pt-lg-4">
											<div id="comment-1">
												<div class="mb-4">
													<div class="d-flex align-items-center text-small">
														<img src="storage/images/main/noname.jpg" class="mr-2 rounded-circle" alt="..." style="width: 40px;" />
														<div><strong class="mr-1">Анна Семанова</strong></div>
														<div class="text-muted">- 45 минут назад</div>
														<div class="ml-auto">
															<i class="fa fa-star icon-xs text-danger"></i>
															<i class="fa fa-star icon-xs text-danger"></i>
															<i class="fa fa-star icon-xs text-danger"></i>
															<i class="fa fa-star icon-xs text-secondary"></i>
															<i class="fa fa-star icon-xs text-secondary"></i>
														</div>
													</div>
													<div class="my-2">
														Вкусные, любим кушать всей семьёй!
													</div>
												</div>
											</div>
										</div>
									</div>

									<hr />

									<!-- Reply -->
									<p>В разработке!</p>
									<!--  -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
</template>
<script>
export default {
	name: "product",
	data() {
		return {
			product: [],
		};
	},
	mounted() {
		this.getProduct(this.$route);
	},
	watch: {
		$route(to, from) {
			this.getProduct(to);
		},
	},
	methods: {
		getProduct(place) {
			this.axios.get("/api/product/" + place.params.id).then((res) => {
				this.product = res.data.data;
			});
		},
	},
};
</script>
<style></style>
