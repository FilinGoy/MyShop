<template>
	<div class="row flex-fill g-2">
		<div class="d-none d-lg-block col-12 col-lg-4">
			<div class="d-flex flex-column bg-white">
				<h4 class="d-none d-lg-block mb-0 p-4">Личный кабинет</h4>
				<div class="d-flex flex-column flex-fill">
					<router-link to="/profile/orders" class="dropdown-item text-wrap py-3 px-4 active">Мои заказы</router-link>
					<router-link to="/profile/favorite" class="dropdown-item text-wrap py-3 px-4">Избранное</router-link>
					<router-link to="/profile" class="dropdown-item text-wrap py-3 px-4">Учётная запись</router-link>
				</div>
				<a type="button" v-if="this.$store.state.isLoginUser" @click.prevent="this.quitAccount" class="dropdown-item mt-auto border-top text-wrap p-4">Выйти</a>
			</div>
		</div>
		<div class="d-flex col-12 col-lg-8 flex-fill">
			<div class="bg-white flex-fill px-4 pt-2 pb-4">
				<div v-if="orders" class="row">
					<div class="d-flex justify-content-between align-items-center py-4 flex-wrap">
						<div class="d-flex align-items-end">
							<h1 class="my-0 lh-1">Мои заказы</h1>
						</div>
					</div>
				</div>
				<div class="row">
					<template v-if="orders">
						<div class="row row-cols-1 g-2">
							<table class="table table-hover standart">
								<thead>
									<tr class="d-none d-md-table-row d-text-muted fw-normal">
										<th scope="col">Дата и время</th>
										<th scope="col">Номер заказа</th>
										<th scope="col">Статус</th>
										<th scope="col">Сумма</th>
									</tr>
								</thead>
								<tbody>
									<tr class="p-2 position-relative" v-for="order in orders" :key="order.id">
										<td class="d-none d-md-table-cell">{{ this.formattedDate(order.created_at) }}</td>
										<td>
											<div class="d-flex flex-column">
												<p>Заказ #{{ order.id }}</p>
												<p class="d-block d-md-none">{{ this.formattedDate(order.created_at) }}</p>
											</div>
										</td>
										<td class="d-none d-md-table-cell">
											<p class="badge text-dark" :class="checkColor(order.statuses.id)">{{ order.statuses.title }}</p>
										</td>
										<td>
											<div class="d-flex flex-column align-items-end">
												<p>{{ order.total_price }} ₽</p>
											</div>
										</td>
										<router-link class="stretched-link" :to="`order/` + order.id"></router-link>
									</tr>
								</tbody>
							</table>
						</div>
						<div class="row d-flex justify-content-between align-items-center">
							<div class="col checkgroup d-flex justify-content-start align-items-center">
								<input type="radio" class="btn-check" v-model="count" value="10" id="option1" autocomplete="off" checked />
								<label for="option1">10</label>

								<input type="radio" class="btn-check" v-model="count" value="50" id="option2" autocomplete="off" />
								<label for="option2">50</label>

								<input type="radio" class="btn-check" v-model="count" value="100" id="option3" autocomplete="off" />
								<label for="option3">100</label>
							</div>
							<div class="col">
								<div v-if="pags && pags.last_page > 1" class="row">
									<nav aria-label="Page navigation example">
										<ul class="pagination justify-content-end align-items-center mb-0">
											<template v-for="page in pags.links" :key="page.label">
												<li class="page-item" :class="page.active ? 'active' : ''">
													<template v-if="page.url">
														<div
															v-if="page.label === 'pagination.previous' || page.label === 'pagination.next'"
															@click.prevent="getOrders(page.label === 'pagination.previous' ? page.prev_page_url : page.next_page_url)"
															type="button"
															class="page-link"
														>
															<i class="fa-solid" :class="page.label === 'pagination.previous' ? 'fa-chevron-left' : 'fa-chevron-right'"></i>
														</div>
														<div v-else @click.prevent="getOrders(page.label)" type="button" class="page-link">{{ page.label }}</div>
													</template>
												</li>
											</template>
										</ul>
									</nav>
								</div>
							</div>
						</div>
					</template>
					<div v-else class="d-flex flex-column align-items-center p-md-5">
						<img class="w-25 py-5" src="storage/images/main/favourite-none.png" />
						<h4>В заказах пока ничего нет</h4>
						<p class="w-50 text-center">Здесь будут храниться ваши будующие заказы</p>
						<router-link class="btn btn-danger rounded-3" to="/">На главную страницу</router-link>
					</div>
				</div>
			</div>
		</div>
	</div>
</template>
<script>
export default {
	name: "orders",
	data() {
		return {
			count: 10,
			orders: [],
			pags: null,
		};
	},
	mounted() {
		this.getOrders();
	},
	watch: {
		count() {
			this.getOrders();
		},
	},
	methods: {
		getOrders(page) {
			this.axios
				.post("/api/orders", {
					user: this.$store.state.user?.id,
					count: this.count,
					page: page,
				})
				.then((res) => {
					this.pags = res.data.orders;
					this.orders = this.pags.data;
				});
		},

		checkColor(id) {
			switch (id) {
				case 1:
				case 2:
					return "bg-warning";
				case 5:
					return "bg-gray";
				case 3:
				case 4:
					return "bg-info text-white";
				case 6:
					return "bg-success";
				case 7:
				case 8:
				case 9:
				case 10:
					return "bg-danger text-white";
				default:
					return "bg-light";
			}
		},
	},
};
</script>
<style></style>
