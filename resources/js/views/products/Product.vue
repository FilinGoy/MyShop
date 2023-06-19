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

								<div class="row" v-if="product.calorie">
									<div class="col-12">
										<div class="row mb-2">
											<div class="col-xl-4">
												<span class="text-muted">Калории</span>
											</div>
											<div v-if="product.calorie" class="col-xl-8">{{ product.calorie + " ккал" }}</div>
										</div>
									</div>
								</div>

								<!-- 								<div class="row" v-if="product.count">
									<div class="col-12">
										<div class="row mb-2">
											<div class="col-xl-4">
												<span class="text-muted">На складе</span>
											</div>
											<div v-if="product.count" class="col-xl-8">{{ product.count + " шт" }}</div>
										</div>
									</div>
								</div> -->

								<div class="row" v-if="product.tags > 0">
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

									<div>
										<!-- Comments header -->

										<header>
											<div class="h3 mb-1 d-flex">
												Отзывы (
												<p class="text-black">{{ product.rate }}<i class="fas fa-star text-warning pr-1"></i> - {{ countReviews + " " + this.getReviewWord(countReviews) }}</p>
												)
											</div>
											<p class="text-muted"><small>Последние отзывы</small></p>
										</header>

										<!-- Comments feedback -->

										<div v-for="review in reviews" :key="review.id" class="pt-3 pt-lg-4 px-3 mb-2 bg-white border">
											<div id="comment-1">
												<div class="mb-4">
													<div class="d-flex justify-content-between align-items-center text-small">
														<div>
															<strong class="mr-1">{{ review.user.first_name + " " + review.user.last_name }}</strong>
														</div>
														<div class="text-muted">{{ review.date }}</div>
													</div>
													<div>
														<div class="ml-auto">
															<i class="fa fa-star icon-xs" :class="review.rate > 0 ? 'text-danger' : 'text-secondary'"></i>
															<i class="fa fa-star icon-xs" :class="review.rate > 1 ? 'text-danger' : 'text-secondary'"></i>
															<i class="fa fa-star icon-xs" :class="review.rate > 2 ? 'text-danger' : 'text-secondary'"></i>
															<i class="fa fa-star icon-xs" :class="review.rate > 3 ? 'text-danger' : 'text-secondary'"></i>
															<i class="fa fa-star icon-xs" :class="review.rate > 4 ? 'text-danger' : 'text-secondary'"></i>
														</div>
														{{ review.content }}
													</div>
													<div class="border-top">
														<a href="" role="button" v-if="this.$store.state.user?.position_id == 2" @click.prevent="removeReview(review.id)"
															><i class="fas fa-trash-alt"></i> Удалить отзыв</a
														>
													</div>
												</div>
											</div>
										</div>
									</div>

									<hr />

									<!-- Reply -->
									<div v-if="this.$store.state.isLoginUser" class="py-3 py-lg-4">
										<!-- Reply header -->

										<div class="h3 mb-1">Оставить отзыв</div>
										<!-- Reply form -->

										<div>
											<form>
												<div class="row">
													<div class="col-lg-6">
														<div class="form-group mb-0">
															<label class="label" for="exampleInputEmail1">Ваша оценка:<span class="text-danger">*</span></label>
															<fieldset class="px-0 form-control rating d-flex justify-content-end align-items-center">
																<input type="radio" id="option5" class="btn-check" value="5" v-model="stars" autocomplete="off" />
																<label for="option5"><i class="fa fa-star fa-sm"></i></label>
																<input type="radio" id="option4" class="btn-check" value="4" v-model="stars" autocomplete="off" />
																<label for="option4"><i class="fa fa-star fa-sm"></i></label>
																<input type="radio" id="option3" class="btn-check" value="3" v-model="stars" autocomplete="off" />
																<label for="option3"><i class="fa fa-star fa-sm"></i></label>
																<input type="radio" id="option2" class="btn-check" value="2" v-model="stars" autocomplete="off" />
																<label for="option2"><i class="fa fa-star fa-sm"></i></label>
																<input type="radio" id="option1" class="btn-check" value="1" v-model="stars" autocomplete="off" />
																<label for="option1"><i class="fa fa-star fa-sm"></i></label>
															</fieldset>
														</div>
													</div>
												</div>
												<div class="form-group">
													<label class="label" for="exampleComment">Комментарий ({{ comment.length ?? "0" }} из 500 символов)</label>
													<textarea class="form-control" cols="20" rows="4" v-model="comment" :maxlength="500"></textarea>
												</div>

												<div class="mb-3">
													<div v-if="this.error">
														<p class="text-danger">{{ this.error }}</p>
													</div>
													<div v-if="this.added">
														<p class="text-success">{{ this.added }}</p>
													</div>
												</div>

												<div class="d-flex justify-content-between align-items-center">
													<button type="button" role="button" @click.prevent="sendReview(product.id)" class="btn btn-outline-danger"><strong>Отправить</strong></button>
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
										<p v-if="(product.description)" v-html="product.description"></p>
										<p v-else>Пока нет данных об описании данного продукта, при необходимости свяжитесь с администратором.</p>
									</div>
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
			reviews: [],
			countReviews: 0,
			stars: 0,
			canReview: false,
			comment: "",
			error: "",
			added: "",
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
				this.getReviews(res.data.data.id);
			});
		},

		getReviews(id) {
			this.axios.get("/api/product/" + id + "/listReviews").then((res) => {
				this.reviews = res.data.reviews;
				this.countReviews = res.data.count;
			});
		},

		removeReview(id) {
			this.axios.post("/api/product/" + id + "/removeReview", { user: this.$store.state.user?.id }).then((res) => {
				this.getReviews(this.product.id);
			});
		},

		sendReview(id) {
			if (!this.stars) {
				this.error = "Требуется выбрать оценку!";
				return;
			}
			this.axios
				.post("/api/product/" + id + "/addReview", { rate: this.stars, content: this.comment, user: this.$store.state.user?.id })
				.then((res) => {
					this.added = "Ваш отзыв успешно добавлен/обновлён!";
					this.error = "";
					this.getReviews(id);
				})
				.catch((err) => {
					this.error = err;
				});
		},

		getReviewWord(count) {
			return count % 10 == 1 && count % 100 != 11 ? "отзыв" : count % 10 >= 2 && count % 10 <= 4 && (count % 100 < 10 || count % 100 >= 20) ? "отзыва" : "отзывов";
		},
	},
};
</script>
<style>
.rating {
	direction: rtl;
	background-color: transparent;
	border: none;
}

.rating input + label {
	color: #565e6d;
}

.rating input:hover + label ~ input + label {
	color: red;
}

.rating input:checked + label ~ input + label {
	color: red;
}

.rating input:hover + label {
	color: red;
}

.rating input:checked + label {
	color: red;
}
</style>
