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
									<img :src="product.preview_image" class="d-block w-100"/>
								</div>
								<div class="carousel-item" v-for="image in product.images" :key="image.id">
									<img v-if="image" :src="`storage/`+image.url" class="d-block w-100"/>
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
									<span>Цена: {{ product.price }} ₽</span>
								</div>

								<hr />

								<!-- Product brand -->

								<div class="row">
									<div class="col-6 col-lg-12">
										<div class="row mb-2">
											<div class="col-xl-4">
												<span class="text-muted">Категория</span>
											</div>
											<div v-if="product.category" class="col-xl-8">{{ product.category.title }}</div>
										</div>
									</div>
								</div>

								<div class="row" v-if="product.brand">
									<div class="col-6 col-lg-12">
										<div class="row mb-2">
											<div class="col-xl-4">
												<span class="text-muted">Бренд</span>
											</div>
											<div v-if="product.brand" class="col-xl-8">{{ product.brand.title }}</div>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-6 col-lg-12">
										<div class="row mb-2">
											<div class="col-xl-4">
												<span class="text-muted">Производитель</span>
											</div>
											<div v-if="product.manufacturer" class="col-xl-8">{{ product.manufacturer.name }}</div>
										</div>
									</div>
								</div>

								<div class="row" v-if="product.expiration_date">
									<div class="col-6 col-lg-12">
										<div class="row mb-2">
											<div class="col-xl-4">
												<span class="text-muted">Срок хранения</span>
											</div>
											<div v-if="product.expiration_date" class="col-xl-8">{{ product.expiration_date + " " + product.expiration_type.title }}</div>
										</div>
									</div>
								</div>

								<div class="row" v-if="product.article">
									<div class="col-6 col-lg-12">
										<div class="row mb-2">
											<div class="col-xl-4">
												<span class="text-muted">Артикул</span>
											</div>
											<div v-if="product.article" class="col-xl-8">{{ product.article }}</div>
										</div>
									</div>
								</div>

								<div class="row" v-if="product.packaging">
									<div class="col-6 col-lg-12">
										<div class="row mb-2">
											<div class="col-xl-4">
												<span class="text-muted">Упаковка</span>
											</div>
											<div v-if="product.packaging" class="col-xl-8">{{ product.packaging.title }}</div>
										</div>
									</div>
								</div>

								<div class="row" v-if="product.ingredients">
									<div class="col-6 col-lg-12">
										<div class="row mb-2">
											<div class="col-xl-4">
												<span class="text-muted">Состав</span>
											</div>
											<div v-if="product.ingredients" class="col-xl-8">{{ product.ingredients }}</div>
										</div>
									</div>
								</div>

								<div class="row" v-if="product.weight">
									<div class="col-6 col-lg-12">
										<div class="row mb-2">
											<div class="col-xl-4">
												<span class="text-muted">Вес</span>
											</div>
											<div v-if="product.weight" class="col-xl-8">{{ product.weight + " " + product.weight_type.title }}</div>
										</div>
									</div>
								</div>

								<div class="row" v-if="product.weight">
									<div class="col-6 col-lg-12">
										<div class="row mb-2">
											<div class="col-xl-4">
												<span class="text-muted">Калории</span>
											</div>
											<div v-if="product.weight" class="col-xl-8">{{ product.calorie + " ккал" }}</div>
										</div>
									</div>
								</div>

								<div class="row" v-if="product.count">
									<div class="col-6 col-lg-12">
										<div class="row mb-2">
											<div class="col-xl-4">
												<span class="text-muted">На складе</span>
											</div>
											<div v-if="product.count" class="col-xl-8">{{ product.count + " шт" }}</div>
										</div>
									</div>
								</div>

								<div class="row" v-if="product.tags">
									<div class="col-6 col-lg-12">
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
										<div class="col-5">
											<input type="number" class="form-control mr-2" value="1" />
										</div>
										<div class="col-7">
											<button class="btn btn-block btn-primary"><i class="icon icon-cart"></i> В корзину</button>
										</div>
									</div>
								</div>

								<hr />
							</div>

							<!-- Add to basket -->

							<div class="btn-group w-100">
								<span class="btn btn-sm btn-outline-primary" data-toggle="button" aria-pressed="false" autocomplete="off">
									<span class="show"><i class="fa fa-heart-o"></i> Избранное</span>
									<span class="hide"><i class="fa fa-heart"></i> В избранном</span>
								</span>
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
						<a class="nav-link active" id="review-tab" data-toggle="tab" href="#review" role="tab" aria-controls="review" aria-selected="true">
							Отзывы
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="description-tab" data-toggle="tab" href="#description" role="tab" aria-controls="description" aria-selected="false">
							Описание
						</a>
					</li>
				</ul>

				<!-- Product tab content -->

				<div class="tab-content" id="productTabContent">
					<div class="tab-pane fade show active" id="review" role="tabpanel" aria-labelledby="review-tab">
						<!-- Widget rating -->

						<div class="row justify-content-center">
							<div class="col-lg-8">
								<div class="rating-overall">
									<!-- Comments -->

									<div class="py-3 py-lg-4">
										<!-- Comments header -->

										<header>
											<div class="h3 mb-1">Отзывы</div>
											<p class="text-muted"><small>Новые отзывы</small></p>
										</header>

										<!-- Comments feedback -->

										<div class="pt-3 pt-lg-4">
											<div id="comment-1">
												<div class="mb-4">
													<div class="d-flex align-items-center text-small">
														<img src="storage/images/main/iconSite.png" class="mr-2 rounded-circle" alt="..." style="width: 40px;" />
														<div><strong class="mr-1">Анна Влексеевна</strong></div>
														<div class="text-muted">- 45 минут назад</div>
														<div class="ml-auto">
															<i class="fa fa-star icon-xs text-primary"></i>
															<i class="fa fa-star icon-xs text-primary"></i>
															<i class="fa fa-star icon-xs text-primary"></i>
															<i class="fa fa-star icon-xs text-secondary"></i>
															<i class="fa fa-star icon-xs text-secondary"></i>
														</div>
													</div>
													<div class="my-2">
														Согласна, но не очень хорошо!
													</div>
													<div>
														<a class="link link-right link-dark"><strong>Ответить</strong></a>
													</div>
												</div>
											</div>
										</div>
									</div>

									<hr />

									<!-- Reply -->

									<div class="py-3 py-lg-4">
										<!-- Reply header -->

										<header>
											<div class="h3 mb-1">Оставить отзыв</div>
											<p class="text-muted"><small>Ваш E-Mail под защитой и будет скрыт для других пользователям.</small></p>
										</header>

										<!-- Reply form -->

										<div class="pt-3 pt-lg-4">
											<form>
												<div class="row">
													<div class="col-lg-6">
														<div class="form-group">
															<label class="label" for="exampleInputEmail1">E-Mail почта</label>
															<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" />
														</div>
													</div>
													<div class="col-lg-6">
														<div class="form-group">
															<label class="label" for="exampleInputName1">Видимое имя</label>
															<input type="password" class="form-control" id="exampleInputName1" />
														</div>
													</div>
												</div>
												<div class="form-group">
													<label class="label" for="exampleComment">Комментарий</label>
													<textarea class="form-control" name="" id="exampleComment" cols="20" rows="4"></textarea>
												</div>

												<div class="d-flex justify-content-between align-items-center">
													<button type="submit" class="btn link link-right link-dark"><strong>Отправить</strong></button>
												</div>
											</form>
										</div>
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
										<p>{{ product.description }}</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="shipping" role="tabpanel" aria-labelledby="shipping-tab">
						<div class="row justify-content-center">
							<div class="col-lg-8">
								<div class="py-3 py-lg-4">

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
		this.getProduct();
	},
	methods: {
		getProduct() {
			this.axios.get("/api/products/" + this.$route.params.id).then((res) => {
				this.product = res.data.data;
				console.log(res.data.data);
			});
		},
	},
};
</script>
<style></style>
