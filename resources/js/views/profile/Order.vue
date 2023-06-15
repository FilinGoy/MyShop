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
				<a type="button" @click.prevent="this.quitAccount" class="dropdown-item mt-auto border-top text-wrap p-4">Выйти</a>
			</div>
		</div>
		<div class="d-flex col-12 col-lg-8 flex-fill">
			<div class="bg-white flex-fill px-4 pt-2 pb-4">
				<div class="d-flex justify-content-between flex-column py-2">
					<div class="my-3">
						<h1 class="my-0">
							Заказ №{{ order.id }} <span class="badge bg-light text-black">{{ order.statuses?.title }}</span>
						</h1>
					</div>
					<p class="px-1">{{ this.formattedDate(order.created_at) }}</p>
					<div class="row mb-3">
						<p class="col-sm-4 text-muted">Дата доставки:</p>
						<div class="col-sm-8">
							<p>{{ this.formattedDate(order.datetime_delivery).split(" ")[0] }} (в течении дня)</p>
						</div>
					</div>
					<div class="row mb-3">
						<p class="col-sm-4 text-muted">Адрес:</p>
						<div class="col-sm-8">
							<p>{{ order.address }}</p>
						</div>
					</div>
					<div class="row mb-3">
						<p class="col-sm-4 text-muted">Оплата:</p>
						<div class="col-sm-8">
							<p>{{ order.payment?.title }}</p>
						</div>
					</div>
					<div class="row mb-3">
						<p class="col-sm-4 text-muted">Контактное лицо:</p>
						<div class="col-sm-8">
							<p>{{ order.first_name + " " + order.last_name + ", " + order.user?.number + ", " + order.user?.email }}</p>
						</div>
					</div>
					<div class="row mb-3">
						<p class="col-sm-4 text-muted">Комментарий:</p>
						<div class="col-sm-8">
							<p>{{ order.description ?? "—" }}</p>
						</div>
					</div>

					<div class="row mb-3" v-if="error">
						<p class="text-danger">{{ error }}</p>
					</div>
				</div>
				<div class="row">
					<h4>Состав заказа</h4>
					<hr />
					<div class="row g-2">
						<table class="table table-hover standart">
							<tbody>
								<tr class="p-2 position-relative" v-for="product in products" :key="product.id">
									<td class="text-left">
										<div class="d-flex flex-column">
											<p>{{ product.title }}</p>
											<p>{{ product.pivot.count }} шт.</p>
										</div>
									</td>
									<td class="text-right">
										<div class="d-flex flex-column">
											<p class="text-nowrap">{{ (product.pivot.price * product.pivot.count).toFixed(2) }} ₽</p>
											<small class="text-nowrap">{{ product.pivot.price }} ₽ за шт.</small>
										</div>
									</td>
									<router-link class="stretched-link" :to="`../../product/` + product.id"></router-link>
								</tr>
							</tbody>
						</table>
						<div class="col d-flex flex-row justify-content-end align-items-center">
							<div class="">Итого:</div>
							<div class="pl-3">{{ order.total_price }} ₽</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</template>
<script>
import { mapState, mapGetters } from "vuex";
export default {
	name: "order",
	data() {
		return {
			order: [],
			products: [],
		};
	},
	computed: {
		...mapGetters(["statusUser"]),
		...mapState(["user"]),
	},
	mounted() {
		this.getOrder();
	},
	watch: {
		"$store.state.user": function (value) {
			this.id = value.id;
			if (value.id !== this.order.user_id) {
				this.$router.push({ name: "main" });
			}
		},
	},
	methods: {
		getOrder() {
			this.axios.get("/api/order/" + this.$route.params.id).then((res) => {
				this.order = res.data.order;
				this.products = this.order.orders_products;
			});
		},
	},
};
</script>
<style></style>
